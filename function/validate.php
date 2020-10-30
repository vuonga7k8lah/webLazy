<?php

use webLazy\Core\Redirect;
use webLazy\Core\Session;
use webLazy\Database\DB;
use webLazy\Model\NewsModel;
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

function LoadAnhEditTinTuc($data)
{
    $adata = json_decode($data, true);
    if (count($adata) == 1) {
        return $adata[0];
    } else {
        foreach ($adata as $val) {
            ?>
            <a href="./assets/upload/News/<?= $val ?>"><img src="./assets/upload/News/<?= $val ?>" alt=""
                                                            style="width: 50px;height: 50px;float: left"></a>
            <?php
        }
    }
}

function LoadAnhTinTuc($data)
{
    $adata = json_decode($data, true);
    if (count($adata) == 1) {
        return $adata[0];
    } else {
        foreach ($adata as $val) {
            ?>
            <a href="./assets/upload/News/<?= $val ?>"><img src="./assets/upload/News/<?= $val ?>" alt=""
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

function Money($float)
{
    $money = (float)$float;
    return $subtotal = number_format($money, 2, '.', ',');
}

function captcha()
{
    $qna = array(
        1 => array('question' => 'Một Cộng Một', 'answer' => 2),
        2 => array('question' => 'Ba Trừ Hai', 'answer' => 1),
        3 => array('question' => '3 Nhân 5', 'answer' => 15),
        4 => array('question' => '6 chia 2', 'answer' => 3),
        5 => array('question' => 'Nàng Bạch Tuyết Và .... Chú Lùn', 'answer' => 7),
        6 => array('question' => 'Alibaba Và ... Tên Cướp', 'answer' => 40),
        7 => array('question' => 'Ăn 1 Quả Khế, Trả .... Cục vàng', 'answer' => 1),
        8 => array('question' => 'May Túi .... Gang, Mang Đi Mà Đựng', 'answer' => 3)
    );
    $rand_key = array_rand($qna); // Lay ngau nhien mot trong cac array 1, 2, 4
    $_SESSION['q'] = $qna[$rand_key];
    return $question = $qna[$rand_key]['question'];
} // END function captcha
function validateDataRegister($data)
{
    $errors = [];
    if (empty($data['Email']) && isset($data['Email'])) {
        $errors[] = ['errors' => 'Hãy Nhập Email'];
    }
    if (empty($data['Password']) && isset($data['Password'])) {
        $errors[] = ['errors' => 'Hãy Nhập Password'];
    }
    if (empty($data['TenKH']) && isset($data['TenKH'])) {
        $errors[] = ['errors' => 'Hãy Nhập Đủ Họ Tên'];
    }
    if (empty($data['DiaChi']) && isset($data['DiaChi'])) {
        $errors[] = ['errors' => 'Hãy Nhập Địa Chỉ Vào'];
    }
    if (empty($data['SDT']) && isset($data['SDT'])) {
        $errors[] = ['errors' => 'Hãy Nhập SDT'];
    }
    if (empty($data['cPassword']) && isset($data['cPassword'])) {
        $errors[] = ['errors' => 'Hãy Nhập cPassword'];
    }
    if (empty($errors)) {
        return true;
    } else {
        Session::set('error_validateRegister', $errors);
        Redirect::to('signIn');
    }
}

function validateDataLogin($data)
{
    $errors = [];
    if (empty($data['Email']) && isset($data['Email'])) {
        $errors[] = ['errors1' => 'Hãy Nhập Email'];
    }
    if (empty($data['Password']) && isset($data['Password'])) {
        $errors[] = ['errors1' => 'Hãy Nhập Password'];
    }
    if (empty($errors)) {
        return true;
    } else {
        Session::set('error_validateLogin', $errors);
        Redirect::to('signIn');
    }
}

function LoaiKiTuDacBiet($string)
{
    return preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($string));
}

function validateSDT($data)
{
    if (is_numeric($data) && (strlen($data) == 10)) {
        return true;
    }
    Session::set('error_SDT', "Hãy Nhập Đúng Định Dạng SDT");
    Redirect::to('signIn');
}

function countView($id)
{
    $view = NewsModel::selectView($id);
    if ($view['views'] == 0) {
        $view = 1;
        NewsModel::updateView($view, $id);
    } else {
        $countView=$view['views'] +1;
        NewsModel::updateView($countView, $id);
    }

}