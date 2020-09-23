<?php


namespace webLazy\Controllers;


class PageNotFoundController
{
    public function loadView()
    {
        require_once 'views/Shop/404.php';
    }
}