<?php


namespace webLazy\Controllers;


class LoginGoogleController
{
	public function __construct()
	{
		define('GOOGLE_APP_ID', '1086944737913-90j2of2760o97v50bto86o2lk4dgu9nn.apps.googleusercontent.com');
		define('GOOGLE_APP_SECRET', 'vv0rmfXi0mbJsd9PAjgjZGAv');
		define('GOOGLE_APP_CALLBACK_URL', 'http://127.0.0.1/webLazy/loginAPIGoogle');
	}

	public function loginGoogle()
	{
		$client =new \Google_Client();
		$client->setClientId(GOOGLE_APP_ID);
		$client->setClientSecret(GOOGLE_APP_SECRET);
		$client->setRedirectUri(GOOGLE_APP_CALLBACK_URL);
		$client->addScope("email");
		$client->addScope("profile");
		if(isset($_GET["code"]))
		{
			//It will Attempt to exchange a code for an valid authentication token.
			$token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);
	var_dump($token);die();
			//This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
			if(!isset($token['error']))
			{
				//Set the access token used for requests
				$client->setAccessToken($token['access_token']);

				//Store "access_token" value in $_SESSION variable for future use.
				$_SESSION['access_token'] = $token['access_token'];

				//Create Object of Google Service OAuth 2 class
				$google_service = new \Google_Auth_OAuth2($client);

				//Get user profile data from google
				$data = $google_service->userinfo->get();
				var_dump($data);die();
				//Below you can find Get profile data and store into $_SESSION variable
				if(!empty($data['given_name']))
				{
					$_SESSION['user_first_name'] = $data['given_name'];
				}

				if(!empty($data['family_name']))
				{
					$_SESSION['user_last_name'] = $data['family_name'];
				}

				if(!empty($data['email']))
				{
					$_SESSION['user_email_address'] = $data['email'];
				}

				if(!empty($data['gender']))
				{
					$_SESSION['user_gender'] = $data['gender'];
				}

				if(!empty($data['picture']))
				{
					$_SESSION['user_image'] = $data['picture'];
				}
			}
		}
	}
}