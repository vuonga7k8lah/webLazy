<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Core\Session;

class LogoutHomeController
{
    public function loadView()
    {
        Session::destroyAll();
        Redirect::to('home');
    }

    public function logoutAdmin()
    {
        Session::destroyAll();
        Redirect::to('login');
    }

    public function deleteCart()
    {
        $id=Request::uri()[1];
        unset($_SESSION["cart"][$id]);
        Redirect::to('cart');
    }

}