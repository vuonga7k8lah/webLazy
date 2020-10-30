<?php

use webLazy\Core\URL;
use webLazy\Model\ProducerModel;
use webLazy\Model\ProductModel;
use webLazy\Model\TypeModel;

CheckLoginAdmin();
require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';
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
                    <form action="<?php echo URL::uri('addCategory'); ?>" method="POST"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên Loại Tin</label>
                            <input class="form-control" name="TenLoaiTin" required/>
                        </div>
                        <button type="submit" class="btn btn-default">Thêm Loại Tin</button>
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