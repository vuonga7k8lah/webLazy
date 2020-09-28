<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Model\ProductModel;

class ProductController
{
    public function loadView()
    {
        require_once 'views/Admin/Product/listProductView.php';
    }

    public function addProduct()
    {
        $data = $_POST;
        $data['Anh'] = imagesIsExits($_FILES);
        if (ProductModel::insertProduct($data)) {
            Redirect::to('listProduct');
        }
    }

    public function loadAddView()
    {
        require_once 'views/Admin/Product/addProductView.php';
    }

    public function deleteProduct()
    {
        $id=Request::uri()[1];
        if (ProductModel::deleteProduct($id)){
            Redirect::to('listProduct');
        }
    }

    public function loadEditView()
    {
        require_once 'views/Admin/Product/editProductView.php';
    }

    public function editProduct()
    {
        $data = $_POST;
        $data['Anh'] = imagesIsExits($_FILES);
        if (ProductModel::updateData($data)){
            Redirect::to('listProduct');
        }
    }
}