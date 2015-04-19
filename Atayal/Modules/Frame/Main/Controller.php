<?php namespace Atayal\Modules\Frame\Main;

use \Controller as BaseController;
use \View;

class Controller extends BaseController
{
    public function getIndex()
    {
        return View::make('Frame::layout');
    }
        
}
