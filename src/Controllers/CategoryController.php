<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Model\CategoryModel;

class CategoryController
{
    public function loadView()
    {
        require_once 'views/Admin/Category/listCategory.php';
    }

    public function loadAddView()
    {
        require_once 'views/Admin/Category/addCategory.php';
    }

    public function loadEditView()
    {
        require_once 'views/Admin/Category/editCategory.php';
    }

    public function addCategory()
    {
        $data = $_POST['TenLoaiTin'];
        if (CategoryModel::insertData($data)) {
            Redirect::to('listCategory');
        }
    }

    public function deleteCategory()
    {
        $id = Request::uri()[1];
        if (CategoryModel::deleteData($id)) {
            Redirect::to('listCategory');
        }
    }

    public function editCategory()
    {
        $data['TenTheLoai']=$_POST['TenTheLoai'];
        $data['idTheLoai']=$_POST['idTheLoai'];
        if (CategoryModel::updateData($data)) {
            Redirect::to('listCategory');
        }
    }
}