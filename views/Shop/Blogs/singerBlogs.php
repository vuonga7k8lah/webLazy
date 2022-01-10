<?php

use webLazy\Core\Request;
use webLazy\Core\URL;
use webLazy\Model\CommentModel;
use webLazy\Model\NewsModel;
use webLazy\Model\CategoryModel;
use webLazy\Model\TypeNewsModel;

require_once 'views/Shop/header.php';
$id = Request::uri()[1];
$row = NewsModel::selectId($id);
countView($id);
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
                        <div class="col-lg-12">
                            <div class="li-blog-single-item pb-30">
                                <div class="li-blog-banner">
                                    <?php $img = json_decode($row['Anh'], true); ?>
                                    <a href=""><img class="img-full" style="width: 870px;height: 300px"
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
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0
                                          .1/webLazy/singerBlog/<?= $id?>"
                                               target="_blank"><i class="fa
                                            fa-facebook"></i></a>
                                            <a href="https://twitter.com/share?text=&url=http://127.0.0
                                            .1/webLazy/singerBlog/<?= $id ?>"
                                               target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="https://www.pinterest.com/pin/create/button/?url=http://127.0.0
                                            .1/webLazy/singerBlog/<?= $id ?>"
                                               target="_blank"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Begin Li's Blog Comment Section -->
                            <div class="li-comment-section"
                                 id="listComment">
                                <h3><?php echo (CommentModel::countComment($id)[0] == 0) ? 'No Comment' :
				                        CommentModel::countComment($id)[0] . ' Comment'; ?></h3>
		                        <?php if (CommentModel::countComment($id)[0] == 0) { ?> <img src="./assets/cmm.png"
                                                                                             alt=""
                                                                                             style=""> <?php } ?>
		                        <?php if (CommentModel::countComment($id)[0] > 0) {
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
                                                <label>Full Name</label>
                                                <input name="TenKH"
                                                       type="text"
                                                       class="coment-field"
                                                       value="<?php if (isset($_SESSION['dataCMM']['TenKH'])) {
                                                           echo $_SESSION['dataCMM']['TenKH'];
                                                       } ?>" required placeholder="Name">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Email</label>
                                                <input name="Email" type="email"
                                                       value="<?php if (isset($_SESSION['dataCMM']['Email'])) {
                                                           echo $_SESSION['dataCMM']['Email'];
                                                       } ?>" id="email" class="coment-field" required
                                                       placeholder="Email">
                                            </div>

                                            <div class="col-lg-12">
                                                <br>
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
\webLazy\Core\Session::checkReloadPage([
        'errorCMM_email',
        'errorCMM_captcha',
        'dataCMM'
]);
require_once 'views/Shop/footer.php';

