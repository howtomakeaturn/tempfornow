<?php namespace Atayal\Modules\Blog\Main;

use \Controller as BaseController;
use \View;

class Controller extends BaseController
{
    public function getIndex()
    {
        return View::make('Frame::layout')->nest('child', 'Blog::index', []);
    }
    
    public function getView($pageId)
    {        
        // $page = Page::get($pageId);
                
        return View::make('Frame::layout')->nest('child', 'Blog::default', []);
    }
    
}
