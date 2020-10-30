<?php

use webLazy\Core\URL;
use webLazy\Model\CommentModel;
use webLazy\Model\NewsModel;


require_once 'views/Shop/header.php';
$row = NewsModel::selectAll();

?>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="">Blog</a></li>
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
                <div class="col-lg-3 order-lg-1 order-2">
                    <div class="li-blog-sidebar-wrapper">
                        <div class="li-blog-sidebar">
                            <div class="li-sidebar-search-form">
                                <form action="#">
                                    <input type="text" class="li-search-field" placeholder="search here">
                                    <button type="submit" class="li-search-btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="li-blog-sidebar pt-25">
                            <h4 class="li-blog-sidebar-title">Categories</h4>
                            <ul class="li-blog-archive">
                                <li><a href="#">Laptops (10)</a></li>
                                <li><a href="#">TV & Audio (08)</a></li>
                                <li><a href="#">reach (07)</a></li>
                                <li><a href="#">Smartphone (14)</a></li>
                                <li><a href="#">Cameras (10)</a></li>
                                <li><a href="#">Headphone (06)</a></li>
                            </ul>
                        </div>
                        <div class="li-blog-sidebar">
                            <h4 class="li-blog-sidebar-title">Blog Archives</h4>
                            <ul class="li-blog-archive">
                                <li><a href="#">January (10)</a></li>
                                <li><a href="#">February (08)</a></li>
                                <li><a href="#">March (07)</a></li>
                                <li><a href="#">April (14)</a></li>
                                <li><a href="#">May (10)</a></li>
                                <li><a href="#">June (06)</a></li>
                            </ul>
                        </div>
                        <div class="li-blog-sidebar">
                            <h4 class="li-blog-sidebar-title">Recent Post</h4>
                            <div class="li-recent-post pb-30">
                                <div class="li-recent-post-thumb">
                                    <a href="blog-details-left-sidebar.html">
                                        <img class="img-full" src="images/product/small-size/3.jpg"
                                             alt="Li's Product Image">
                                    </a>
                                </div>
                                <div class="li-recent-post-des">
                                    <span><a href="blog-details-left-sidebar.html">First Blog Post</a></span>
                                    <span class="li-post-date">25.11.2018</span>
                                </div>
                            </div>
                            <div class="li-recent-post pb-30">
                                <div class="li-recent-post-thumb">
                                    <a href="blog-details-left-sidebar.html">
                                        <img class="img-full" src="images/product/small-size/2.jpg"
                                             alt="Li's Product Image">
                                    </a>
                                </div>
                                <div class="li-recent-post-des">
                                    <span><a href="blog-details-left-sidebar.html">First Blog Post</a></span>
                                    <span class="li-post-date">25.11.2018</span>
                                </div>
                            </div>
                            <div class="li-recent-post pb-30">
                                <div class="li-recent-post-thumb">
                                    <a href="blog-details-left-sidebar.html">
                                        <img class="img-full" src="images/product/small-size/5.jpg"
                                             alt="Li's Product Image">
                                    </a>
                                </div>
                                <div class="li-recent-post-des">
                                    <span><a href="blog-details-left-sidebar.html">First Blog Post</a></span>
                                    <span class="li-post-date">25.11.2018</span>
                                </div>
                            </div>
                        </div>
                        <!--                        <div class="li-blog-sidebar">-->
                        <!--                            <h4 class="li-blog-sidebar-title">Tags</h4>-->
                        <!--                            <ul class="li-blog-tags">-->
                        <!--                                <li><a href="#">Gaming</a></li>-->
                        <!--                                <li><a href="#">Chromebook</a></li>-->
                        <!--                                <li><a href="#">Refurbished</a></li>-->
                        <!--                                <li><a href="#">Touchscreen</a></li>-->
                        <!--                                <li><a href="#">Ultrabooks</a></li>-->
                        <!--                                <li><a href="#">Sound Cards</a></li>-->
                        <!--                            </ul>-->
                        <!--                        </div>-->
                    </div>
                </div>
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
                                                    src="./assets/upload/News/<?= $img[0] ?>" alt=""></a>
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
                                                <a class="comment" href="#"><i
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
                                            <li><a class="Previous" href="#">Previous</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a class="Next" href="#">Next</a></li>
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
