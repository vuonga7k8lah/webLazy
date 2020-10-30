<?php

use webLazy\Core\URL;
use webLazy\Model\ProducerModel;
use webLazy\Model\TypeModel;
use webLazy\Model\TypeNewsModel;

CheckLoginAdmin();
require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';
$row = TypeNewsModel::selectAll();
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Loại Tin
                        <small>danh sách</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên Loại Tin</th>
                        <th>Ngày Tạo</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    foreach ($row as $key => $val): ?>
                        <tr class="odd gradeX" align="center">
                            <td><?= $i ?></td>
                            <td><?= $val[2] ?></td>
                            <td><?= $val[3] ?></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        href="<?= URL::uri('deleteTypeNews') . '/' . $val[0] ?>"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                        href="<?= URL::uri('editTypeNews') . '/' . $val[0] ?>">Edit</a></td>
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