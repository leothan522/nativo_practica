<?php

namespace app\controllers;

class Controller
{
    public function view($route, $data = [])
    {
        //Destructurar el array
        extract($data);
        $route = str_replace('.', '/', $route);
        if (file_exists("../resources/views/{$route}.php")) {
            ob_start();
            include "../resources/views/{$route}.php";
            $content = ob_get_clean();
            return $content;
        }else{
            return "No se encuentra la vista {$route}";
        }
    }
}