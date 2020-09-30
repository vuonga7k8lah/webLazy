<?php


use webLazy\Core\URL;
use webLazy\Model\BannerModel;

CheckLoginAdmin();
require_once 'views/Admin/header.php';
require_once 'views/Admin/navigation.php';
$row = BannerModel::selectAll();
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Banner
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên Banner</th>
                        <th>Trạng Thái</th>
                        <th>Ảnh</th>
                        <th>Ngày Tạo</th>
                        <th>Delete</th>
                        <th>Hiện</th>
                        <th>Ẩn</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    foreach ($row as $key => $val): ?>
                        <tr class="odd gradeX" align="center">
                            <td><?= $i ?></td>
                            <td><?= $val[1] ?></td>
                            <td><?= $val[2] ?></td>
                            <td ><a href="./assets/upload/Banner/<?= $val[3] ?>"><img src="./assets/upload/Banner/<?= $val[3] ?>" alt="" style="float: left;width: 120px;text-align: center;height: 80px"></a></td>
                            <td style="text-align: center"><?= $val[4] ?></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        href="<?= URL::uri('deleteBanner') . '/' . $val[0] ?>"> Delete</a></td>
                            <td class="center"> <i class="fa fa-pencil fa-fw"></i><a
                                        href="<?= URL::uri('show') . '/' . $val[0] ?>"> Hiển Thị</a></td>
                            <td class="center"> <i class="fa fa-pencil fa-fw"></i><a
                                    href="<?= URL::uri('hidden') . '/' . $val[0] ?>"> Ẩn</a></td>
                        </tr>
                        <?php $i++;
                    endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
<?php
require_once 'views/Admin/footer.php';