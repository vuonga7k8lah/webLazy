<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Session;

class LogoutHomeController
{
    public function loadView()
    {
        Session::destroyAll();
        Redirect::to('home');
    }

}