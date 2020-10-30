<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class TypeNewsModel
{
    public static function selectAll()
    {
        return DB::makeConnection()->query("SELECT * FROM loaitin")->fetch_all();
    }
    public static function insertData($data)
    {
        return DB::makeConnection()->query("INSERT INTO `loaitin`(`idLoaiTin`, `idTheLoai`, `TenLoaiTin`, `date_time`) VALUES (null,'".$data['idTheLoai']."','".$data['TenLoaiTin']."',null)");
    }
    public static function selectId($id)
    {
        return DB::makeConnection()->query("SELECT * FROM loaitin where idloaitin=".$id."")->fetch_assoc();
    }
    public static function updateData($data)
    {
        return DB::makeConnection()->query("UPDATE `loaitin` SET `idTheLoai`='".$data['idTheLoai']."',`TenLoaiTin`='".$data['TenLoaiTin']."' WHERE idLoaiTin='".$data['idLoaiTin']."'");
    }
    public static function deleteData($id)
    {
        return DB::makeConnection()->query("DELETE FROM loaitin where idLoaiTin='".$id."'");
    }
}