<?php

use webLazy\Core\Request;
use webLazy\Core\URL;
use webLazy\Model\NewsModel;
use webLazy\Model\TypeNewsModel;


CheckLoginAdmin();
require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';
$id = Request::uri()[1];
$row = NewsModel::selectId($id);
$row_type = TypeNewsModel::selectAll();
?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tin Tức
                        <small>Sửa</small>
                    </h1>
                </div>

                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="<?php echo URL::uri('editNews'); ?>" method="POST"
                          enctype="multipart/form-data">
                        <input name="idtintuc" type="hidden" value="<?= $row['idTinTuc'] ?>"/>
                        <div class="form-group">
                            <label>Tiêu Đề</label>
                            <input class="form-control" name="TieuDe" value="<?= $row['TieuDe'] ?>" required/>
                        </div>
                        <div class="form-group">
                            <label>Chi Tiết</label>
                            <textarea class="form-control" rows="10" name="NoiDung"
                                      required><?php if (isset($row['NoiDung'])) {
                                    echo $row['NoiDung'];
                                } ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" name="Images[]" multiple required id="upload" onchange="//hienthianh()"/>
                            <div id="displayImg" class="anh"
                                 style="float: left;height: 100px;width: auto"><?php LoadAnhEditTinTuc($row['Anh']); ?></div>
                        </div>
                        <div class="form-group" style="margin-top: 110px">
                            <label>Loại Tin</label>
                            <select class="form-control" name="idLoaiTin">
                                <?php foreach ($row_type as $key => $value): ?>
                                    <option value="<?= $value[0] ?>" <?php if ($value[0]==$row['idLoaiTin']){echo "selected=\"selected\"";}?>><?= $value[2] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa Tin Tức</button>
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