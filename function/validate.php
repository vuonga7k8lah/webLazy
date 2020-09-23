<?php

use webLazy\Core\Redirect;
use webLazy\Core\Session;
use webLazy\Moder\SignInModel;

function validateUser($data)
{
    $error = array();
    foreach ($data as $key => $val) {
        if ($val == null) {
            $error[] = $key . ' Chua Nhap Du Lieu';
        }
    }
    if (empty($error)) {
        return true;
    } else {
        Session::set('error', $error);
        Redirect::to('signIn');
    }
}

function Confirm($data)
{
    if ($data['Password'] !== $data['cPassword']) {
        Session::set('cPassword', 'Confirm Password Không Trùng Nhau');
        Redirect::to('signIn');
    }
    return true;
}

function checkCookie()
{
    if (isset($_COOKIE['remember'])) {
        $id=$_COOKIE['remember'];
        Session::set('MaKH', SignInModel::checkCookie($id)['MaKH']);
        Session::set('TenKH', SignInModel::checkCookie($id)['TenKH']);
        Redirect::to('home');
    }
    return true;
}