<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class NewsModel
{
    public static function insertData($data)
    {
        return DB::makeConnection()->query("INSERT INTO `tintuc`(`idTinTuc`, `idLoaiTin`, `TomTat`, `TieuDe`, `NoiDung`, `Anh`,`date_time`) VALUES (null,'" . $data['idLoaiTin'] . "','" . $data['TomTat'] . "','" . $data['TieuDe'] . "','" . $data['NoiDung'] . "','" . $data['Anh'] . "',null)");
    }

    public static function countNews()
    {
        return DB::makeConnection()->query("SELECT * FROM tintuc")->num_rows;
    }
    public static function selectAllAdmin()
    {
        return DB::makeConnection()->query("SELECT * FROM tintuc")->fetch_all();
    }

    public static function selectAll($offset)
    {
        return DB::makeConnection()->query("SELECT * FROM tintuc ORDER BY idTinTuc ASC limit " . $offset . ",6 ")->fetch_all();
    }

    public static function selectId($id)
    {
        return DB::makeConnection()->query("SELECT * FROM tintuc where idtintuc=" . $id . "")->fetch_assoc();
    }

    public static function deleteData($id)
    {
        return DB::makeConnection()->query("DELETE FROM tintuc where idtintuc=" . $id . "");
    }

    public static function updateData($data)
    {
        return DB::makeConnection()->query("UPDATE `tintuc` SET `idLoaiTin`='" . $data['idLoaiTin'] . "',`TieuDe`='" . $data['TieuDe'] . "',`TomTat`='" . $data['TomTat'] . "',`NoiDung`='" . $data['NoiDung'] . "',`Anh`='" . $data['Anh'] . "' WHERE idtintuc='" . $data['idtintuc`'] . "'");
    }

    public static function selectView($id)
    {
        return DB::makeConnection()->query("SELECT views FROM `tintuc` WHERE idTinTuc=" . $id . "")->fetch_assoc();
    }

    public static function updateView($view, $id)
    {
        return DB::makeConnection()->query("UPDATE tintuc SET views=" . $view . " where idTinTuc=" . $id . "");
    }

    public static function popularPostCouview()
    {
        return DB::makeConnection()->query("SELECT * FROM tintuc order by views DESC limit 5 ")->fetch_all();
    }
    public static function selectCountNew($id)
    {
        return DB::makeConnection()->query("SELECT * FROM `tintuc` WHERE idLoaiTin=" . $id . "")->num_rows;
    }
}