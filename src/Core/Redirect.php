<?php


namespace webLazy\Core;

class Redirect
{
    public static function to($url)
    {
        header('location:'.URL::uri($url));
        exit();
    }
}