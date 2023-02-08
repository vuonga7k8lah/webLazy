<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class LoginAdminModel
{
    public static function loginAdmin($data)
    {
        return DB::makeConnection()->query("SELECT * FROM users where (Email='".$data['Email']."' and Password='"
	        .$data['Password']."')")->num_rows;
    }

}