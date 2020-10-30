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
        <?php use webLazy\Core\URL;
        use webLazy\Model\CategoryModel;
        use webLazy\Model\NewsModel;
        use webLazy\Model\TypeNewsModel;

        $aCategory = CategoryModel::selectAll();
        foreach ($aCategory as $value): ?>
            <div class="li-blog-sidebar pt-25">
                <h4 class="li-blog-sidebar-title"><?= $value[1] ?></h4>
                <ul class="li-blog-archive">
                    <?php $aTypeNews = TypeNewsModel::selectWithIdCategory($value[0]);
                    foreach ($aTypeNews as $aValues): ?>
                        <li><a href=""><?= $aValues[2] ?>
                                (<?php echo NewsModel::selectCountNew($aValues[0]) ?>)</a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
        <div class="li-blog-sidebar">
            <h4 class="li-blog-sidebar-title">Popular View Last Week</h4>
            <?php foreach (NewsModel::popularPostCouview() as $value): ?>
                <div class="li-recent-post pb-30">
                    <div class="li-recent-post-thumb" style="width: 100px;height: 120px; ">
                        <a href="<?= URL::uri('singerBlog') . '/' . $value[0] ?>">
                            <?php $imgNav = json_decode($value[5], true); ?>
                            <img style="width: 63px;height: 63px; margin-top: 20px;margin-left: 3px;" class="img-full"
                                 src="./assets/upload/News/<?= $imgNav[1] ?>"
                                 alt="Li's Product Image">
                        </a>
                    </div>
                    <div class="li-recent-post-des">
                        <span><a href="<?= URL::uri('singerBlog') . '/' . $value[0] ?>"><?= $value[2] ?></a></span>
                        <span class="li-post-date"><?= $value[8] ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>