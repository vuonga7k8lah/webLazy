<?php require_once 'views/Shop/header.php';

use webLazy\Core\Request;
use webLazy\Core\URL;
use webLazy\Model\ProductModel;
?>
<?php
$id = Request::uri()[1];
$row = ProductModel::selectIdProduct($id);

?>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><?=$row['TenSP']?></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- content-wraper start -->
    <div class="content-wraper">
        <div class="container">
            <div class="row single-product-area">
                <div class="col-lg-5 col-md-6">
                    <!-- Product Details Left -->
                    <div class="product-details-left">
                        <div class="product-details-images slider-navigation-1">
                            <?php $aImg=json_decode($row['Anh']);
                            foreach ($aImg as $value):
                            ?>
                            <div class="lg-image">
                                <a class="popup-img venobox vbox-item" href="./assets/upload/<?=$value?>" data-gall="myGallery">
                                    <img src="./assets/upload/<?=$value?>" style="object-fit: cover;display: block" alt="product
                                    image">
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="product-details-thumbs slider-thumbs-1">
                            <?php $aImg=json_decode($row['Anh']);
                                    foreach ($aImg as $value):?>
                            <div class="sm-image"><img src="./assets/upload/<?=$value?>" alt="product image thumb"
                                                       style="object-fit: cover;display: block"
                                ></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!--// Product Details Left -->
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content pt-60">
                        <div class="product-info">
                            <h2><?=$row['TenSP']?></h2>
                            <span class="product-details-ref">Reference: Admin</span>
                            <div class="rating-box pt-20">
                                <ul class="rating rating-with-review-item">
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <div class="price-box pt-20">
                                <span class="new-price new-price-2"><?= Money($row['GiaBan']) ?> vnđ</span>
                            </div>
                            <div class="product-desc">
                                <p>
                                    <span><?= the_excerpt($row['ChiTiet'], 700) ?></span><br>
                                    <a class="active"
                                       data-toggle="tab"
                                       href="#description"
                                       style="margin-left: 200px"><span style="text-align: center;
                                       color:
                                       #0b97c4">Xem Tiếp...</span></a>
                                </p>
                            </div>
                            <div class="product-variants">
                            </div>
                            <div class="single-add-to-cart">
                                <form action="<?= \webLazy\Core\URL::uri('cart') . '/' . $row['MaSP'] ?>"
                                      method="post"
                                      class="cart-quantity">
                                    <div class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box"
                                                   value="1"
                                                   name="quantity[<?= $row['MaSP'] ?>]"
                                                   type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </div>
                                    <button class="add-to-cart"
                                            type="submit">Add to cart
                                    </button>
                                </form>
                            </div>
                            <div class="product-additional-info pt-25">
                                <!--                                <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a>-->
                                <div class="product-social-sharing pt-25">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google
                                                                                                             +</a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block-reassurance">
                                <ul>
                                    <li>
                                        <div class="reassurance-item">
                                            <div class="reassurance-icon">
                                                <i class="fa fa-check-square-o"></i>
                                            </div>
                                            <p>Security policy (edit with Customer reassurance module)</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="reassurance-item">
                                            <div class="reassurance-icon">
                                                <i class="fa fa-truck"></i>
                                            </div>
                                            <p>Delivery policy (edit with Customer reassurance module)</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="reassurance-item">
                                            <div class="reassurance-icon">
                                                <i class="fa fa-exchange"></i>
                                            </div>
                                            <p> Return policy (edit with Customer reassurance module)</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wraper end -->
    <!-- Begin Product Area -->
    <div class="product-area pt-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="li-product-tab">
                        <ul class="nav li-product-menu">
                            <li><a class="active"
                                   data-toggle="tab"
                                   href="#description"><span>Description</span></a></li>
                            <li><a data-toggle="tab"
                                   href="#reviews"><span>Reviews</span></a></li>
                        </ul>
                    </div>
                    <!-- Begin Li's Tab Menu Content Area -->
                </div>
            </div>
            <div class="tab-content">
                <div id="description"
                     class="tab-pane active show"
                     role="tabpanel">
                    <div class="product-description">
                        <span><?= $row['ChiTiet'] ?></span>
                    </div>
                </div>
                <div id="reviews"
                     class="tab-pane"
                     role="tabpanel">
                    <div class="product-reviews">
                        <div class="product-details-comment-block">
							<?php if (\webLazy\Model\CommentModel::countCommentProduct($row['MaSP'])[0] > 0): ?>
                                <div class="li-comment-section">
                                    <ul>
										<?php
										$i = 1;
										foreach (\webLazy\Model\CommentModel::countCommentProduct($row['MaSP'])[1] as
										         $value):
											if (($i % 2) == 0) {
												?>
                                                <li class="comment-children">
                                                    <div class="comment-body pl-15">
                                                        <h5 class="comment-author pt-15"><?= $value[2] ?></h5>
                                                        <div class="comment-post-date">
															<?= $value[6] ?>
                                                        </div>
                                                        <p>
															<?= $value[4] ?>
                                                        </p>
                                                    </div>
                                                </li>
												<?php
											} else {
												?>
                                                <li>
                                                    <div class="comment-body pl-15">
                                                        <h5 class="comment-author pt-15"><?= $value[2] ?></h5>
                                                        <div class="comment-post-date">
															<?= $value[6] ?>
                                                        </div>
                                                        <p>
															<?= $value[4] ?>
                                                        </p>
                                                    </div>
                                                </li>
												<?php
											}
											$i++;
											?>
										<?php endforeach; ?>
                                    </ul>
                                </div>
							<?php endif; ?>
                            <div class="review-btn">
                                <a class="review-links" id="edenOpenModal" href="#" >Write Your Review!</a>
                            </div>
                            <!-- Begin Quick View | Modal Area -->
                            <div class="modal fade modal-wrapper"
                                 id="edenModal"
                                 style="background: #ccc">
                                <div id="edenContent"
                                     class="modal-dialogg modal-dialog-centered"
                                     style="display:
                                flex; align-items: center;justify-content: center">
                                    <a style="position: absolute; top: 0;left: 0;bottom: 0;right: 0;
                                    z-index: 1;"
                                       id="edenCloseModal"
                                       href="#">

                                    </a>
                                    <div class="modal-content"
                                         style="max-width: 1000px;position: relative;z-index: 2">

                                        <div class="modal-body">
                                            <h3 class="review-page-title">Write Your Review</h3>
                                            <div class="modal-inner-area row">
                                                <div class="col-lg-6">
                                                    <div class="li-review-product">
														<?php $aImg = json_decode($row['Anh']); ?>
                                                        <img src="./assets/upload/<?= $aImg[0] ?>"
                                                             alt="Li's
                                                            Product"
                                                             style="width: 300px;height: 300px">
                                                        <div class="li-review-product-desc">
                                                            <h3 class="li-product-name"
                                                                style="font-size: 20px"><?= $row['TenSP'] ?></h3>
                                                            <p>
                                                                <span><?= the_excerpt($row['ChiTiet'], 700) ?></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="li-review-content">
                                                        <!-- Begin Feedback Area -->
                                                        <div class="feedback-area">
                                                            <div class="feedback">
                                                                <h3 class="feedback-title">Our Feedback</h3>
                                                                <form method="post">
                                                                    <input type="hidden"
                                                                           name="MaSP"
                                                                           value="<?= $row['MaSP'] ?>">
                                                                    <p class="your-opinion">
                                                                        <label>Your Rating</label>
                                                                        <span>
                                                                                    <select class="star-rating"
                                                                                            name="rating">
                                                                                      <option value="1">1</option>
                                                                                      <option value="2">2</option>
                                                                                      <option value="3">3</option>
                                                                                      <option value="4">4</option>
                                                                                      <option value="5">5</option>
                                                                                    </select>
                                                                                </span>
                                                                    </p>
                                                                    <p class="feedback-form">
                                                                        <label for="feedback">Your Review</label>
                                                                        <textarea id="feedback"
                                                                                  name="content"
                                                                                  cols="45"
                                                                                  rows="8"
                                                                                  aria-required="true"></textarea>
                                                                    </p>
                                                                    <div class="feedback-input">
                                                                        <p class="feedback-form-author">
                                                                            <label for="author">Name<span class="required">*</span>
                                                                            </label>
                                                                            <input id="author"
                                                                                   name="name"
                                                                                   value="<?= isset($_SESSION['TenKH']) ?
																				       $_SESSION['TenKH'] : '' ?>"
                                                                                   size="30"
                                                                                   aria-required="true"
                                                                                   type="text">
                                                                        </p>
                                                                        <p class="feedback-form-author feedback-form-email">
                                                                            <label for="email">Email<span class="required">*</span>
                                                                            </label>
                                                                            <input id="email"
                                                                                   name="email"
                                                                                   value="<?= isset($_SESSION['Email']) ?
																				       $_SESSION['Email'] : '' ?>"
                                                                                   size="30"
                                                                                   aria-required="true"
                                                                                   type="text">
                                                                            <span class="required"><sub>*</sub> Required fields</span>
                                                                        </p>
                                                                        <div class="feedback-btn pb-15">
                                                                            <button id="formSubmit">Gửi
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- Feedback Area End Here -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Quick View | Modal Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->
    <!-- Begin Li's Laptop Product Area -->
    <section class="product-area li-laptop-product pt-30 pb-50">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">

                        <h2>
                            <span>Các Sản Phẩm Cùng Hãng:</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
							<?php
							$aDataSP = \webLazy\Model\SearchModel::searchProducerMenu($row['MaNSX']);
							foreach ($aDataSP as $value):
								?>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="<?= URL::uri('ctsp') . '/' . $value[0] ?>">
                                                <img src="./assets/upload/<?= LoadOneAnh($value[4]) ?>"
                                                     style="width: 200px;height: 200px"
                                                     alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">Hot</span>
                                        </div>
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
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name"
                                                       href="<?= URL::uri('ctsp') . '/' .
												       $value[0] ?>"><?= $value[1] ?></a></h4>
                                                <div class="price-box">
                                                    <span class="new-price"><?= Money($value[2]); ?> vnđ</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active">
                                                        <button style="width: 120px;"
                                                                data-id="<?= $value[0] ?>"
                                                                onclick="const id = this.getAttribute('data-id');addToCard(id); ">
                                                            Add to cart
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button style="width: 33px;"
                                                                class="links-details"
                                                                data-id="<?= $value[0] ?>"
                                                                onclick="const id = this.getAttribute('data-id');
                                                                addToWishList(id); ">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li><a href="#"
                                                           title="quick view"
                                                           class="quick-view-btn"
                                                           data-toggle="modal"
                                                           data-target="#exampleModalCenter"><i
                                                                    class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>
    <!-- Li's Laptop Product Area End Here -->
    <!-- Begin Footer Area -->
<?php require_once 'views/Shop/footer.php' ?>