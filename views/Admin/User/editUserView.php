<?php

use webLazy\Core\Request;
use webLazy\Core\URL;
use webLazy\Model\ProducerModel;
use webLazy\Model\ProductModel;
use webLazy\Model\TypeModel;
use webLazy\Model\UserModel;

CheckLoginAdmin();
require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';
$id = Request::uri()[1];
$row = UserModel::selectId($id);
?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thành Viên
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
                    <form action="<?php echo URL::uri('editUser'); ?>" method="POST"
                          enctype="multipart/form-data">
                        <input type="hidden" name="MaKH" value="<?=$row['MaKH']?>">
                        <div class="form-group">
                            <label>Tên Khách Hàng</label>
                            <input class="form-control" name="TenKH" value="<?=$row['TenKH']?>" required/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="Email" value="<?=$row['Email']?>" required/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Nhập Password Khách Hàng.." name="Password" required/>
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input class="form-control" name="DiaChi" value="<?=$row['DiaChi']?>" required/>
                        </div>
                        <div class="form-group">
                            <label>SDT</label>
                            <input class="form-control" value="<?=$row['SDT']?>" name="SDT" required/>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa Khách Hàng</button>
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