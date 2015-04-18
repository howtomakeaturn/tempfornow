<?php namespace Nawiat\Modules\Page\Main;

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
        $page = File::get( base_path('Nawiat/Modules/Page/Main/storage/' . $pageId . '/main.html') );
        
        $config = parse_ini_file( base_path('Nawiat/Modules/Page/Main/storage/' . $pageId . '/main.ini') );
                
        return View::make('Page::' . $config['template'], ['main' => $page]);
        
        return $page;
    }
    
}
