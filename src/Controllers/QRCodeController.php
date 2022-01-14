<?php

namespace webLazy\Controllers;

use Vectorface\GoogleAuthenticator;
use webLazy\Core\Redirect;
use webLazy\Core\Session;

class QRCodeController
{
    private GoogleAuthenticator $lib;
    private string $secret;
    private string $data = '';

    public function __construct()
    {
        $this->secret = '5QAJ4SDF22A3JH2G';


        $this->lib = new GoogleAuthenticator();
    }

    /**
     * @throws \Exception
     */
    public function qrcode()
    {
        $qrcode = $this->secret;
        if (isset($_GET['id'])) {
            $data['id'] = $_GET['id'];
        }
        if (isset($_GET['data'])) {
            $data['data'] = $_GET['data'];
        }
        $aUserData=json_decode(base64_decode($data['data']),true);
        $url = $this->getQRCodeGoogleUrl($aUserData['TenKH']);
        require_once 'views/Admin/QRCode/QRCodeView.php';
    }

    /**
     * @throws \Exception
     */
    public function getQRCodeGoogleUrl($data): string
    {
        return $this->lib->getQRCodeUrl($data, $this->secret);
    }

    public function actionQRCode()
    {
        $qrCode = $_POST['otp'];
        $secret = $_POST['secret'];
        $checkResult = $this->lib->verifyCode($secret, $qrCode, 0);
        if ($checkResult) {
                    Session::destroy('countLoginQRCodeError');
                    Redirect::to('admin');

        } else {
            if (isset($_SESSION['countLoginQRCodeError']) && !empty($_SESSION['countLoginQRCodeError'])) {
                $_SESSION['countLoginQRCodeError']++;
            } else {
                Session::set('countLoginQRCodeError', 1);
            }
            $message=sprintf("Hãy nhập lại mã OTP QRCODE và bạn còn lại %s lần đăng nhập",(3-$_SESSION['countLoginQRCodeError']));
                    ?>
                    <script>
                        let x = confirm('<?=$message?>');
                        if (x === true) {
                            window.location = '<?=$_SERVER['HTTP_REFERER'] ?>';
                        }
                    </script>
                    <?php
            }
    }

    /**
     * @throws \Exception
     */
    public function getCode(): string
    {
        return $this->lib->getCode($this->secret);
    }
}
