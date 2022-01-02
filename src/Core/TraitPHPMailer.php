<?php

namespace webLazy\Core;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;

class TraitPHPMailer
{
    public static PHPMailer $oMail;

    public static function send(string $subject='',string $message='%link%'): bool
    {
        try {
           self::$oMail = new PHPMailer(true);
            //Server settings
            //$this->oMail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
           self::$oMail->isSMTP();                                            //Send using SMTP
           self::$oMail->Host = 'smtp.gmail.com';
           self::$oMail->SMTPAuth = true;
           self::$oMail->SMTPAutoTLS = false;
           self::$oMail->Username   = 'kalilinuxkma@gmail.com';                     //SMTP username
           self::$oMail->Password   = '01663101188';                               //SMTP password
            //$this->oMail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
           self::$oMail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
           self::$oMail->SMTPSecure = 'ssl';
           self::$oMail->Port       = 465;                                    //TCP port to connect to; use 587 if you
            // have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
           self::$oMail->setFrom('kalilinuxkma@gmail.com', 'WEB LAZY VUONGDTTN98');
           //self::$oMail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
           self::$oMail->addAddress('vuonga7k8lah@gmail.com');               //Name is optional
           self::$oMail->addReplyTo('kalilinuxkma@gmail.com', 'WEB LAZY VUONGDTTN98');

            //Content
           self::$oMail->isHTML(true);                                  //Set email format to HTML
           self::$oMail->Subject = 'Thông Báo Bảo Mật Tài Khoản';
           self::$oMail->CharSet  = 'UTF-8'; // the same as 'utf-8'
           $url='http://0.0.0.0:9021/repass-admin?code='.base64_encode(strtotime(date("Y-m-d H:i:s")).'/admin@gmail.com');
           self::$oMail->Body    = str_replace('%link%',$url,$message)??'This is the HTML message body <b>in bold!</b>';
           self::$oMail->AltBody = 'This is the body in plain text for non-HTML mail clients';
           self::$oMail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
