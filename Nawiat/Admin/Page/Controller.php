<?php namespace Nawiat\Admin\Page;

use \Controller as BaseController;
use \View;

class Controller extends BaseController
{
    public function getIndex()
    {
        return View::make('Admin/Page::index')->nest('main', 'child.view');        
        return View::make('Admin/Page::index');                
    }
    
    public function getNew()
    {
        return View::make('Admin/Blog::new');                
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
