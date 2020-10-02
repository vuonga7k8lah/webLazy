<?php

use webLazy\Core\URL;
use webLazy\Model\OrderAdminModel;

require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';

CheckLoginAdmin();
$row = OrderAdminModel::selectAllOrder();
?>
    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ĐƠN HÀNG
                        <small>Danh Sách</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example"
                       style="text-align: center">
                    <thead>
                    <tr align="center">
                        <th>id</th>
                        <th>Tên Khách Hàng</th>
                        <th>Địa Chỉ</th>
                        <th>SDT</th>
                        <th>Ngày Tạo Đơn</th>
                        <th>Delete</th>
                        <th>In Đơn</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1;
                    foreach ($row as $item): ?>
                        <tr class="odd gradeX" align="center">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $item[1]; ?></td>
                            <td><?php echo $item[2]; ?></td>
                            <td><?php echo $item[3]; ?></td>
                            <td><?php echo $item[4]; ?></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        href="<?php echo URL::uri('deleteOrderAdmin'); ?>/<?= $item[0]; ?>">Delete</a>
                            </td>
                            <td class="center"><i class="fa fa fa-print fa-fw"></i> <a
                                        href="<?php echo URL::uri('printOrderAdmin'); ?>/<?= $item[0]; ?>">In
                                    ĐƠN</a>
                            </td>
                        </tr>
                    <?php $i++;
                    endforeach;
                    ?>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->


    <!-- /#wrapper -->

    <!-- jQuery -->
<?php
require_once 'views/Admin/footer.php';

?>