<?php namespace Nawiat\Admin\Blog;

use \Controller as BaseController;
use \View;

class Controller extends BaseController
{
    public function getIndex()
    {
        return View::make('Admin/Blog::index');                
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
