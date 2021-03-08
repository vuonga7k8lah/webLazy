<?php


namespace webLazy\Model;


use webLazy\Database\DB;

class CommentModel
{
    public static function insertData($data)
    {
        return DB::makeConnection()->query("INSERT INTO `comments`(`idCMM`, `idTinTuc`, `TenKH`, `Email`, `NoiDung`, `register_date`) VALUES (null,'" . $data['idtinTuc'] . "','" . $data['TenKH'] . "','" . $data['Email'] . "','" . $data['comment'] . "',null)");
    }

    public static function countComment($idtintuc)
    {
        $sql = DB::makeConnection()->query("SELECT * FROM comments where idTinTuc=" . $idtintuc . "");
        return [$sql->num_rows, $sql->fetch_all()];
    }

    public static function deleteComment($id)
    {
        return DB::makeConnection()->query("DELETE FROM comments where idCMM=" . $id . "");
    }
    public static function sellectAll()
    {
        return DB::makeConnection()->query("SELECT * FROM comments")->fetch_all();
    }
	public static function insertDataProduct($data)
	{
		return DB::makeConnection()->query("INSERT INTO `feebackproduct`(`id`, `MaSP`, `name`, `email`, `content`, `rating`, `register_date`) VALUES (null,'" . $data['MaSP'] . "','" . $data['name'] . "','" . $data['email'] . "','" . $data['content'] . "','" . $data['rating'] . "',null)");
	}
	public static function countCommentProduct($idSP)
	{
		$sql = DB::makeConnection()->query("SELECT * FROM feebackproduct where MaSP=" . $idSP . "");
		return [$sql->num_rows, $sql->fetch_all()];
	}
}