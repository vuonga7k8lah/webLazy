<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Model\CommentModel;

class CMMController
{
    public function loadView()
    {
        require_once 'views/Admin/Comment/listCommentView.php';
    }

    public function deleteCMM()
    {
        $id = Request::uri()[1];
        if (CommentModel::deleteComment($id)) {
            Redirect::to('listCMM');
        }
    }

}