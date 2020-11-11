<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class OrderModel
{
    public static function selectAll($id)
    {
        $db = DB::makeConnection()->query("SELECT DISTINCT sp.TenSP,sp.Anh,dhp.price,dhp.quantity,dh.total,dh.note FROM donhang dh JOIN donhangphu1 dhp ON dh.id=dhp.id JOIN sanpham sp ON sp.MaSP=dhp.MaSP WHERE dh.id=" . $id . "");
        return $db;
    }

    public static function selectIdDonHang($id)
    {
        $db = DB::makeConnection()->query("SELECT dh.id FROM users kh join donhang dh on dh.MaKH=kh.MaKH WHERE kh.MaKH='" . $id . "'")->fetch_assoc();
        return $db;
    }

    public static function selectPrintId($id)
    {
        $db = DB::makeConnection()->query("SELECT kh.TenKH,kh.DiaChi,kh.Sdt,sp.TenSP,dhp.quantity,dh.total,dh.note  FROM donhang dh JOIN users kh ON kh.MaKH=dh.MaKH JOIN donhangphu1 dhp ON dhp.id=dh.id JOIN sanpham sp on sp.MaSP=dhp.MaSP WHERE dh.id='" . $id . "'");
        return $db->fetch_all();
    }

    public static function updateProductDaBan()
    {
    }
}