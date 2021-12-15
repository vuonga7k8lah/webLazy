<?php

use webLazy\Core\Request;
use webLazy\Core\App;
use webLazy\Core\Route;
use webLazy\Database\DB;

require_once 'vendor/autoload.php';
include 'function/validate.php';
require_once 'function/UploadImages.php';

App::bind('config/app', require_once "config/app.php");
App::bind('MYSQL', DB::makeConnection());
ini_set("allow_url_fopen", true);
ini_set('default_charset', 'utf-8');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Content-Type: text/html; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if ((explode('?', Request::uri()[0])[0] == 'loginAPIGoogle') or (explode('?', Request::uri()[0])[0] == 'loginFB')) {
	Route::load("config/router.php")
		->direct(Request::route11(), Request::method());
} else {
	Route::load("config/router.php")
		->direct(Request::uri()[0], Request::method());
}
