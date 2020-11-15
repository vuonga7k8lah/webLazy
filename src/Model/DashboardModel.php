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
    public static function countNews()
    {
        return DB::makeConnection()->query("SELECT COUNT(u.idTinTuc) SoTin FROM tintuc u")->fetch_assoc();
    }
    public static function countTypeNews()
    {
        return DB::makeConnection()->query("SELECT COUNT(u.idLoaiTin) LoaiTin FROM loaitin u")->fetch_assoc();
    }
    public static function countCMM()
    {
        return DB::makeConnection()->query("SELECT COUNT(u.idCMM) cmm FROM comments u")->fetch_assoc();
    }


}