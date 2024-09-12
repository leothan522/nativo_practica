<?php
require_once '../lib/Route.php';

use lib\Route;

Route::get("nativo/public", function(){
    return [
        'title' => 'Dashboard',
        'content' => 'dashboard hola mundo'
    ];
});

Route::get("nativo/public/contact", function(){
    return 'hola contacto';
});

Route::get("/nativo/public/about/:slug", function($slug){
    return 'hola mundo con parametro: '.$slug;
});

Route::dispatch();