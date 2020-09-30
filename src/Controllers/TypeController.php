<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Core\Session;
use webLazy\Model\TypeModel;

class TypeController
{
    public function loadView()
    {
        require_once 'views/Admin/Type/listTypeView.php';
    }
    public function loadAddView()
    {
        require_once 'views/Admin/Type/addTypeView.php';
    }

    public function deleteType()
    {
        $id=Request::uri()[1];
        if(TypeModel::deleteType($id)){
            Session::set('success_deleteType','Loại sp đã xóa Thành Công');
            Redirect::to('listType');
        }


    }

    public function loadEditView()
    {
        require_once 'views/Admin/Type/editTypeView.php';
    }
    public function addType()
    {
        $data = $_POST;
        if(TypeModel::insertData($data)){
            Session::set('success_addType','Loại sp dc tạo Thành Công');
            Redirect::to('listType');
        }

    }

    public function editType()
    {
        $data = $_POST;
        if (TypeModel::updateType($data)){
            Session::set('success_updateType','Loại sp dc Update Thành Công');
            Redirect::to('listType');
        }
    }
}