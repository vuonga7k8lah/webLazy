<?php


namespace webLazy\Controllers;

use webLazy\Core\Redirect;
use webLazy\Core\Session;
use webLazy\Database\DB;
use webLazy\Model\SignInModel;

class LoginGoogleController
{
	public function __construct()
	{
		define('GOOGLE_APP_ID', '652963584525-0rufikmbipgvm40qu36pa60sptn18hin.apps.googleusercontent.com');
		define('GOOGLE_APP_SECRET', 'u7kgqvt-z5W3DvRXh6fbVGeM');
		define('GOOGLE_APP_CALLBACK_URL', 'http://127.0.0.1/webLazy/loginAPIGoogle');
	}

	/**
	 * @var $oClient \Google_Client
	 */
	private $oClient;

	public function getGoogleAPI()
	{
		if (!empty($this->oClient)) {
			return $this->oClient;
		}

		$this->oClient = new \Google_Client();
		$this->oClient->setClientId(GOOGLE_APP_ID);
		$this->oClient->setClientSecret(GOOGLE_APP_SECRET);
		$this->oClient->setRedirectUri(GOOGLE_APP_CALLBACK_URL);
		$this->oClient->addScope('email');
		$this->oClient->addScope('profile');

		return $this->oClient;
	}

	public function loginGoogle()
	{
		$this->getGoogleAPI();
		$code = $_GET['code'];
		$aToken = $this->oClient->fetchAccessTokenWithAuthCode($code);
		$accessToken = $aToken['access_token'];
		$this->oClient->setAccessToken([
			'access_token' => $accessToken,
			'expires_in'   => strtotime('+2 days')
		]);
		$googleAuth = new \Google_Service_Oauth2($this->oClient);
		$accountInfo = $googleAuth->userinfo->get();
		if (SignInModel::emailIsExist($accountInfo['email']) > 0) {
			Session::set('MaKH', SignInModel::queryMaKHTenKHWithEmail($accountInfo['email'])['MaKH']);
			Session::set('TenKH', SignInModel::queryMaKHTenKHWithEmail($accountInfo['email'])['TenKH']);
			if (isset($_SESSION["cart"])){
				Redirect::to('cart');
			}
			Redirect::to('home');
		}else{
			$this->actionRegister($accountInfo);
			Session::set('MaKH', SignInModel::queryMaKHTenKHWithEmail($accountInfo['email'])['MaKH']);
			Session::set('TenKH', SignInModel::queryMaKHTenKHWithEmail($accountInfo['email'])['TenKH']);
			if (isset($_SESSION["cart"])){
				Redirect::to('cart');
			}
			Redirect::to('home');
		}
	}

	public function actionRegister($accountInfo)
	{
		$data['TenKH'] = $accountInfo['name'];
		$data['DiaChi'] = '';
		$data['SDT'] = '';
		$data['Email'] = $accountInfo['email'];
		$data['Password'] = md5($accountInfo['givenName']);
		SignInModel::insertUser($data);
	}
}