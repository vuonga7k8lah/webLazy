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
$row = ProducerModel::selectId($id);
$row_type = TypeModel::selectAll();
?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nhà Sản Xuất
                        <small>Sửa</small>
                    </h1>
                </div>

                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <?php if (isset($_SESSION['error_AddProduct'])): ?>
                        <div class="alert-danger">
                            <?php echo $_SESSION['error_AddProduct']; ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo URL::uri('editProducer'); ?>" method="POST"
                          enctype="multipart/form-data">
                        <input name="MaNSX" type="hidden" value="<?= $row['MaNSX'] ?>"/>
                        <div class="form-group">
                            <label>Tên Nhà Sản Xuất</label>
                            <input class="form-control" name="TenNSX" value="<?= $row['TenNSX'] ?>" required/>
                        </div>
                        <div class="form-group">
                            <label>Loại</label>
                            <select class="form-control" name="MaLoai">
                                <?php foreach ($row_type as $key=>$value): ?>
                                    <<option value="<?=$value[0]?>"><?=$value[1]?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input class="form-control" name="DiaChi" value="<?= $row['DiaChi'] ?>" required/>
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input class="form-control" name="SDT" value="<?= $row['SDT'] ?>" required/>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa Nhà Sản Xuất</button>
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