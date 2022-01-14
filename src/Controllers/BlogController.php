<?php


namespace webLazy\Controllers;


use webLazy\Core\AntiXSS;
use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Core\Session;
use webLazy\Core\URL;
use webLazy\Model\CommentModel;
use webLazy\Model\SignInModel;

class BlogController
{
    protected static $check = [];

    public function loadView()
    {
        require_once 'views/Shop/Blogs/home.php';
    }

    public function loadSingerView()
    {
        require_once 'views/Shop/Blogs/singerBlogs.php';
    }

    public function isCaptchaExits()
    {
        if (isset($_POST['captcha'])) {
            if (trim($_POST['captcha']) == $_SESSION['q']['answer']) {
                $aResponse = [
                    "isValid" => "yes",
                    "msg"     => "captcha đúng"
                ];
            } else {
                $aResponse = [
                    "isValid" => "no",
                    "msg"     => "captcha sai nhập lại"
                ];
            }

            echo json_encode($aResponse);
        }

    }

    public function isEmailExits()
    {
        if (isset($_POST['email'])) {
            if (SignInModel::emailIsExist(trim($_POST['email'])) > 0) {
                $aResponse = [
                    "isValid" => "yes",
                    "msg"     => "email đã tồn tại"
                ];
            } else {
                $aResponse = [
                    "isValid" => "no",
                    "msg"     => "Bạn có thể sử dụng email này"
                ];
            }

            echo json_encode([
                "isValid" => "no",
                "msg"     => "Bạn có thể sử dụng email này"
            ]);
        }
    }

    public function actionComment()
    {
        unset($_SESSION['errorCMM_email']);
        unset($_SESSION['errorCMM_captcha']);
        $data=[];
        if (!empty($_POST)) {
            foreach ($_POST as $key=>$item) {
                if (!empty($item)){
                    $data[$key]=AntiXSS::xssClear($item);
                }
            }
        }
        Session::set('dataCMM', $data);
        if (trim($data['captcha']) != $_SESSION['q']['answer']) {
            Session::set('errorCMM_captcha', 'Sai Mã Captcha');
            header('location:' . URL::uri('singerBlog') . '/' . $data['idtinTuc'] . '#comment');
        }
        if (CommentModel::insertData($data)) {
            unset($_SESSION['dataCMM']);
            header('location:' . URL::uri('singerBlog') . '/' . $data['idtinTuc'] . '#listComment');
        }
    }


}
