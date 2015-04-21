<?php

Route::get('/contact', function(){
    return App::make('Atayal\Modules\Contact\Main\Controller')->getIndex();
});
