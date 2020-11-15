<?php

use webLazy\Core\URL;
use webLazy\Model\ProducerModel;
use webLazy\Model\TypeModel;

CheckLoginAdmin();
require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';
$row = \webLazy\Model\CommentModel::sellectAll();
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Comment
                        <small>danh sách</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên Khách Hàng</th>
                        <th>Email</th>
                        <th>Nội Dung</th>
                        <th>delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    foreach ($row as $key => $val): ?>
                        <tr class="odd gradeX" align="center">
                            <td><?= $i ?></td>
                            <td><?= $val[2] ?></td>
                            <td><?= $val[3] ?></td>
                            <td><?= $val[4] ?></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                    href="<?= URL::uri('deleteAdminCMM') . '/' . $val[0] ?>">delete</a></td>
                        </tr>
                        <?php $i++;
                    endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
<?php
require_once 'views/Admin/footer.php';