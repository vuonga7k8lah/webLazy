<?php


namespace webLazy\Controllers;


use Facebook\Facebook;

class LoginFBController
{
    public static function connect()
    {
        require_once './assets/Facebook/autoload.php';
        return $fb = new Facebook([
            'app_id' => '353639432560596', // Thay thông tin app của bạn vào đây
            'app_secret' => 'e5c2b1b7e4ec41a7a766722a61a6b839',
            'default_graph_version' => 'v8.0',
        ]);

    }

    public static function URL_FB()
    {
        $helper = self::connect()->getRedirectLoginHelper();
        $permissions = ['email']; // Optional permissions
        return $loginUrl = $helper->getLoginUrl('http://localhost/webLazy/loginFB', $permissions);
    }

    public static function FBcallback()
    {
        echo 'xxxxx';
    }

}