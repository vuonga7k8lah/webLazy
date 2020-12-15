<?php


namespace webLazy\Core;


class Request
{
	public static function uri()
	{
		return explode('/',trim(str_replace(
			App::get('config/app')['baseURI'],
			'',
			$_SERVER['REQUEST_URI']
		)));
	}
    public static function route11()
    {
        return trim(str_replace(
            App::get('config/app')['baseURI'],
            '',
	        parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH)
        ));
    }
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}