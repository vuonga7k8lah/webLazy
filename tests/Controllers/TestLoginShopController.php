<?php

namespace webLazyTests\Controllers;

use PHPUnit\Framework\TestCase;
use webLazy\Controllers\SignInController;
use webLazy\Core\App;
use webLazy\Model\SignInModel;

class TestLoginShopController extends TestCase
{
    protected $aDataUser
        = [
            'TenKH'     => 'userTest1',
            'DiaChi'    => 'Hà Nội',
            'SDT'       => '0363101181',
            'Email'     => 'adminTest@gmail.com',
            'Password'  => 'adminTest',
            'cPassword' => 'adminTest',
        ];

    public function setUpInit(): bool
    {
        include getcwd() . '/function/validate.php';
        App::bind('config/app', require_once "config/app.php");
        return true;
    }

    public function testRegisterUser()
    {
        $this->setUpInit();
        $aResponse = (new SignInController())->handleRegister($this->aDataUser);

        $this->assertEquals('success', $aResponse['status']);
        $this->assertIsNumeric($aResponse['data']['userID']);
    }

    /**
     * @depends testRegisterUser
     */
    public function testLogin()
    {
        $aData = $this->aDataUser;
        $aData['Password'] = md5($this->aDataUser['Password']);
        //$aResponse array [
        //status login,
        //data user
        //]
        $aResponse = SignInModel::loginUser($aData);
        $this->assertIsNumeric($aResponse[0]);
        $this->assertIsArray($aResponse[1]);
        $this->assertEquals($aData['TenKH'], $aResponse[1]['TenKH']);
        return $aResponse[1]['MaKH'];
    }

    /**
     * @depends testLogin
     */
    public function testForgotPassword($maKH)
    {
        $aData = $this->aDataUser;
        $newPassword = md5('new_password');
        //check email user exist`
        $aResponseEmail = SignInModel::emailIsExitsOfForgot($aData['Email']);

        $this->assertIsNumeric($aResponseEmail[0]);
        $this->assertIsArray($aResponseEmail[1]);
        $this->assertEquals($maKH, $aResponseEmail[1]['MaKH']);

        //update password
        SignInModel::updatePassword([
            'Password' => $newPassword,
            'MaKH'     => $maKH
        ]);

        //check password update
        $aResponse = SignInModel::loginUser([
            'Email'    => $aData['Email'],
            'Password' => $newPassword,
        ]);
        $this->assertIsNumeric($aResponse[0]);
        $this->assertIsArray($aResponse[1]);
        $this->assertEquals($aData['TenKH'], $aResponse[1]['TenKH']);

    }
}
