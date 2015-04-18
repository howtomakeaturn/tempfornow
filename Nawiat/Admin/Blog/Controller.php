<?php namespace Nawiat\Admin\Blog;

use \Controller as BaseController;
use \View;

class Controller extends BaseController
{
    public function getIndex()
    {
        return 'Admin all posts';
    }
    
    public function getView()
    {
        return View::make('Admin/Blog::view');        
    }
    
}
