<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        echo "index";
    }

    public static function thisIsStatic()
    {
        echo "I am static";
    }
}