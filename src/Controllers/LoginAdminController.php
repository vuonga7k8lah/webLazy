<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Session;
use webLazy\Database\DB;
use webLazy\Model\LoginAdminModel;
use webLazy\Model\UserModel;

class LoginAdminController
{
    public function loadView()
    {
        require_once 'views/Admin/Login/loginView.php';
    }

    public function actionLogin()
    {
        $data['Email'] = DB::makeConnection()->real_escape_string(trim($_POST['Email']));
        $data['Password'] = DB::makeConnection()->real_escape_string(trim(md5($_POST['Password'])));
        if (LoginAdminModel::loginAdmin($data) > 0) {
            $aDataUser = UserModel::getInfoAdmin($data['Email']);
            Session::set('success_AdminLogin', 'Thành Công');
            Redirect::to('qrcode?data=' . base64_encode(json_encode($aDataUser)));
        } else {
            Session::set('error_adminLogin', 'Tài Khoản Hoặc Mật Khẩu Không Đúng');
            Redirect::to('login');
        }
    }

}
