<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class OrderAdminModel
{
    public static function selectAllOrder()
    {
        return DB::makeConnection()->query("SELECT distinct dh.id,kh.TenKH,dh.DiaChiNhan,kh.SDT,dh.register_date,dhp.TrangThai FROM donhang dh JOIN users kh ON dh.MaKH=kh.MaKH JOIN donhangphu1 dhp ON dhp.id=dh.id")->fetch_all();
    }

    public static function deleteOrder($id)
    {
        return DB::makeConnection()->query("DELETE FROM donhang where id=" . $id . "");
    }

    public static function updateStatus($id)
    {
        return DB::makeConnection()->query("UPDATE donhangphu1 set TrangThai='Thành Công' where id=".$id."");
    }
}