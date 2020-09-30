<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class ProducerModel
{
    public static function selectAll()
    {
        return DB::makeConnection()->query("SELECT * FROM nhasanxuat")->fetch_all();
    }

    public static function insertData($data)
    {
        return DB::makeConnection()->query("INSERT INTO `nhasanxuat`(`MaNSX`, `TenNSX`, `DiaChi`, `SDT`, `registration_date`) VALUES (null,'" . $data['TenNSX'] . "','" . $data['DiaChi'] . "','" . $data['SDT'] . "',null)");
    }

    public static function selectId($id)
    {
        return DB::makeConnection()->query("SELECT * FROM nhasanxuat where MaNSX=".$id."")->fetch_assoc();
    }
    public static function updateProducer($data)
    {
        return DB::makeConnection()->query("UPDATE `nhasanxuat` SET `TenNSX`='".$data['TenNSX']."',`DiaChi`='".$data['DiaChi']."',`SDT`='".$data['SDT']."',`registration_date`=null WHERE MaNSX=".$data['MaNSX']."");
    }
    public static function deleteProducer($id){
        return DB::makeConnection()->query("DELETE FROM `nhasanxuat` WHERE MaNSX=".$id."");
    }

}