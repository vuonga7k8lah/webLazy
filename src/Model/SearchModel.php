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
		return DB::makeConnection()->query("SELECT MaSP,TenSP,GiaBan,ChiTiet,Anh FROM sanpham where MaLoai=" . $id . "")
			->fetch_all();
	}

	public static function searchProducerMenu($id)
	{
		return DB::makeConnection()->query("SELECT MaSP,TenSP,GiaBan,ChiTiet,Anh FROM sanpham where MaNSX=" . $id . "")
			->fetch_all();
	}

	public static function searchTypeBlog($id)
	{
		return DB::makeConnection()->query("SELECT * FROM tintuc where idLoaiTin='" . $id . "'")->fetch_all();
	}

	public static function returnIdTheLoai($id)
	{
		return DB::makeConnection()
			->query("select lt.idLoaiTin,tl.TenTheLoai from loaitin lt join theloai tl on lt.idTheLoai=tl.idTheLoai where tl.idTheLoai=" .
				$id . "")
			->fetch_assoc();
	}

	public static function searchIDFeaturedProducts()
	{
    	return DB::makeConnection()->query("SELECT distinct MaSP FROM donhangphu1 WHERE TrangThai='Thành Công'")->fetch_all();
	}
	public static function FeaturedProducts($id)
	{
		return DB::makeConnection()->query("SELECT MaSP,TenSP,GiaBan,ChiTiet,Anh FROM sanpham where MaSP=" . $id . "")->fetch_all();
	}
}