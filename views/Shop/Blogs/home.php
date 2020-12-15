<?php

use webLazy\Core\Request;
use webLazy\Core\URL;
use webLazy\Model\CategoryModel;
use webLazy\Model\CommentModel;
use webLazy\Model\NewsModel;
use webLazy\Model\TypeNewsModel;


require_once 'views/Shop/header.php';
$sosp = 6;
if (!isset(Request::uri()[1])) {
    $current_page = 1;
} else {
    $current_page = Request::uri()[1]; //Trang hiện tại
}
$offset = ($current_page - 1) * $sosp;
$totalRecords = NewsModel::countNews();
$sotrang = ceil($totalRecords / $sosp);
$row = NewsModel::selectAll($offset);
?>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="<?=URL::uri('homeBlog')?>">Blog</a></li>
                    <li class="active">List Tin Tức</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Li's Main Blog Page Area -->
    <div class="li-main-blog-page pt-60 pb-55">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Blog Sidebar Area -->
               <?php require_once 'views/Shop/Blogs/sidebar.php'?>
                <!-- Li's Blog Sidebar Area End Here -->
                <!-- Begin Li's Main Content Area -->
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="row li-main-content">
                        <?php foreach ($row as $value): ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="li-blog-single-item pb-25">
                                    <div class="li-blog-banner">
                                        <?php $img = json_decode($value[5], true); ?>
                                        <a href="<?= URL::uri('singerBlog') . '/' . $value[0] ?>"><img
                                                    class="img-full" style="width: 420px;height: 240px"
                                                    src="./assets/upload/News/<?= $img[1] ?>" alt=""></a>
                                    </div>
                                    <div class="li-blog-content">
                                        <div class="li-blog-details">
                                            <h3 class="li-blog-heading pt-25"><a
                                                        href="<?= URL::uri('singerBlog') . '/' . $value[0] ?>"><?= $value['2'] ?></a>
                                            </h3>
                                            <div class="li-blog-meta">
                                                <a class="comment"
                                                   href="<?= URL::uri('singerBlog') . '/' . $value[0] ?>"><i
                                                            class="fa fa-comment-o"></i><?php echo (CommentModel::countComment($value[0])[0] == 0) ? '0 Comment' : CommentModel::countComment($value[0])[0] . ' Comment'; ?>
                                                </a>
                                                <a class="views" href="#"><i
                                                            class="fa fa fa-eye"></i><?php echo $value[7] == 0 ? '1' : $value[7] ?>
                                                    views</a>
                                                <a class="post-time"
                                                   href="<?= URL::uri('singerBlog') . '/' . $value[0] ?>"><i
                                                            class="fa fa-calendar"></i><?= $value[8] ?></a>
                                            </div>
                                            <p><?= the_excerpt($value[4]) ?></p>
                                            <a class="read-more" href="<?= URL::uri('singerBlog') . '/' . $value[0] ?>">Read
                                                More...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- Begin Li's Pagination Area -->
                        <div class="col-lg-12">
                            <div class="li-paginatoin-area text-center pt-25">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="li-pagination-box">
                                            <?php if ($current_page != 1) {
                                                $i = $current_page - 1; ?>
                                                <li><a class="Previous" href="<?= URL::uri('homeBlog') . '/' . $i ?>">Previous</a>
                                                </li>
                                            <?php } ?>
                                            <?php for ($i = 1; $i <= $sotrang; $i++): ?>
                                                <li class="<?php echo $i == $current_page ? "active" : "" ?>"><a
                                                            href="<?= URL::uri('homeBlog') . '/' . $i ?>">
                                                        <?= $i ?></a></li>
                                            <?php endfor; ?>
                                            <?php if ($current_page != $sotrang) {
                                                $i = $current_page + 1; ?>
                                                <li><a class="Next"
                                                       href="<?= URL::uri('homeBlog') . '/' . $i ?>">Next</a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Pagination End Here Area -->
                    </div>
                </div>
                <!-- Li's Main Content Area End Here -->
            </div>
        </div>
    </div>
<?php
require_once 'views/Shop/footer.php';
