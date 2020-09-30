<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class TypeModel
{
    public static function selectAll()
    {
        return DB::makeConnection()->query("SELECT * FROM loai")->fetch_all();
    }
    public static function insertData($data)
    {
        return DB::makeConnection()->query("INSERT INTO `loai`(`MaLoai`, `TenLoai`,`registration_date`) VALUES (null,'" . $data['TenLoai'] . "',null)");
    }

    public static function selectId($id)
    {
        return DB::makeConnection()->query("SELECT * FROM loai where MaLoai=".$id."")->fetch_assoc();
    }
    public static function updateType($data)
    {
        return DB::makeConnection()->query("UPDATE `loai` SET `TenLoai`='".$data['TenLoai']."',`registration_date`=null WHERE MaLoai=".$data['MaLoai']."");
    }
    public static function deleteType($id){
        return DB::makeConnection()->query("DELETE FROM `loai` WHERE MaLoai=".$id."");
    }


}