<?php

use webLazy\Core\URL;
use webLazy\Model\ProducerModel;
use webLazy\Model\ProductModel;
use webLazy\Model\TypeModel;
CheckLoginAdmin();
require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';
$row_type = TypeModel::selectAll();
?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nhà Sản Xuất
                        <small>Thêm</small>
                    </h1>
                </div>

                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="<?php echo URL::uri('addProducer'); ?>" method="POST"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên Nhà Sản Xuất</label>
                            <input class="form-control" name="TenNSX" required/>
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
                            <input class="form-control" name="DiaChi" required/>
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input class="form-control" name="SDT" required/>
                        </div>
                        <button type="submit" class="btn btn-default">Thêm Nhà Sản Xuất</button>
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