<div class="header-bottom mb-0 header-sticky stick d-none d-lg-block d-xl-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Begin Header Bottom Menu Area -->
                <div class="hb-menu">
                    <nav>
                        <ul>
                            <li><a href="<?=\webLazy\Core\URL::uri('home')?>">Home</a>
                                <!--                                        <ul class="hb-dropdown">-->
                                <!--                                            <li><a href="index.html">Home One</a></li>-->
                                <!--                                        </ul>-->
                            </li>
                            <li class="dropdown-holder"><a href="<?=\webLazy\Core\URL::uri('showProduct')?>">Shop</a>
                                <ul class="hb-dropdown">
                                    <?php $aLoai=\webLazy\Model\TypeModel::selectAll();
                                    foreach ($aLoai as $value):
                                    ?>
                                    <li class="sub-dropdown-holder"><a href=""><?=$value[1]?></a>
                                        <ul class="hb-dropdown hb-sub-dropdown">
                                            <?php $aProducer = \webLazy\Model\ProducerModel::selectWithIdProducer($value[0]);?>
                                            <?php foreach ($aProducer as $aValues): ?>
                                                <li><a href=""><?= $aValues[1] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="dropdown-holder"><a href="<?=\webLazy\Core\URL::uri('homeBlog')?>">Blog</a>
                                <ul class="hb-dropdown">
                                    <?php $aCategory = \webLazy\Model\CategoryModel::selectAll();
                                    foreach ($aCategory as $value):?>
                                    <li class="sub-dropdown-holder"><a href=""><?= $value[1] ?></a>
                                        <?php $aTypeNews = \webLazy\Model\TypeNewsModel::selectWithIdCategory($value[0]);?>
                                        <ul class="hb-dropdown hb-sub-dropdown">
                                            <?php foreach ($aTypeNews as $aValues): ?>
                                            <li><a href=""><?= $aValues[2] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
<!--                            <li class="catmenu-dropdown megamenu-static-holder"><a href="index.html">Pages</a>-->
<!--                                <ul class="megamenu hb-megamenu">-->
<!--                                    <li><a href="blog-left-sidebar.html">Blog Layouts</a>-->
<!--                                        <ul>-->
<!--                                            <li><a href="blog-2-column.html">Blog 2 Column</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <li class="catmenu-dropdown megamenu-static-holder"><a href="<?=\webLazy\Core\URL::uri('order')?>">Đơn Hàng</a></li>
                            <li><a href="<?=\webLazy\Core\URL::uri('about')?>">About Us</a></li>
                            <li><a href="<?=\webLazy\Core\URL::uri('contact')?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Header Bottom Menu Area End Here -->
            </div>
        </div>
    </div>
</div>