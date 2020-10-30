<?php

use webLazy\Core\Request;
use webLazy\Core\URL;
use webLazy\Model\CategoryModel;
use webLazy\Model\TypeNewsModel;

CheckLoginAdmin();
require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';
$id = Request::uri()[1];
$row = TypeNewsModel::selectId($id);
$row_Theloai = CategoryModel::selectAll();
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
                    <form action="<?php echo URL::uri('editTypeNews'); ?>" method="POST"
                          enctype="multipart/form-data">
                        <input name="idLoaiTin" type="hidden" value="<?= $row['idLoaiTin'] ?>"/>
                        <div class="form-group">
                            <label>Tên Loại Tin</label>
                            <input class="form-control" name="TenLoaiTin" value="<?= $row['TenLoaiTin'] ?>" required/>
                        </div>
                        <div class="form-group">
                            <label>Thể Loại</label>
                            <select class="form-control" name="idTheLoai">
                                <?php foreach ($row_Theloai as $key => $value) : ?>
                                    <option value="<?= $value[0] ?>" <?php if ($row['idTheLoai'] == $value[0]) {
                                        echo "selected=\"selected\"";
                                    } ?>><?= $value[1] ?></option>
                                <?php endforeach; ?>
                            </select>
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
