<?php

use webLazy\Core\URL;
use webLazy\Model\TypeNewsModel;


CheckLoginAdmin();
require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';
$row_type = TypeNewsModel::selectAll();
?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tin Tức
                        <small>Thêm</small>
                    </h1>
                </div>

                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="<?php echo URL::uri('addNews'); ?>" method="POST"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tiêu Đề</label>
                            <input class="form-control" name="TieuDe" required/>
                        </div>
                        <div class="form-group">
                            <label>Tóm Tắt</label>
                            <textarea class="form-control" rows="3" name="TomTat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Nội Dung</label>
                            <textarea class="form-control" rows="3" name="NoiDung" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" name="Images[]" multiple required id="upload" onchange="//hienthianh()"/>
                            <div id="displayImg" class="anh"></div>
                        </div>
                        <div class="form-group">
                            <label>Loại Tin</label>
                            <select class="form-control" name="idLoaiTin">
                                <?php foreach ($row_type as $key => $value): ?>
                                    <
                                    <option value="<?= $value[0] ?>"><?= $value[2] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Thêm Tin Tức</button>
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