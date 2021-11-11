<?php


namespace webLazy\Database;

use Exception;
use mysqli;
use webLazy\Core\App;

/**
 *
 * @return mysqli
 * @throws Exception
 */
class DB
{
    private static $self;

    public static function makeConnection(): mysqli
    {
        if (empty(self::$self)) {
            self::$self = new mysqli(
                App::get('config/app')['database']['host'],
                App::get('config/app')['database']['username'],
                App::get('config/app')['database']['password'],
                App::get('config/app')['database']['database']
            );
        }
        mysqli_set_charset(self::$self,'UTF8');
        return self::$self;
    }

    public static function notInjection($val): string
    {
        return DB::makeConnection()->real_escape_string(trim($val));
    }
}
