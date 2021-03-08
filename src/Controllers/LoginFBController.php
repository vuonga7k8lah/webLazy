<?php


namespace webLazy\Controllers;


use Facebook\Facebook;
use webLazy\Core\Redirect;
use webLazy\Core\Session;
use webLazy\Model\SignInModel;

class LoginFBController
{
	public static function connect()
	{
		require_once './assets/Facebook/autoload.php';
		return $fb = new Facebook([
			'app_id'                => '344489773177969', // Replace {app-id} with your app id
			'app_secret'            => 'ec920f322efa92ce305296b6ca9c5e5a',
			'default_graph_version' => 'v9.0',
		]);

	}

	public static function URL_FB()
	{
		$helper = self::connect()->getRedirectLoginHelper();

		$permissions = ['email']; // Optional permissions
		$callbackUrl = htmlspecialchars('https://localhost/webLazy/loginFB');
		$loginUrl = $helper->getLoginUrl($callbackUrl, $permissions);

		return $loginUrl;
	}

	public function FBcallback()
	{
		require_once './assets/Facebook/autoload.php';
		$helper = self::connect()->getRedirectLoginHelper();
		if (isset($_GET['state'])) {
			$helper->getPersistentDataHandler()->set('state', $_GET['state']);
		}
		try {
			$accessToken = $helper->getAccessToken();
		}
		catch (Facebook\Exceptions\FacebookResponseException $e) {
			// When Graph returns an error
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
		}
		catch (Facebook\Exceptions\FacebookSDKException $e) {
			// When validation fails or other local issues
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
		}

		if (!isset($accessToken)) {
			if ($helper->getError()) {
				header('HTTP/1.0 401 Unauthorized');
				echo "Error: " . $helper->getError() . "\n";
				echo "Error Code: " . $helper->getErrorCode() . "\n";
				echo "Error Reason: " . $helper->getErrorReason() . "\n";
				echo "Error Description: " . $helper->getErrorDescription() . "\n";
			} else {
				header('HTTP/1.0 400 Bad Request');
				echo 'Bad request';
			}
			exit;
		}

//Lấy thông tin của người dùng trên Facebook
		try {
			// Returns a `Facebook\FacebookResponse` object
			$response = self::connect()->get('/me?fields=id,name,email', $accessToken->getValue());
		}
		catch (Facebook\Exceptions\FacebookResponseException $e) {
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
		}
		catch (Facebook\Exceptions\FacebookSDKException $e) {
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
		}

		$aFbUser = ($response->getGraphUser())->asArray();
		if (SignInModel::emailIsExist($aFbUser['email']) > 0) {
			Session::set('MaKH', SignInModel::queryMaKHTenKHWithEmail($aFbUser['email'])['MaKH']);
			Session::set('TenKH', SignInModel::queryMaKHTenKHWithEmail($aFbUser['email'])['TenKH']);
			if (isset($_SESSION["cart"])) {
				Redirect::to('cart');
			}
			Redirect::to('home');
		} else {
			$this->actionRegister($aFbUser);
			Session::set('MaKH', SignInModel::queryMaKHTenKHWithEmail($aFbUser['email'])['MaKH']);
			Session::set('TenKH', SignInModel::queryMaKHTenKHWithEmail($aFbUser['email'])['TenKH']);
			if (isset($_SESSION["cart"])) {
				Redirect::to('cart');
			}
			Redirect::to('home');
		}
	}

	public function actionRegister($oFbUser)
	{
		$data['TenKH'] = $oFbUser['name'];
		$data['DiaChi'] = '';
		$data['SDT'] = $oFbUser['id'];
		$data['Email'] = $oFbUser['email'];
		$data['Password'] = md5($oFbUser['name']);
		return SignInModel::insertUser($data);
	}

}