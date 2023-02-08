<?php


namespace webLazy\Core;


class Request
{
	public static function uri()
	{
		if (strpos($_SERVER['REQUEST_URI'],'weblazy')!== false){
			return explode('/',self::route11());
		}else{
			return explode('/',trim(preg_replace('/^\//', '', $_SERVER['REQUEST_URI'])));
		}

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
