<?php

namespace webLazy\Core;

class AntiXSS
{
    protected static $oAntiXss;

    public static function xssClear($string): string
    {
        self::$oAntiXss = new \voku\helper\AntiXSS();
        return self::$oAntiXss->xss_clean($string);
    }
}
