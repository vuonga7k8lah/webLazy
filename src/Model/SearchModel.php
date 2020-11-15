<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class SearchModel
{
    public static function searchProduct($like)
    {
        return DB::makeConnection()->query("SELECT MaSP,TenSP,GiaBan,ChiTiet,Anh FROM sanpham where  TenSP like '%".$like."%'")->fetch_all();
    }
    public static function searchProductMenu($id)
    {
        return DB::makeConnection()->query("SELECT MaSP,TenSP,GiaBan,ChiTiet,Anh FROM sanpham where MaLoai=".$id."")->fetch_all();
    }
    public static function searchProducerMenu($id)
    {
        return DB::makeConnection()->query("SELECT MaSP,TenSP,GiaBan,ChiTiet,Anh FROM sanpham where MaNSX=".$id."")->fetch_all();
    }
}