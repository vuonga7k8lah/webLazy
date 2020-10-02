<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class CartModel
{
    public static function selectProduct($key)
    {
        return DB::makeConnection()->query("SELECT * FROM sanpham WHERE MaSP IN (" . $key . ")")->fetch_all();
    }
    public static function selectOrder($data)
    {
        $sql = "SELECT * FROM donhang WHERE id IN (" . implode(",", array_keys($_POST['quantity'])) . ")";
        $hoadon = DB::makeConnection()->query($sql);
        return $hoadon;
    }

    public static function insertOrder($data)
    {
        return DB::makeConnection()->query("INSERT INTO `donhang`(`id`, `MaKH`, `note`, `DiaChiNhan`, `total`, `SDT`, `register_date`) VALUES (null,'".$data['MaKH']."','".$data['note']."','".$data['DiaChiNhan']."','".$data['Total']."','".$data['SDT']."',null)");
    }

    public static function selectIdKhachHang($name)
    {
        $id = DB::makeConnection()->query("SELECT MaKH FROM khachhang where TenKH='" . $name . "'")->fetch_assoc();
        return $id;
    }

    public static function selectIdDonHang($MaKH)
    {
        $id = DB::makeConnection()->
        query("SELECT id FROM donhang dh join users kh on dh.MaKH=kh.MaKH WHERE kh.MaKH='" . $MaKH . "'")->fetch_assoc();
        return $id;
    }

    public static function selectGiaSanPham($id)
    {
        $id = DB::makeConnection()->query("SELECT GiaBan FROM sanpham where MaSP='" . $id . "'")->fetch_assoc();
        return $id;
    }

    public static function insertHoaDonphu($data)
    {
        $aValue="";
        foreach ($data as $key => $value) {
            $aValues = array_values($value);
            $aValue .= '("' . implode('","', $aValues) . '")';
            if($key != (count($data)-1)){
                $aValue .= ",";
            }
        }
        $sql = sprintf('INSERT INTO donhangphu1(quantity,id,price,MaSP) VALUES %s', $aValue);
        $insert=DB::makeConnection()->query($sql);
        return $insert;
    }

}