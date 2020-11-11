<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class QueryHomeModel
{
    public static function productNew()
    {
        return DB::makeConnection()->query("SELECT * FROM `sanpham` ORDER BY `registration_date` DESC LIMIT 10")->fetch_all();
    }
}