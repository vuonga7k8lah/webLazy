<?php


namespace webLazy\Controllers;


use Exception;
use webLazy\Core\HandleResponse;
use webLazy\Core\Redirect;
use webLazy\Core\Session;
use webLazy\Database\DB;
use webLazy\Model\SignInModel;

class SignInController
{
    public function loadView()
    {
        require_once 'views/Shop/SignIn/SignInView.php';
    }

    public function actionLogin()
    {
        unset($_SESSION['error_validateRegister']);
        validateDataLogin($_POST);
        $data['Email'] = DB::notInjection($_POST['Email']);
        $data['Password'] = sha1(DB::notInjection($_POST['Password']));
        if (SignInModel::loginUser($data)[0] > 0) {
            Session::set('MaKH', SignInModel::loginUser($data)[1]['MaKH']);
            Session::set('TenKH', SignInModel::loginUser($data)[1]['TenKH']);
            Session::set('Email', SignInModel::loginUser($data)[1]['Email']);
            if (isset($_POST['remember_me'])) {
                setcookie('remember', SignInModel::loginUser($data)[1]['MaKH'], time() + 3600);
            }
            if (isset($_SESSION["cart"])) {
                Redirect::to('cart');
            }
            Redirect::to('home');
        } else {
            Session::set('error_login', 'Sai Tài Khoản Hoặc Mật Khẩu');
            Redirect::to('signIn');
        }
    }

    /**
     * @throws Exception
     */
    public function actionRegister()
    {
        unset($_SESSION['error_validateLogin']);
        try {
            validateDataRegister($_POST);
            $aData['TenKH'] = DB::notInjection($_POST['TenKH']);
            $aData['DiaChi'] = DB::notInjection($_POST['DiaChi']);
            $aData['SDT'] = DB::notInjection($_POST['SDT']);
            $aData['Email'] = DB::notInjection($_POST['Email']);
            $aData['Password'] = DB::notInjection($_POST['Password']);
            $aData['cPassword'] = DB::notInjection($_POST['cPassword']);
            $aResponse = $this->handleRegister($aData);
            if ($aResponse['status'] != 'error') {
                Session::set('success_Register', 'Tai Khoản Tạo Thành Công');
            }
        } catch (Exception $exception) {
            Redirect::to('signIn');
        }
    }

    public function handleRegister($aData): array
    {
        try {
            validateDataRegister($aData);
            Confirm($aData);
            validateSDT($aData['SDT']);
            if (SignInModel::emailIsExist($aData['Email']) > 0) {
                Session::set('errorEmail', 'Email ĐÃ Tồn Tại');
                throw new Exception('Email ĐÃ Tồn Tại', 400);
            }
            $aData['Password'] = sha1($aData['Password']);
            $userID = SignInModel::insertUser($aData);
            return HandleResponse::success('Passed', [
                'userID' => $userID
            ]);
        } catch (Exception $exception) {
            return HandleResponse::error($exception->getMessage(), $exception->getCode());
        }
    }
}
