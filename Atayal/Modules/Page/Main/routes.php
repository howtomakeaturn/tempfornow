<?php

Route::controller('page', 'Atayal\Modules\Page\Main\Controller');

Route::get('/', function(){
    return App::make('Atayal\Modules\Page\Main\Controller')->getView('index');
});

Route::get('/about', function(){
    return App::make('Atayal\Modules\Page\Main\Controller')->getView('about');
});

Route::get('/install', function(){
    return App::make('Atayal\Modules\Page\Main\Controller')->getView('install');
});

Route::get('/documentation', function(){
    return App::make('Atayal\Modules\Page\Main\Controller')->getView('documentation');
});
