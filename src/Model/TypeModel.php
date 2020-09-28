<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class TypeModel
{
    public static function selectAll()
    {
        return DB::makeConnection()->query("SELECT * FROM loai")->fetch_all();
    }

}