<?php namespace Atayal\Modules\Contact\Main;

use \Controller as BaseController;
use \View;

class Controller extends BaseController
{
    public function getIndex()
    {
        return View::make('Frame::layout')->nest('child', 'Contact::index', []);
    }
    
    public function postThanks()
    {
        return View::make('Frame::layout')->nest('child', 'Contact::thanks', []);        
    }
        
}
