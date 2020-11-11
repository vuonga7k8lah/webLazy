<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Core\Session;
use webLazy\Model\OrderAdminModel;

class OrderAdminController
{
    public function loadView()
    {
        require_once 'views/Admin/Order/listOrder.php';
    }

    public function deleteOrderAdmin()
    {
        $id = Request::uri()[1];
        if (OrderAdminModel::deleteOrder($id)) {
            Session::set('success_delete', 'Xóa Thành Công');
            Redirect::to('listOrderAdmin');
        }
    }

    public function printOrderAdmin()
    {
        require_once 'views/Admin/Order/printOrder.php';
    }

    public function statusOrderAdmin()
    {
        $id = Request::uri()[1];
        if (OrderAdminModel::updateStatus($id)) {
            Redirect::to('listOrderAdmin');
            ?>
            <script>
                alert('Đơn Hàng Đã Dc Cập Nhật');
            </script>
            <?php
        }
    }

}