<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\URL;
use webLazy\Database\DB;
use webLazy\Model\SignInModel;

class ForgotPasswordController
{
    public function loadView()
    {
        require_once 'views/Shop/SignIn/fogotpassword.php';
    }

    public function loadViewRepass()
    {
        require_once 'views/Shop/SignIn/ResestPassword.php';
    }

    public function checkEmail()
    {
        $email = DB::makeConnection()->real_escape_string(trim($_POST['Email']));
        if (SignInModel::emailIsExitsOfForgot($email)[0] > 0) {
            $_SESSION['forgot_id'] = SignInModel::emailIsExitsOfForgot($email)[1]['MaKH'];
            Redirect::to('repass');
        } else {
            $_SESSION['errors'] = 'Email Khong Ton Tai';
            Redirect::to('forgot');
        }
    }

    public function updatePassword()
    {
        $data['MaKH'] = $_POST['MaKH'];
        $data['Password'] = DB::makeConnection()->real_escape_string(trim(md5($_POST['Password'])));
        $data['cPassword'] = DB::makeConnection()->real_escape_string(trim(md5($_POST['cPassword'])));
        if ($data['Password'] != $data['cPassword']) {
            $_SESSION['errors_password'] = 'Mật Khẩu Không Khớp Nhau';
            Redirect::to('repass');
        } else {
            $_SESSION['success_updatePassword'] = 'Mật Khẩu Đã Được Thay Đổi';
            SignInModel::updatePassword($data);
            Redirect::to('signIn');
        }
    }

}