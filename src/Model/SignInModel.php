<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class SignInModel
{
    public static function emailIsExist($data): bool
    {
        $result = DB::makeConnection()->query("SELECT MaKH FROM users where Email='" . $data . "'")->num_rows;
        return !empty($result);
    }

    public static function queryMaKHTenKHWithEmail($email)
    {
        return DB::makeConnection()->query("SELECT TenKH,MaKH FROM users where Email='" . $email . "'")->fetch_assoc();
    }

    public static function insertUser($data)
    {
        $connect = DB::makeConnection();
        $sql = "INSERT INTO users value (null,'" . $data['TenKH'] . "','" . $data['Email'] .
            "','" . $data['Password'] . "','" . $data['DiaChi'] . "','" . $data['SDT'] . "',null)";
        return ($connect->query($sql)) ? $connect->insert_id : 0;
    }

    public static function loginUser($data)
    {
        $db = DB::makeConnection()->query("SELECT MaKH,TenKH FROM users where Email='" . $data['Email'] .
            "' and Password='" . $data['Password'] . "'");
        return [$db->num_rows, $db->fetch_assoc()];
    }

    public static function checkCookie($id)
    {
        return DB::makeConnection()->query("SELECT MaKH,TenKH FROM users where MaKH=" . $id . "")->fetch_assoc();
    }

    public static function emailIsExitsOfForgot($data)
    {
        $db = DB::makeConnection()->query("SELECT MaKH FROM users where Email='" . $data . "'");
        return [$db->num_rows, $db->fetch_assoc()];
    }

    public static function updatePassword($data)
    {
        return DB::makeConnection()->query("UPDATE users set Password='" . $data['Password'] . "' where MaKH='" .
            $data['MaKH'] . "'");
    }

}
