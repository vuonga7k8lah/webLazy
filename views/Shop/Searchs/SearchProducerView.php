<?php

use webLazy\Core\Request;
use webLazy\Core\URL;
use webLazy\Model\ProductModel;
use webLazy\Model\SearchModel;
$id=Request::uri()[1];
$row = SearchModel::searchProducerMenu($id);
require_once 'views/Shop/header.php' ?>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="">Home</a></li>
                    <li class="active">Search</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-wraper pt-60 pb-60">
        <div class="container">
            <div class="row">
                <?php if(empty($row)){ echo "Chưa Có Sản Phẩm Nào";}else{?>
                <div class="col-lg-12">
                    <!-- Begin Li's Banner Area -->
                    <div class="single-banner shop-page-banner">
                        <a href="#">
                            <img src="./assets/theme/images/bg-banner/2.jpg" alt="Li's Static Banner">
                        </a>
                    </div>
                    <div class="shop-products-wrapper">
                        <div class="tab-content">
                            <div class="tab-pane product-list-view fade active show">
                                <?php
                                foreach ($row as $key => $value): ?>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row product-layout-list">
                                                <div class="col-lg-3 col-md-5 ">
                                                    <div class="product-image">
                                                        <a href="<?= URL::uri('ctsp') . '/' . $value[0] ?>">
                                                            <img src="./assets/upload/<?= LoadOneAnh($value[4]) ?>"
                                                                 style="width: 270px;height: 270px"
                                                                 alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-7">
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="">Graphic Corner</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i>
                                                                        </li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name"
                                                                   href="<?= URL::uri('ctsp') . '/' . $value[0] ?>"><?= $value[1] ?></a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price"><?= Money($value[2]); ?> vnđ</span>
                                                            </div>
                                                            <p><?= the_excerpt($value[3]) ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="shop-add-action mb-xs-30">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart"><a href="">Add to cart</a></li>
                                                            <li class="wishlist"><a href="wishlist.html"><i
                                                                        class="fa fa-heart-o"></i>Add to
                                                                    wishlist</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- shop-products-wrapper end -->
                </div>
                <?php }?>
            </div>
        </div>
    </div>
<?php require_once 'views/Shop/footer.php' ?>