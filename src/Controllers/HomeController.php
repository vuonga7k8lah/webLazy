<?php


namespace webLazy\Controllers;


class HomeController
{
    public function loadView()
    {
        require_once 'views/Shop/home.php';
    }
}