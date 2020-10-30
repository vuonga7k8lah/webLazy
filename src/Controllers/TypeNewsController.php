<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Model\TypeNewsModel;

class TypeNewsController
{
    public function loadView()
    {
        require_once 'views/Admin/TypeNews/listTypeNewsView.php';
    }

    public function loadAddView()
    {
        require_once 'views/Admin/TypeNews/addTypeNewsView.php';
    }

    public function loadEditView()
    {
        require_once 'views/Admin/TypeNews/editTypeNewsView.php';
    }

    public function addTypeNews()
    {
        $data=$_POST;
        if (TypeNewsModel::insertData($data)){
            Redirect::to('listTypeNews');
        }

    }

    public function deleteTypeNews()
    {
        $id = Request::uri()[1];
        if (TypeNewsModel::deleteData($id)){
            Redirect::to('listTypeNews');
        }


    }

    public function editTypeNews()
    {
        $data=$_POST;
        if (TypeNewsModel::updateData($data)){
            Redirect::to('listTypeNews');
        }
    }
}