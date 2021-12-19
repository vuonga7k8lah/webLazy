<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class ProductModel
{
    public static function selectAll()
    {
        return DB::makeConnection()->query("SELECT MaSP,TenSP,GiaBan,ChiTiet,Anh,MaLoai FROM sanpham ")->fetch_all();
    }

    public static function selectAllHome($offset)
    {
        return DB::makeConnection()
            ->query("SELECT MaSP,TenSP,GiaBan,ChiTiet,Anh FROM sanpham order by MaSP ASC limit " . $offset . ",8 ")
            ->fetch_all();
    }

    public static function countProduct()
    {
        return DB::makeConnection()->query("SELECT * FROM sanpham ")->num_rows;
    }

    public static function insertProduct($data)
    {
        return DB::makeConnection()
            ->query("INSERT INTO `sanpham`(`MaSP`, `TenSP`, `MaNSX`, `MaLoai`, `GiaBan`, `ChiTiet`, `Anh`, `registration_date`) VALUES (null,'" .
                $data['TenSP'] . "','" . $data['MaNSX'] . "','" . $data['MaLoai'] . "','" . $data['GiaBan'] . "','" .
                $data['ChiTiet'] . "','" . $data['Anh'] . "',null)");
    }

    public static function selectIdProduct($id): ?array
    {
        return DB::makeConnection()->query("SELECT * FROM sanpham where MaSP=" . $id . "")->fetch_assoc();
    }

    public static function getProductsWithTypeID($productTypeID)
    {
        $query = DB::makeConnection()->query("SELECT * FROM sanpham where MaLoai=" . $productTypeID);
        return !empty($query) ? $query->fetch_all() : [];
    }

    public static function updateData($data)
    {
        return DB::makeConnection()->query("UPDATE `sanpham` SET `TenSP`='" . $data['TenSP'] . "',`MaNSX`='" .
            $data['MaNSX'] . "',`MaLoai`='" . $data['MaLoai'] . "',`GiaBan`='" . $data['GiaBan'] . "',`ChiTiet`='" .
            $data['ChiTiet'] . "',`Anh`='" . $data['Anh'] . "',`registration_date`=null WHERE MaSP='" . $data['id'] .
            "'");
    }

    public static function deleteProduct($id)
    {
        return DB::makeConnection()->query("DELETE FROM `sanpham` WHERE MaSP=" . $id . "");
    }

}
