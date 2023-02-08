<?php

namespace webLazy\API\SignIn;

use Exception;
use webLazy\Core\HandleResponse;
use webLazy\Core\TraitJWT;
use webLazy\Core\TraitPHPMailer;
use webLazy\Database\DB;
use webLazy\Model\SignInModel;

class SignInAPI
{
	use TraitJWT;

	public function handleLogin()
	{
		$aData = $_POST;
		try {
			if (!isset($aData['Email']) || (!isset($aData['Password']))) {
				throw new Exception('the param Email or password is required');
			}
			$aData['Email'] = DB::notInjection(trim($_POST['Email']));
			$aData['Password'] = DB::notInjection(trim(sha1($_POST['Password'])));
			if (SignInModel::loginUser($aData)[0] > 0) {
				echo HandleResponse::success('Passed', [
					'token' => SignInModel::loginUser($aData)[1]['token']
				]);
			} else {
				throw new Exception("Sorry, the Email or password is error", 400);
			}
		}
		catch (Exception $exception) {
			echo HandleResponse::error($exception->getMessage(), $exception->getCode());
		}
	}

	public function handleRegister()
	{
		$aData = $_POST;
		try {
			if (empty($aData['Email'])) {
				throw new Exception('the param Email is required');
			}
			$pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';


			if (preg_match($pattern, $aData['Email']) !== 1) {
				throw new Exception('the param Email is not equal');
			}
			if (empty($aData['Password'])) {
				throw new Exception('the param Password is required');
			}
			if (empty($aData['Username'])) {
				throw new Exception('the param Ho ten is required');
			}
			$email = DB::notInjection(trim($aData['Email']));
			$password = DB::notInjection(trim(sha1($aData['Password'])));
			$username = DB::notInjection(trim($aData['Username']));

			if (SignInModel::emailIsExist($email)) {
				throw new Exception('the email is exist');
			}

			$aData = [
				'TenKH'    => $username,
				'Email'    => $email,
				'Password' => $password,
				'DiaChi'   => '',
				'SDT'      => 0
			];
			if ($userId = SignInModel::insertUser($aData)) {
				echo HandleResponse::success('Passed', [
					'token' => $this->encodeJWT([
						'id'       => $userId,
						'username' => $username
					])
				]);
			} else {
				throw new Exception("Sorry, the account insert error", 400);
			}
		}
		catch (Exception $exception) {
			echo HandleResponse::error($exception->getMessage(), $exception->getCode());
		}
	}
}
