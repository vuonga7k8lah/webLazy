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
}