<?php


namespace webLazy\Controllers;


class ChatbotFBController
{
	public function handleChatbot()
	{
		$my_verify_token="225639885HIP";
		$challenge=$_GET['hub_challenge'];
		$verify_token=$_GET['hub_verify_token'];
		if ($my_verify_token===$verify_token){
			echo $challenge;
			exit();
		}
	}
}