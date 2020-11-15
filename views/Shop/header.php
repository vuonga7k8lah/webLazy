<!doctype html>
<html class="no-js" lang="zxx">

<!-- 40432:14-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SHOP MONEY</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?=\webLazy\Core\URL::uri()?>">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/theme/images/favicon.png">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="./assets/theme/css/material-design-iconic-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/theme/css/font-awesome.min.css">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="./assets/theme/css/fontawesome-stars.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="./assets/theme/css/meanmenu.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="./assets/theme/css/owl.carousel.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="./assets/theme/css/slick.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="./assets/theme/css/animate.css">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="./assets/theme/css/jquery-ui.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="./assets/theme/css/venobox.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="./assets/theme/css/nice-select.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="./assets/theme/css/magnific-popup.css">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="./assets/theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/theme/bootstrap.css">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="./assets/theme/css/helper.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="./assets/theme/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="./assets/theme/css/responsive.css">
    <!-- Modernizr js -->
    <script src="./assets/theme/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./assets/ajax.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Begin Body Wrapper -->
<div class="body-wrapper">
    <!-- Begin Header Area -->
    <header>
        <!-- Begin Header Top Area -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <!-- Begin Header Top Left Area -->
                    <div class="col-lg-3 col-md-4">
                        <div class="header-top-left">
                            <ul class="phone-wrap">
                                <li><span>Telephone Enquiry:</span><a href="#">(+84) 888888888</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top Left Area End Here -->
                    <!-- Begin Header Top Right Area -->
                    <div class="col-lg-9 col-md-8">
                        <div class="header-top-right">
                            <ul class="ht-menu">
                                <!-- Begin Setting Area -->
                                <li>
                                    <div class="ht-setting-trigger"><span>Setting</span></div>
                                    <div class="setting ht-setting">
                                        <ul class="ht-setting-list">
                                            <li><a href="login-register.html">My Account</a></li>
                                            <li><a href="<?=\webLazy\Core\URL::uri('logout')?>">Checkout</a></li>
                                            <li><a href="<?=\webLazy\Core\URL::uri('signIn')?>">Sign In</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <?php if(isset($_SESSION['TenKH'])): ?>
                                <li>
                                    <span class="currency-selector-wrapper">Xin Chào :</span>
                                    <div class="ht-currency-trigger"><span><?=$_SESSION['TenKH']?></span></div>
                                </li>
                                <?php endif; ?>
                                <!-- Setting Area End Here -->
                                <!-- Begin Currency Area -->

                                <!-- Currency Area End Here -->
                                <!-- Begin Language Area -->
                                <!-- Language Area End Here -->
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top Right Area End Here -->
                </div>
            </div>
        </div>
        <!-- Header Top Area End Here -->
        <!-- Begin Header Middle Area -->
        <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
            <div class="container">
                <div class="row">
                    <!-- Begin Header Logo Area -->
                    <div class="col-lg-3">
                        <div class="logo pb-sm-30 pb-xs-30">
                            <a href="<?=\webLazy\Core\URL::uri('home')?>">
                                <img src="./assets/upload/vuongkma.png" alt="" style="width: 250px;height: 100px;border:2px solid black;border-radius: 50%;">
                            </a>
                        </div>
                    </div>
                    <!-- Header Logo Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                        <!-- Begin Header Middle Searchbox Area -->
                        <form action="<?=\webLazy\Core\URL::uri('search')?>" class="hm-searchbox" method="post">
                            <input type="text" name="Search" placeholder="Enter your search key ...">
                            <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <!-- Header Middle Searchbox Area End Here -->
                        <!-- Begin Header Middle Right Area -->
                        <div class="header-middle-right">
                            <ul class="hm-menu">
                                <!-- Begin Header Middle Wishlist Area -->
                                <li class="hm-wishlist">
                                    <a href="<?=\webLazy\Core\URL::uri('wishList')?>">
                                        <span class="cart-item-count wishlist-item-count"></span>
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </li>
                                <!-- Header Middle Wishlist Area End Here -->
                                <!-- Begin Header Mini Cart Area -->
                                <li class="hm-minicart">
                                    <div class="hm-minicart-trigger">
                                        <span class="item-icon"></span>
                                        <span class="item-text">Giỏ Hàng
                                                    <span class="cart-item-count"></span>
                                                </span>
                                    </div>
                                    <span></span>
                                    <div class="minicart">
                                        <div class="minicart-button">
                                            <a href="<?=\webLazy\Core\URL::uri('cart')?>" class="li-button li-button-fullwidth li-button-dark">
                                                <span>Giỏ Hàng</span>
                                            </a>
                                            <a href="<?=\webLazy\Core\URL::uri('order')?>" class="li-button li-button-fullwidth">
                                                <span>Đơn Hàng</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Header Mini Cart Area End Here -->
                            </ul>
                        </div>
                        <!-- Header Middle Right Area End Here -->
                    </div>
                    <!-- Header Middle Right Area End Here -->
                </div>
            </div>
        </div>
        <!-- Header Middle Area End Here -->
        <!-- Begin Header Bottom Area -->
       <?php require_once 'views/Shop/Navigation.php'?>
        <!-- Header Bottom Area End Here -->
        <!-- Begin Mobile Menu Area -->
        <div class="mobile-menu-area d-lg-none d-xl-none col-12">
            <div class="container">
                <div class="row">
                    <div class="mobile-menu">
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area End Here -->
    </header>