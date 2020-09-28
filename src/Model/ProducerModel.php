<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class ProducerModel
{
    public static function selectAll()
    {
        return DB::makeConnection()->query("SELECT * FROM nhasanxuat")->fetch_all();
    }

}