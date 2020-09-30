<?php

use webLazy\Core\Request;
use webLazy\Core\URL;
use webLazy\Model\ProducerModel;
use webLazy\Model\ProductModel;
use webLazy\Model\TypeModel;

CheckLoginAdmin();
require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';
$id = Request::uri()[1];
$row = TypeModel::selectId($id);
?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Loại SP
                        <small>Sửa</small>
                    </h1>
                </div>

                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="<?php echo URL::uri('editType'); ?>" method="POST"
                          enctype="multipart/form-data">
                        <input name="MaLoai" type="hidden" value="<?= $row['MaLoai'] ?>"/>
                        <div class="form-group">
                            <label>Tên Loại SP</label>
                            <input class="form-control" name="TenLoai" value="<?= $row['TenLoai'] ?>" required/>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa Loại SP</button>
                        <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    <!-- /#page-wrapper -->

<?php
require_once 'views/Admin/footer.php';