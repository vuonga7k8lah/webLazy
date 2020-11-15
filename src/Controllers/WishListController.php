<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Core\Session;

class WishListController
{
    public function loadView()
    {
        require_once 'views/Shop/WishList/wishListView.php';
    }

    public function actionAddWishList()
    {
        $id = Request::uri()[1];
        $_SESSION["wishLish"][$id] = 1;
        Redirect::to('home');
    }

    public function deleteWishList()
    {
        $id = Request::uri()[1];
        unset($_SESSION["wishLish"][$id]);
        Redirect::to('wishList');
    }

    public function AllToCart()
    {
        $id=Request::uri()[1];
        $_SESSION["cart"][$id] = 1;
        unset($_SESSION["wishLish"][$id]);
        Redirect::to('wishList');
    }
}