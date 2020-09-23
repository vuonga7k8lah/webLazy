<?php


namespace webLazy\Controllers;


class AdminController
{
    public function loadView()
    {
        require_once 'views/Admin/Product/listProductView.php';
    }
}