<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class UserModel
{
	public static function selectAll()
	{
		return DB::makeConnection()->query("SELECT * FROM users")->fetch_all();
	}

	public static function selectId($id): ?array
	{
		return DB::makeConnection()->query("SELECT * FROM users where MaKH=" . $id)->fetch_assoc();
	}

	public static function updateUser($data)
	{
		return DB::makeConnection()->query("UPDATE `users` SET `TenKH`='" . $data['TenKH'] . "',`Email`='" .
			$data['Email'] . "',`Password`='" . $data['Password'] . "',`DiaChi`='" . $data['DiaChi'] . "',`SDT`='" .
			$data['SDT'] . "',`registration_date`=null WHERE MaKH=" . $data['MaKH']);
	}

	public static function deleteUser($id)
	{
		return DB::makeConnection()->query("DELETE FROM `users` WHERE MaKH=" . $id);
	}

	public static function EmailIsExist($email): int
	{
		return DB::makeConnection()->query("SELECT * FROM users where Email='" . $email . "'")->num_rows;
	}

	public static function getInfoAdmin(string $email): array
	{
		$sql = DB::makeConnection()->query("SELECT * FROM users where email='" . $email . "'");
		return !empty($sql) ? $sql->fetch_assoc() : [];
	}
}
