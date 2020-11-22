<?php

use webLazy\Core\Request;
use webLazy\Model\CartModel;

require_once 'views/Shop/header.php';
?>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="">Home</a></li>
                    <li class="active">WishList</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div style="color:red;">
                        <?php if (isset($_SESSION['valuesDate'])){ echo $_SESSION['valuesDate'];} ?>
                    </div>
                    <?php
                    if (isset(Request::uri()[1])) {

                        if (empty($_SESSION["cart"])) {
                            $_SESSION["cart"] = array();
                        }
                    }
                    if (isset($_SESSION["wishLish"]) && !empty($_SESSION["wishLish"])) {

                        ?>
                        <form action="" method="post">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="li-product-remove">remove</th>
                                        <th class="li-product-thumbnail">images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="li-product-price">Unit Price</th>
                                        <th class="li-product-add-cart">add to cart</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $id = implode(",", array_keys($_SESSION["wishLish"]));
                                    $key = implode(",", array_keys($_SESSION["wishLish"]));
                                    $sp = CartModel::selectProduct($key);
                                    $sum = 0;
                                    foreach ($sp as $item => $row): ?>
                                        <tr>
                                            <td class="li-product-remove"><a href="<?=\webLazy\Core\URL::uri('deleteWishList'.'/'.$row[0])?>"><i class="fa fa-times"></i></a></td>
                                            <td class="li-product-thumbnail">
                                                <img src="./assets/upload/<?= LoadOneAnh($row[6]) ?>" style="width: 150px;height: 150px" alt="Li's Product Image">
                                            </td>
                                            <td class="li-product-name"><?= $row[1] ?></td>
                                            <td class="li-product-price"><span class="amount"><?= Money($row[4]) ?> đ</span></td>
                                            <td class="li-product-add-cart"><a href="<?=\webLazy\Core\URL::uri('addWishListToCart').'/'.$row[0]?>">add to cart</a></td>
                                        </tr>
                                        <?php
                                    endforeach;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <?php
                    } else {
                        echo "Danh Sách Yêu Thích Chưa Có Sản Phẩm Nào";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
require_once 'views/Shop/footer.php';
