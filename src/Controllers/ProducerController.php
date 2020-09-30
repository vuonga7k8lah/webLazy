<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Core\Session;
use webLazy\Model\ProducerModel;

class ProducerController
{
    public function loadView()
    {
        require_once 'views/Admin/Producer/listProducerView.php';
    }
    public function loadAddView()
    {
        require_once 'views/Admin/Producer/addProducerView.php';
    }

    public function deleteProducer()
    {
        $id=Request::uri()[1];
        if (ProducerModel::deleteProducer($id)){
            Session::set('success_delete','Nhà Sản Xuất Đã Xóa Thành Công');
            Redirect::to('listProducer');
        }

    }

    public function loadEditView()
    {
        require_once 'views/Admin/Producer/editProducerView.php';
    }
    public function addProducer()
    {
        $data = $_POST;
        if(ProducerModel::insertData($data)){
            Session::set('success_add','Nhà Sản Xuất Dc Tạo Thành Công');
            Redirect::to('listProducer');
        }
    }

    public function editProducer()
    {
        $data = $_POST;
        if (ProducerModel::updateProducer($data)){
            Session::set('success_edit','Sửa NSX thành Công');
            Redirect::to('listProducer');
        }
    }
}