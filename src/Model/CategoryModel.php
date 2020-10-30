<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class CategoryModel
{
    public static function selectAll()
    {
        return DB::makeConnection()->query("SELECT * FROM theloai")->fetch_all();
    }

    public static function insertData($data)
    {
        return DB::makeConnection()->query("INSERT INTO theloai value (null,'" . $data . "',null)");
    }

    public static function deleteData($id)
    {
        return DB::makeConnection()->query("DELETE FROM theloai where idTheLoai=" . $id . "");
    }

    public static function selectId($id)
    {
        return DB::makeConnection()->query("SELECT * FROM theloai where idTheLoai=" . $id . "")->fetch_assoc();
    }

    public static function updateData($data)
    {
        return DB::makeConnection()->query("UPDATE `theloai` SET `TenTheLoai`='".$data['TenTheLoai']."' WHERE idTheLoai='".$data['idTheLoai']."'");
    }
}