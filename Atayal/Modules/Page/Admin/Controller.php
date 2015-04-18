<?php namespace Atayal\Modules\Page\Admin;

use \Controller as BaseController;
use \View;
use \File;
use \Input;
use \Redirect;
use Atayal\Modules\Page\Page;

class Controller extends BaseController
{
    public function getIndex()
    {
        $pages = Page::all();

        return View::make('Admin/Page::index', ['pages' => $pages]);        
    }
    
    public function getEdit($pageId)
    {
        $page = Page::get($pageId);

        $templateFullPaths = array_filter(glob(base_path() . '/Atayal/Modules/Page/Main/views/*'), 'is_file');
        
        $templates = [];
        
        foreach($templateFullPaths as $path){
            $splits = explode('/', $path);
            
            $template = end($splits);
            
            $templates[] = explode('.', $template)[0];
        }
        
        return View::make('Admin/Page::edit', 
            [
                'page' => $page,
                'templates' => $templates
            ]
        );
    }
    
    public function postUpdate()
    {
        $page = Page::get( Input::get('pageId') );
        
        $page->content = Input::get('content');
        
        $page->config['template'] = Input::get('template');
        
        $page->save();

        return Redirect::back();
    }
    
    public function getView()
    {
        return View::make('Admin/Blog::view');        
    }
    
    public function getPreview()
    {
        return View::make('Admin/Blog::preview');
    }
    
}
