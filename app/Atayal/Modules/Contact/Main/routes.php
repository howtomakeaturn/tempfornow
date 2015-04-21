<?php

Route::get('/contact', function(){
    return App::make('Atayal\Modules\Contact\Main\Controller')->getIndex();
});

Route::post('/thanks', function(){
    return App::make('Atayal\Modules\Contact\Main\Controller')->postThanks();
});
