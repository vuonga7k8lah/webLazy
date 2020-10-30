<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class DashboardModel
{
    public static function productSold()
    {
        return DB::makeConnection()->query("SELECT COUNT(DATEDIFF(CURDATE(), dh.register_date)<30) soDH FROM `donhang` dh")->fetch_assoc();
    }

    public static function countProduct()
    {
        return DB::makeConnection()->query("SELECT COUNT(sp.MaSP) So_SP FROM `sanpham` sp")->fetch_assoc();
    }
    public static function countUser()
    {
        return DB::makeConnection()->query("SELECT COUNT(u.MaKH) SoKH FROM users u")->fetch_assoc();
    }

}