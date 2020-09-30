<?php

use webLazy\Core\Redirect;
use webLazy\Core\Session;
use webLazy\Database\DB;
use webLazy\Model\SignInModel;
use webLazy\Model\UserModel;

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
        $id = $_COOKIE['remember'];
        Session::set('MaKH', SignInModel::checkCookie($id)['MaKH']);
        Session::set('TenKH', SignInModel::checkCookie($id)['TenKH']);
        Redirect::to('home');
    }
    return true;
}

function the_excerpt($text, $string = 400)
{
    $sanitized = htmlentities($text, ENT_COMPAT, 'UTF-8');
    if (strlen($sanitized) > $string) {
        $cutString = substr($sanitized, 0, $string);
        return substr($sanitized, 0, strrpos($cutString, ' '));

    } else {
        return $sanitized;
    }

}

function LoadAnh($data)
{
    $adata = json_decode($data, true);
    if (count($adata) == 1) {
        return $adata[0];
    } else {
        foreach ($adata as $val) {
            ?>
            <a href="./assets/upload/<?= $val ?>"><img src="./assets/upload/<?= $val ?>" alt=""
                                                       style="width: 50px;height: 50px;float: left"></a>
            <?php
        }
    }
}

function LoadOneAnh($data)
{
    $adata = json_decode($data, true);
    return $adata[0];
}

function LoadAnhAjax($data)
{
    $adata = json_decode($data, true);
    foreach ($adata as $val) {
        ?>
        <div class="lg-image">
            <img src="./assets/upload/<?= $val ?>" alt="product image">
        </div>
        <?php
    }
}

function EmaiiIsExist($data, $uri)
{

    if (UserModel::EmailIsExist($data['Email']) > 0) {
        Session::set('error_addUser', 'Email Đã Tồn Tại');
        Session::set('data_addUser', $data);
        Redirect::to($uri);
    } else {
        return true;
    }
}

function CheckLoginAdmin()
{
    if (isset($_SESSION['success_AdminLogin'])) {
        return true;
    } else {
        Redirect::to('login');
    }
}