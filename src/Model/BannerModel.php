<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class BannerModel
{
    public static function selectAll()
    {
        return DB::makeConnection()->query("SELECT * FROM banner")->fetch_all();
    }

    public static function deleteBanner($id)
    {
        return DB::makeConnection()->query("DELETE FROM banner where MaBN=" . $id . "");
    }

    public static function updateHienBanner($id)
    {
        return DB::makeConnection()->query("UPDATE banner set Status='TRUE' where MaBN=".$id."");
    }
    public static function updateAnBanner($id)
    {
        return DB::makeConnection()->query("UPDATE banner set Status='FALSE' where MaBN=".$id."");
    }
    public static function insertBanner($data){
        return DB::makeConnection()->query("INSERT INTO `banner`(`MaBN`, `TenBN`, `Status`, `Anh`, `registration_date`) VALUES (null,'".$data['TenBn']."','FALSE','".$data['Anh']."',null)");
    }
}