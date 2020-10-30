<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Model\NewsModel;

class NewsController
{
    public function loadView()
    {
        require_once 'views/Admin/News/listNews.php';
    }

    public function loadAddView()
    {
        require_once 'views/Admin/News/addNews.php';
    }

    public function loadEditView()
    {
        require_once 'views/Admin/News/editNews.php';
    }

    public function addNews()
    {
        $data=$_POST;
        $data['Anh']=imagesTinTuc($_FILES);
        if (NewsModel::insertData($data)){
            Redirect::to('listNews');
        }

    }

    public function deleteNews()
    {
        $id = Request::uri()[1];



    }

    public function editNews()
    {
        $data=$_POST;

    }
}