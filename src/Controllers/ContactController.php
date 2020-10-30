<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Session;
use webLazy\Core\URL;

class ContactController
{
    public function loadView()
    {
        require_once 'views/Shop/Contact/contact.php';
    }

    public function actionContact()
    {
        if (isset($_POST['captcha']) && trim($_POST['captcha']) != $_SESSION['q']['answer']) {
            Session::set('error_captcha','Hãy Nhập Đúng Câu Trả Lời');
            Redirect::to('comment'.'#comment');
        }
       ?>
        <div style="text-align: center">
            <h1>Cảm Ơn Những Góp Ý Của Bạn</h1> <br>
        <a href="<?=URL::uri('home')?>">Quay Về Trang Home</a>
        </div>
        <?php
        Session::destroy('error_captcha');
    }

}