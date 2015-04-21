<?php namespace Atayal\Modules\Frame\Admin;

use \Controller as BaseController;
use \View;

class Controller extends BaseController
{
    public function getIndex()
    {
        return View::make('Admin/Frame::index');
    }
        
}
