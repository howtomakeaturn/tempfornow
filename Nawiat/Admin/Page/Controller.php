<?php namespace Nawiat\Admin\Page;

use \Controller as BaseController;
use \View;

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
