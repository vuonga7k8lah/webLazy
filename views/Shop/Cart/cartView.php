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
                    <li class="active">Shopping Cart</li>
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
                        foreach ($_POST['quantity'] as $id => $quantity) {
                            $_SESSION["cart"][$id] = $quantity;
                        }
                    }
                    if (isset($_SESSION["cart"])) {
                        ?>
                        <form action="<?=\webLazy\Core\URL::uri('cartAction')?>" method="post">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="li-product-remove">remove</th>
                                        <th class="li-product-thumbnail">images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="li-product-price">Unit Price</th>
                                        <th class="li-product-quantity">Quantity</th>
                                        <th class="li-product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $id = implode(",", array_keys($_SESSION["cart"]));
                                    $key = implode(",", array_keys($_SESSION["cart"]));
                                    $sp = CartModel::selectProduct($key);
                                    $sum = 0;
                                    foreach ($sp as $item => $row): ?>
                                    <tr>
                                        <td class="li-product-remove"><a href="<?=\webLazy\Core\URL::uri('deleteCart'.'/'.$row[0])?>"><i class="fa fa-times"></i></a></td>
                                        <td class="li-product-thumbnail">
                                            <img src="./assets/upload/<?= LoadOneAnh($row[6]) ?>" style="width: 150px;height: 150px" alt="Li's Product Image">
                                        </td>
                                        <td class="li-product-name"><?= $row[1] ?></td>
                                        <td class="li-product-price"><span class="amount"><?= Money($row[4]) ?> đ</span></td>
                                        <td class="quantity">
                                            <label>Quantity</label>
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" value="<?=$_SESSION["cart"][$row[0]]?>" name="quantity[<?= $row[0] ?>]"/>
                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount"><?= Money($sum1=$_SESSION["cart"][$row[0]]*$row[4]); ?> đ</span></td>
                                    </tr>
                                    <?php
                                    $sum +=$sum1;
                                    endforeach;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon2">
                                            <input class="button" name="update_click" value="Update cart" type="submit">
                                        </div>
                                        <br>
                                        <div><label for="nhan">Số Điện Thoại Nhận:</label><input type="text" name="SDT" ></div>
                                        <div><label for="nhan">Địa Chỉ Nhận:</label><input type="text" name="DiaChiNhan" ></div>
                                        <div><label>Ghi chú: </label><textarea name="note" cols="50" rows="7"></textarea></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <input type="hidden" name="Total" value="<?=$sum?>">
                                            <li>Total <span><?=Money($sum)?> đ</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon2">
                                            <input class="button" name="order_click" value="Đặt Hàng" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                    } else {
                        echo "giỏ hàng chưa có sản phẩm";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
require_once 'views/Shop/footer.php';
