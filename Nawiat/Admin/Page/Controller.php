<?php namespace Nawiat\Admin\Page;

use \Controller as BaseController;
use \View;
use \File;
use \Input;
use \Redirect;

class Controller extends BaseController
{
    public function getIndex()
    {
        $dirs = array_filter(glob(base_path() . '/Nawiat/Modules/Page/storage/*'), 'is_dir');
        
        $pages = [];

        foreach($dirs as $dir){
            $splits = explode('/', $dir);

            $page = end($splits);

            $pages[] = $page;
        }

        return View::make('Admin/Page::index', ['pages' => $pages]);        
    }
    
    public function getEdit($pageId)
    {
        $page = File::get( base_path('Nawiat/Modules/Page/storage/' . $pageId . '/main.html') );
        
        $templateFullPaths = array_filter(glob(base_path() . '/Nawiat/Modules/Page/views/*'), 'is_file');
        
        $templates = [];
        
        foreach($templateFullPaths as $path){
            $splits = explode('/', $path);
            
            $template = end($splits);
            
            $templates[] = explode('.', $template)[0];
        }
        
        return View::make('Admin/Page::edit', 
            [
                'page' => $page,
                'pageId' => $pageId,                
                'templates' => $templates
            ]
        );
    }
    
    public function postUpdate()
    {
        File::put( base_path('Nawiat/Modules/Page/storage/' . Input::get('pageId') . '/main.html'), Input::get('content') );

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
