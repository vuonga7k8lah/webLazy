<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Session;
use webLazy\Core\TraitPHPMailer;
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
        $data['Email'] = DB::notInjection(trim($_POST['Email']));
        $data['Password'] = DB::notInjection(trim(sha1($_POST['Password'])));
        if (LoginAdminModel::loginAdmin($data) > 0) {
            Session::destroy('countLoginError');
            $aDataUser = UserModel::getInfoAdmin($data['Email']);
            Session::set('success_AdminLogin', 'Thành Công');
            Redirect::to('qrcode?data=' . base64_encode(json_encode($aDataUser)));
        } else {
            if (isset($_SESSION['countLoginError']) && !empty($_SESSION['countLoginError'])) {
                $_SESSION['countLoginError']++;
            } else {
                Session::set('countLoginError', 1);
            }

            Session::set('error_adminLogin',
                sprintf('Tài Khoản Hoặc Mật Khẩu Không Đúng, Bạn Còn %s Lần Đăng Nhập Tiếp Theo',
                    (3 - $_SESSION['countLoginError'])));
            Redirect::to('login');
        }
    }

    public function getViewUnlockLogin()
    {
        require_once 'views/Admin/UnlockLogin/viewUnlockLogin.php';
    }
}
