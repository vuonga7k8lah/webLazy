<?php use webLazy\Core\Request;
use webLazy\Core\URL;
use webLazy\Model\ProductModel;

require_once 'views/Shop/header.php' ?>
<?php
$sosp = 8;
if (!isset(Request::uri()[1])) {
    $current_page = 1;
} else {
    $current_page = Request::uri()[1]; //Trang hiện tại
}
$offset = ($current_page - 1) * $sosp;
$totalRecords = ProductModel::countProduct();
$sotrang = ceil($totalRecords / $sosp);
$row = ProductModel::selectAllHome($offset);

?>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="">Home</a></li>
                    <li class="active">List Product</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Login Content Area -->

    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Li's Content Wraper Area -->
    <div class="content-wraper pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Li's Banner Area -->
                    <div class="single-banner shop-page-banner">
                        <a href="#">
                            <img src="./assets/theme/images/bg-banner/2.jpg" alt="Li's Static Banner">
                        </a>
                    </div>
                    <!-- Li's Banner Area End Here -->
                    <!-- shop-top-bar start -->
                    <div class="shop-top-bar mt-30">
                        <div class="shop-bar-inner">
                            <div class="product-view-mode">
                                <!-- shop-item-filter-list start -->
                                <ul class="nav shop-item-filter-list" role="tablist">
                                    <li class="active" role="presentation"><a aria-selected="true" class="active show"
                                                                              data-toggle="tab" role="tab"
                                                                              aria-controls="grid-view"
                                                                              href="#grid-view"><i class="fa fa-th"></i></a>
                                    </li>
                                </ul>
                                <!-- shop-item-filter-list end -->
                            </div>
                            <div class="toolbar-amount">
                                <span>Showing 1 to 8 Product</span>
                            </div>
                        </div>
                        <!-- product-select-box start -->
                        <div class="product-select-box">
                            <div class="product-short">
                                <p>Sort By:</p>
                                <select class="nice-select">
                                    <option value="trending">Relevance</option>
                                    <option value="sales">Name (A - Z)</option>
                                    <option value="sales">Name (Z - A)</option>
                                    <option value="rating">Price (Low &gt; High)</option>
                                    <option value="date">Rating (Lowest)</option>
                                    <option value="price-asc">Model (A - Z)</option>
                                    <option value="price-asc">Model (Z - A)</option>
                                </select>
                            </div>
                        </div>
                        <!-- product-select-box end -->
                    </div>
                    <!-- shop-top-bar end -->
                    <!-- shop-products-wrapper start -->
                    <div class="shop-products-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                <div class="product-area shop-product-area">
                                    <div class="row">
                                        <?php foreach ($row as $key => $value): ?>
                                            <div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="<?= URL::uri('ctsp') . '/' . $value[0] ?>">
                                                            <img src="./assets/upload/<?= LoadOneAnh($value[4]) ?>"
                                                                 style="width: 270px;height: 270px"
                                                                 alt="Li's Product Image">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <h4><a class="product_name"
                                                                   href="<?= URL::uri('ctsp') . '/' .
			                                                       $value[0] ?>"><?= $value[1] ?></a>
                                                            </h4>
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
                            <div class="paginatoin-area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul class="pagination-box">
                                            <?php if ($current_page != 1) {
                                                $i = $current_page - 1; ?>
                                                <li><a class="Previous" href="<?= URL::uri('showProduct') . '/' . $i ?>">Previous</a>
                                                </li>
                                            <?php } ?>
                                            <?php for ($i = 1; $i <= $sotrang; $i++): ?>
                                                <li class="<?php echo $i == $current_page ? "active" : "" ?>"><a
                                                            href="<?= URL::uri('showProduct') . '/' . $i ?>">
                                                        <?= $i ?></a></li>
                                            <?php endfor; ?>
                                            <?php if ($current_page != $sotrang) {
                                                $i = $current_page + 1; ?>
                                                <li><a class="Next"
                                                       href="<?= URL::uri('showProduct') . '/' . $i ?>">Next</a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop-products-wrapper end -->
                </div>
            </div>
        </div>
    </div>
<?php require_once 'views/Shop/footer.php' ?>