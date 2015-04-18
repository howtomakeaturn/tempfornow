<?php namespace Nawiat\Modules\Page;

use \Controller as BaseController;
use \View;
use \File;

class Controller extends BaseController
{
    public function getIndex()
    {
        return 'All pages';
    }
    
    public function getView($pageId)
    {
        $page = File::get( base_path('Nawiat/Modules/Page/storage/' . $pageId . '/main.html') );
        
        $config = parse_ini_file( base_path('Nawiat/Modules/Page/storage/' . $pageId . '/main.ini') );
                
        return View::make('Page::' . $config['view'], ['main' => $page]);
        
        return $page;
    }
    
}
