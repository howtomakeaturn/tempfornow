<?php namespace Atayal\Modules\Page\Main;

use \Controller as BaseController;
use \View;
use \File;
use Atayal\Modules\Page\Manager as Page;

class Controller extends BaseController
{
    public function getIndex()
    {
        return 'All pages';
    }
    
    public function getView($pageId)
    {        
        $page = Page::get($pageId);
                
#        return View::make('Page::' . $page->config['template'], ['main' => $page->content]);        

        return View::make('Frame::layout')->nest('child', 'Page::' . $page->config['template'], ['main' => $page->content]);
    }
    
}
