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

    public static function formatInput(string $info)
    {
        self::$oAntiXss = new \voku\helper\AntiXSS();
        self::$oAntiXss->removeEvilHtmlTags([
            'iframe',
            'image'
        ]);

        return self::$oAntiXss->xss_clean($info);
    }

    public static function validateInput(string $info)
    {
        return str_replace(
            ["<", ">", "'", "\"", "&"],
            ["&gt", "&lt;", "&apos;", "&quot;", "&amp;"],
            $info
        );
    }
}
