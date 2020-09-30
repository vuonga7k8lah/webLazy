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
$row = ProductModel::selectIdProduct($id);
$row_type = TypeModel::selectAll();
$row_producer = ProducerModel::selectAll();
?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sản Phẩm
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
                    <form action="<?php echo URL::uri('editProduct'); ?>" method="POST"
                          enctype="multipart/form-data">
                        <input name="id" type="hidden" value="<?= $row['MaSP'] ?>"/>
                        <div class="form-group">
                            <label>Tên Sản Phảm</label>
                            <input class="form-control" name="TenSP" value="<?= $row['TenSP'] ?>" required/>
                        </div>
                        <div class="form-group">
                            <label>Giá Bán</label>
                            <input class="form-control" name="GiaBan" value="<?= $row['GiaBan'] ?>" required/>
                        </div>
                        <div class="form-group">
                            <label>Chi Tiết</label>
                            <textarea class="form-control" rows="3" name="ChiTiet"
                                      required><?php if (isset($row['ChiTiet'])) {
                                    echo $row['ChiTiet'];
                                } ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" name="Images[]" multiple required id="upload" onchange="//hienthianh()"/>
                            <div id="displayImg" class="anh"
                                 style="float: left;height: 100px;width: auto"><?php LoadAnh($row['Anh']); ?></div>
                        </div>
                        <div class="form-group" style="margin-top: 100px">
                            <label>Nhà Sản Xuất</label>
                            <select class="form-control" name="MaNSX">
                                <?php foreach ($row_producer as $key => $value) : ?>
                                    <option value="<?= $value[0] ?>"><?= $value[1] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Loại</label>
                            <select class="form-control" name="MaLoai">
                                <?php foreach ($row_type as $key => $value): ?>
                                    <
                                    <option value="<?= $value[0] ?>"><?= $value[1] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa Sản Phẩm</button>
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