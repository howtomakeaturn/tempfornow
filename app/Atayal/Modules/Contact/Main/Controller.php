<?php namespace Atayal\Modules\Contact\Main;

use \Controller as BaseController;
use \View;
use \Mail;
use \Input;

class Controller extends BaseController
{
    public function getIndex()
    {
        return View::make('Frame::layout')->nest('child', 'Contact::index', []);
    }
    
    public function postThanks()
    {
        $params = Input::all();

        Mail::send('Contact::email', $params, function($message) use ($params)
        {
            $message->to('howtomakeaturn@hotmail.com', 'howtomakeaturn')->subject($params['subject']);
        });
        
        return View::make('Frame::layout')->nest('child', 'Contact::thanks', []);        
    }
        
}
