<?php
namespace app\controllers;
require_once 'Controller.php';
class HomeController extends Controller
{
    public function index()
    {
        return $this->view('home', [
            'title' => 'HOme',
            'description' => 'hla desde hole con parametroa lococ'
        ]);
    }


}