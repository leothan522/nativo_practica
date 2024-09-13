<?php
require_once '../lib/Route.php';
require_once '../app/Controllers/HomeController.php';

use app\controllers\HomeController;
use lib\Route;

Route::get("nativo/public",[HomeController::class,'index']);

Route::get("nativo/public/contact", function(){
    return 'hola contacto';
});

Route::get("/nativo/public/about/:slug", function($slug){
    return 'hola mundo con parametro: '.$slug;
});

Route::dispatch();