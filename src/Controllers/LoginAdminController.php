<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Session;
use webLazy\Database\DB;
use webLazy\Model\LoginAdminModel;

class LoginAdminController
{
    public function loadView()
    {
        require_once 'views/Admin/Login/loginView.php';
    }

    public function actionLogin()
    {
        $data['Email']=DB::makeConnection()->real_escape_string(trim($_POST['Email']));
        $data['Password']=DB::makeConnection()->real_escape_string(trim(md5($_POST['Password'])));
        if (LoginAdminModel::loginAdmin($data)>0){
            Session::set('success_AdminLogin','Thành Công');
            Redirect::to('dashboard');
        }else{
            Session::set('error_adminLogin','Tài Khoản Hoặc Mật Khẩu Không Đúng');
            Redirect::to('login');
        }
    }

}