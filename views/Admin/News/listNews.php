<?php

use webLazy\Core\URL;
use webLazy\Model\NewsModel;


CheckLoginAdmin();
require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';
$row = NewsModel::selectAllAdmin();
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tin Tức
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tiêu Đề</th>
                        <th>Nội Dung</th>
                        <th>Ảnh</th>
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
                            <td><?= the_excerpt($val[4]) ?></td>
                            <td style="float: left;width: 120px;text-align: center"><?php LoadAnhTinTuc($val[5]); ?></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        href="<?= URL::uri('deleteNews') . '/' . $val[0] ?>"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                        href="<?= URL::uri('editNews') . '/' . $val[0] ?>">Edit</a></td>
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