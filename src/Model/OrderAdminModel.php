<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class OrderAdminModel
{
    public static function selectAllOrder()
    {
        return DB::makeConnection()->query("SELECT dh.id,kh.TenKH,dh.DiaChiNhan,kh.SDT,dh.register_date FROM donhang dh JOIN users kh ON dh.MaKH=kh.MaKH")->fetch_all();
    }

    public static function deleteOrder($id)
    {
        return DB::makeConnection()->query("DELETE FROM donhang where id=".$id."");
    }
}