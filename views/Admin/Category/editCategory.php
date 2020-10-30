<?php

use webLazy\Core\Request;
use webLazy\Core\URL;
use webLazy\Model\CategoryModel;


CheckLoginAdmin();
require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';
$id = Request::uri()[1];
$row = CategoryModel::selectId($id);

?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thể Loại
                        <small>Sửa</small>
                    </h1>
                </div>

                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="<?php echo URL::uri('editCategory'); ?>" method="POST"
                          enctype="multipart/form-data">
                        <input name="idTheLoai" type="hidden" value="<?= $row['idTheLoai'] ?>"/>
                        <div class="form-group">
                            <label>Tên Thể Loại</label>
                            <input class="form-control" name="TenTheLoai" value="<?= $row['TenTheLoai'] ?>" required/>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa Thể Loại</button>
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