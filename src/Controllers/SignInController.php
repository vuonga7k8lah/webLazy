<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Session;
use webLazy\Database\DB;
use webLazy\Moder\SignInModel;

class SignInController
{
    public function loadView()
    {
        require_once 'views/Shop/SignIn/SignInView.php';
    }

    public function actionLogin()
    {
        $data['Email'] = DB::notInjection($_POST['Email']);
        $data['Password'] = md5(DB::notInjection($_POST['Password']));
        if (SignInModel::loginUser($data)[0] > 0) {
            session_unset();
            Session::set('MaKH', SignInModel::loginUser($data)[1]['MaKH']);
            Session::set('TenKH', SignInModel::loginUser($data)[1]['TenKH']);
            if (isset($_POST['remember_me'])){
                setcookie('remember', SignInModel::loginUser($data)[1]['MaKH'], time() + 3600);
            }
            Redirect::to('home');
        } else {
            Session::set('error_login','Sai Tài Khoản Hoặc Mật Khẩu');
            Redirect::to('signIn');
        }
    }

    public function actionRegister()
    {
        $data['TenKH'] = DB::notInjection($_POST['TenKH']);
        $data['DiaChi'] = DB::notInjection($_POST['DiaChi']);
        $data['SDT'] = DB::notInjection($_POST['SDT']);
        $data['Email'] = DB::notInjection($_POST['Email']);
        $data['Password'] = DB::notInjection($_POST['Password']);
        $data['cPassword'] = DB::notInjection($_POST['cPassword']);
        validateUser($data);
        Confirm($data);
        if (SignInModel::emailIsExist($data['Email']) > 0) {
            Session::set('errorEmail', 'Email ĐÃ Tồn Tại');
            Redirect::to('signIn');
        } else {
            $data['Password'] = md5($data['Password']);
            SignInModel::insertUser($data);
            session_unset();
            Session::set('success_Register', 'Tai Khoản Tạo Thành Công');
            Redirect::to('signIn');
        }
    }
}