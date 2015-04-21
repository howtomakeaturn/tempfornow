<?php namespace Atayal\Modules\Page\Admin;

use \Controller as BaseController;
use \View;
use \File;
use \Input;
use \Redirect;
use Atayal\Modules\Page\Manager as Page;

class Controller extends BaseController
{
    public function getIndex()
    {
        $pages = Page::all();
                
        return View::make('Page/Admin::index', ['pages' => $pages]);        
    }
    
    public function getNew()
    {
        return View::make('Page/Admin::new', ['templates' => Page::templates()]);                
    }
    
    public function postNew()
    {
        $page = Page::create(
            Input::get('id'),
            ['template' => Input::get('template')],
            Input::get('content')
        );
        
        $page->save();
        
        return Redirect::to('/admin/page');
    }
    
    public function getEdit($pageId)
    {
        $page = Page::get($pageId);

        
        return View::make('Page/Admin::edit', 
            [
                'page' => $page,
                'templates' => Page::templates()
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
    
    public function postDelete()
    {
        $page = Page::get( Input::get('pageId') );
        
        $page->delete();
        
        return Redirect::to('/admin/page/');        
    }
}
