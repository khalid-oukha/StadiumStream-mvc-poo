<?php

namespace MVC\Controllers;

class HomeController extends Controller
{
    public function index(){
        include '../app/View/home.php';
    }
}