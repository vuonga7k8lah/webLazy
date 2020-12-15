<div class="header-bottom mb-0 header-sticky stick d-none d-lg-block d-xl-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Begin Header Bottom Menu Area -->
                <div class="hb-menu">
                    <nav>
                        <ul>
                            <li><a href="<?=\webLazy\Core\URL::uri('home')?>">Home</a>
                            </li>
                            <li class="dropdown-holder"><a href="<?=\webLazy\Core\URL::uri('showProduct')?>">Shop</a>
                                <ul class="hb-dropdown">
                                    <?php $aLoai=\webLazy\Model\TypeModel::selectAll();
                                    foreach ($aLoai as $value):
                                    ?>
                                    <li class="sub-dropdown-holder"><a href="<?=\webLazy\Core\URL::uri('search').'/'.$value[0]?>"><?=$value[1]?></a>
                                        <ul class="hb-dropdown hb-sub-dropdown">
                                            <?php $aProducer = \webLazy\Model\ProducerModel::selectWithIdProducer($value[0]);?>
                                            <?php foreach ($aProducer as $aValues): ?>
                                                <li><a href="<?=\webLazy\Core\URL::uri('searchProducer').'/'.$aValues[0]?>"><?= $aValues[1] ?></a></li>
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
                                    <li class="sub-dropdown-holder"><a href="<?=\webLazy\Core\URL::uri('searchTypeNews').'/'.$value[0]?>"><?= $value[1] ?></a>
                                        <?php $aTypeNews = \webLazy\Model\TypeNewsModel::selectWithIdCategory($value[0]);?>
                                        <ul class="hb-dropdown hb-sub-dropdown">
                                            <?php foreach ($aTypeNews as $aValues): ?>
                                            <li><a href="<?=\webLazy\Core\URL::uri('searchTypeNews1').'/'
                                                .$aValues[0]?>"><?=
                                                    $aValues[2] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
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