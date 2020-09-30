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
                    <h1 class="page-header">Thành Viên
                        <small>Thêm</small>
                    </h1>
                </div>

                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <?php if (isset($_SESSION['error_addUser'])): ?>
                        <div class="alert-danger">
                            <?php echo $_SESSION['error_addUser']; ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo URL::uri('addUser'); ?>" method="POST"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên Khách Hàng</label>
                            <input class="form-control" name="TenKH" value="<?php if (isset($_SESSION['data_addUser']['TenKH'])){echo $_SESSION['data_addUser']['TenKH'];}?>" required/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="<?php if (isset($_SESSION['data_addUser']['Email'])){echo $_SESSION['data_addUser']['Email'];}?>" name="Email" required/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" value="<?php if (isset($_SESSION['data_addUser']['Password'])){echo $_SESSION['data_addUser']['Password'];}?>" name="Password" required/>
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input class="form-control" name="DiaChi" value="<?php if (isset($_SESSION['data_addUser']['DiaChi'])){echo $_SESSION['data_addUser']['DiaChi'];}?>" required/>
                        </div>
                        <div class="form-group">
                            <label>SDT</label>
                            <input class="form-control" name="SDT" value="<?php if (isset($_SESSION['data_addUser']['SDT'])){echo $_SESSION['data_addUser']['SDT'];}?>" required/>
                        </div>
                        <button type="submit" class="btn btn-default">Thêm Khách Hàng</button>
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