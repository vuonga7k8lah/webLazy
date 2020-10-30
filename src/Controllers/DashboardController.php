<?php


namespace webLazy\Controllers;


class DashboardController
{
    public function loadView()
    {
        require_once 'views/Admin/Dashboard/dashboard.php';
    }
}