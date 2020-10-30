<?php

use webLazy\Core\Request;
use webLazy\Core\URL;
use webLazy\Model\CommentModel;
use webLazy\Model\NewsModel;

require_once 'views/Shop/header.php';
$id = Request::uri()[1];
$row = NewsModel::selectId($id);
countView($id);
?>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Blog</a></li>
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
                                    <a href="blog-details.html">
                                        <img class="img-full" src="images/product/small-size/3.jpg"
                                             alt="Li's Product Image">
                                    </a>
                                </div>
                                <div class="li-recent-post-des">
                                    <span><a href="blog-details.html">First Blog Post</a></span>
                                    <span class="li-post-date">25.11.2018</span>
                                </div>
                            </div>
                            <div class="li-recent-post pb-30">
                                <div class="li-recent-post-thumb">
                                    <a href="blog-details.html">
                                        <img class="img-full" src="images/product/small-size/2.jpg"
                                             alt="Li's Product Image">
                                    </a>
                                </div>
                                <div class="li-recent-post-des">
                                    <span><a href="blog-details.html">First Blog Post</a></span>
                                    <span class="li-post-date">25.11.2018</span>
                                </div>
                            </div>
                            <div class="li-recent-post pb-30">
                                <div class="li-recent-post-thumb">
                                    <a href="blog-details.html">
                                        <img class="img-full" src="images/product/small-size/5.jpg"
                                             alt="Li's Product Image">
                                    </a>
                                </div>
                                <div class="li-recent-post-des">
                                    <span><a href="blog-details.html">First Blog Post</a></span>
                                    <span class="li-post-date">25.11.2018</span>
                                </div>
                            </div>
                        </div>
                        <div class="li-blog-sidebar">
                            <h4 class="li-blog-sidebar-title">Tags</h4>
                            <ul class="li-blog-tags">
                                <li><a href="#">Gaming</a></li>
                                <li><a href="#">Chromebook</a></li>
                                <li><a href="#">Refurbished</a></li>
                                <li><a href="#">Touchscreen</a></li>
                                <li><a href="#">Ultrabooks</a></li>
                                <li><a href="#">Sound Cards</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Li's Blog Sidebar Area End Here -->
                <!-- Begin Li's Main Content Area -->
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="row li-main-content">
                        <div class="col-lg-12">
                            <div class="li-blog-single-item pb-30">
                                <div class="li-blog-banner">
                                    <?php $img = json_decode($row['Anh'], true); ?>
                                    <a href="blog-details.html"><img class="img-full" style="width: 870px;height: 300px"
                                                                     src="./assets/upload/News/<?= $img[0] ?>"
                                                                     alt=""></a>
                                </div>
                                <div class="li-blog-content">
                                    <div class="li-blog-details">
                                        <h3 class="li-blog-heading pt-25"><?= $row['TieuDe'] ?></h3>
                                        <div class="li-blog-meta">
                                            <a class="comment" href="<?=URL::uri('singerBlog') . '/' . $id . '#listComment'?>"><i class="fa fa-comment-o"></i><?php echo (CommentModel::countComment($id)[0]==0)?'0 Comment':CommentModel::countComment($id)[0].' Comment';?></a>
                                            <a class="comment" href="#"><i
                                                        class="fa fa fa-eye"></i><?php echo $row['views'] == 0 ? '1' : $row['views'] ?>
                                                views</a>
                                            <a class="post-time" href="#"><i
                                                        class="fa fa-calendar"></i><?= $row['date_time'] ?></a>
                                        </div>
                                        <p><?= $row['TomTat'] ?></p>
                                        <!-- Begin Blog Blockquote Area -->
                                        <div class="li-blog-blockquote">
                                            <blockquote>
                                                <div class="li-blog-banner">
                                                    <a href=""><img class="img-full"
                                                                    src="./assets/upload/News/<?= $img[1] ?>"
                                                                    alt=""></a>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- Blog Blockquote Area End Here -->
                                        <p><?= $row['NoiDung'] ?></p>
                                        <div class="li-blog-sharing text-center pt-30">
                                            <h4>share this post:</h4>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Begin Li's Blog Comment Section -->
                            <div class="li-comment-section" id="listComment">
                                <h3><?php echo (CommentModel::countComment($id)[0]==0)?'No Comment':CommentModel::countComment($id)[0].' Comment';?></h3>
                                <?php if (CommentModel::countComment($id)[0]>0){
                                    foreach (CommentModel::countComment($id)[1] as $item =>$value):
                                    ?>
                                    <ul>
                                    <?php
                                    if ($item%2==0){
                                        ?>
                                        <li>
                                            <div class="comment-body pl-15">
                                                <h5 class="comment-author pt-15"><?=$value[2]?></h5>
                                                <div class="comment-post-date"><?=$value[5]?></div>
                                                <p><?=$value[4]?></p>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                    else{
                                    ?>
                                    <li class="comment-children">
                                        <div class="comment-body pl-15">
                                            <h5 class="comment-author pt-15"><?=$value[2]?></h5>
                                            <div class="comment-post-date"><?=$value[5]?></div>
                                            <p><?=$value[4]?></p>
                                        </div>
                                    </li>
                                    <?php }endforeach; ?>
                                    </ul>
                                <?php }?>
                            </div>
                            <!-- Li's Blog Comment Section End Here -->
                            <!-- Begin Blog comment Box Area -->
                            <div class="li-blog-comment-wrapper">
                                <h3>leave a reply</h3>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <form action="<?= URL::uri('comment') ?>" method="post" id="comment">
                                    <div class="error" style="background-color: red">
                                        <?php if (isset($_SESSION['errorCMM_email'])) {
                                            echo $_SESSION['errorCMM_email'];
                                        } ?>
                                    </div>
                                    <div class="error" style="background-color: red">
                                        <?php if (isset($_SESSION['errorCMM_captcha'])) {
                                            echo $_SESSION['errorCMM_captcha'];
                                        } ?>
                                    </div>
                                    <div class="comment-post-box">
                                        <div class="row">
                                            <input type="hidden" name="idtinTuc" value="<?= $id ?>">
                                            <div class="col-lg-12">
                                                <label>comment</label>
                                                <textarea name="comment" required
                                                          placeholder="Write a comment"><?php if (isset($_SESSION['dataCMM']['comment'])) {
                                                        echo $_SESSION['dataCMM']['comment'];
                                                    } ?></textarea>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Name</label>
                                                <input name="TenKH" type="text" class="coment-field"
                                                       value="<?php if (isset($_SESSION['dataCMM']['TenKH'])) {
                                                           echo $_SESSION['dataCMM']['TenKH'];
                                                       } ?>" required placeholder="Name">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Email</label>
                                                <div id="availableEmail"></div>
                                                <input name="Email" type="email"
                                                       value="<?php if (isset($_SESSION['dataCMM']['Email'])) {
                                                           echo $_SESSION['dataCMM']['Email'];
                                                       } ?>" id="email" class="coment-field" required
                                                       placeholder="Email">
                                            </div>

                                            <div class="col-lg-12">
                                                <label for="captcha" style="color: red">Phiền bạn điền vào giá trị số
                                                    cho câu hỏi sau: <?php echo captcha(); ?><span
                                                            class="required">*</span></label>
                                                <div id="available"></div>
                                                <input type="text" required name="captcha" id="captcha"
                                                       value="<?php if (isset($_SESSION['dataCMM']['captcha'])) {
                                                           echo $_SESSION['dataCMM']['captcha'];
                                                       } ?>" size="20" maxlength="5" tabindex="4"/>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="coment-btn pt-30 pb-sm-30 pb-xs-30 f-left">
                                                    <input class="li-btn-2" type="submit"
                                                           value="post comment">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Blog comment Box Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Li's Main Content Area End Here -->
            </div>
        </div>
    </div>
<?php
require_once 'views/Shop/footer.php';

