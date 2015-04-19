<?php namespace Atayal\Modules\Blog\Main;

use \Controller as BaseController;
use \View;

class Controller extends BaseController
{
    public function getIndex()
    {
        return 'All posts';
    }
    
    public function getView()
    {
        return View::make('Blog::view');        
    }
    
}
