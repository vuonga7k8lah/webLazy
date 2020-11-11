<?php


namespace webLazy\Controllers;


class AdminController
{
    public function loadView()
    {
        require_once 'views/Admin/Dashboard/dashboard.php';
    }
}