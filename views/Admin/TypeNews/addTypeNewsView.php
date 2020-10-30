<?php

use webLazy\Core\URL;
use webLazy\Model\CategoryModel;
use webLazy\Model\ProducerModel;
use webLazy\Model\ProductModel;
use webLazy\Model\TypeModel;

CheckLoginAdmin();
require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';
$row_Theloai = CategoryModel::selectAll();
?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Loại Tin Tức
                        <small>Thêm</small>
                    </h1>
                </div>

                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="<?php echo URL::uri('addTypeNews'); ?>" method="POST"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên Loại Tin</label>
                            <input class="form-control" name="TenLoaiTin" required/>
                        </div>
                        <div class="form-group">
                            <label>Thể Loại</label>
                            <select class="form-control" name="idTheLoai">
                                <?php foreach ($row_Theloai as $key => $value) : ?>
                                    <option value="<?= $value[0] ?>"><?= $value[1] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Thêm Loại SP</button>
                        <button type="reset" class="btn btn-default">Reset</button>
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