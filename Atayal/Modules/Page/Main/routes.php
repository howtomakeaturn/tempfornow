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

Route::get('/modules', function(){
    return App::make('Atayal\Modules\Page\Main\Controller')->getView('modules');
});

Route::get('/different', function(){
    return App::make('Atayal\Modules\Page\Main\Controller')->getView('different');
});

Route::get('/conventions', function(){
    return App::make('Atayal\Modules\Page\Main\Controller')->getView('conventions');
});

Route::get('/module/page', function(){
    return App::make('Atayal\Modules\Page\Main\Controller')->getView('module-page');
});

Route::get('/module/blog', function(){
    return App::make('Atayal\Modules\Page\Main\Controller')->getView('module-blog');
});

Route::get('/module/frame', function(){
    return App::make('Atayal\Modules\Page\Main\Controller')->getView('module-frame');
});
