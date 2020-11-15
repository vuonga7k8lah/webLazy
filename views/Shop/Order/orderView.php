<?php

use webLazy\Core\URL;
use webLazy\Model\OrderModel;

require_once 'views/Shop/header.php';
?>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="">Home</a></li>
                    <li class="active">Order</li>
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
                    <?php
                    if (isset($_SESSION['MaKH'])) {
                        if (OrderModel::selectIdDonHang($_SESSION['MaKH']) === null) {
                            echo "<br>";
                            echo "Bạn Chưa Mua Sản Phẩm Nào";

                        } else {
                            $_SESSION["order"] = OrderModel::selectIdDonHang($_SESSION['MaKH'])['id'];
                        }
                        if (isset($_SESSION["order"]) && $_SESSION["order"] != '') {
                            ?>
                            <form action="" method="post">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="li-product-thumbnail">images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="li-product-price">Unit Price</th>
                                            <th class="li-product-quantity">Quantity</th>
                                            <th class="li-product-subtotal">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $id = $_SESSION["order"];
                                        $sp = OrderModel::selectAll($id)->fetch_all();
                                        $sum = 0;
                                        foreach ($sp as $item => $row):?>
                                            <tr>
                                                <td class="li-product-thumbnail">
                                                    <img src="./assets/upload/<?= LoadOneAnh($row[1]) ?>"
                                                         style="width: 150px;height: 150px" alt="Li's Product Image">
                                                </td>
                                                <td class="li-product-name"><?= $row[0] ?></td>
                                                <td class="li-product-price"><span class="amount"><?= Money($row[2]) ?> đ</span>
                                                </td>
                                                <td class="quantity">
                                                    <?= $row[3] ?>
                                                </td>
                                                <td class="product-subtotal"><span
                                                            class="amount"><?=Money($row[4]=$row[2]*$row[3])?> đ</span>
                                                </td>
                                            </tr>
                                            <?php
                                            $sum += $row[4];
                                        endforeach;
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <input type="hidden" name="Total" value="<?= $sum ?>">
                                                <li>Total <span><?=Money($sum)?> đ</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon2">
                                            </div>
                                            <div><label>Ghi chú: </label><textarea name="note" cols="50"
                                                                                   rows="7"><?= $sp[0][5] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon2">
                                                <label >Thanh Toán Online:</label>
                                                <!-- PayPal Logo -->
                                                <table border='0' cellpadding='10' cellspacing='0' align='center'>
                                                    <tr>
                                                        <td align='center'></td>
                                                    </tr>
                                                    <tr>
                                                        <td align='center'><a
                                                                    href='https://www.paypal.com/vn/webapps/mpp/paypal-popup'
                                                                    title='How PayPal Works'
                                                                    onclick="window.open('https://www.paypal.com/vn/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img
                                                                        src='https://www.paypalobjects.com/marketing/web/vn/manage-my-paypal-account/PP-AcceptanceMarkTray-NoDiscover-243x40-optimised.png'
                                                                        alt='Khay đánh dấu chấp nhận PayPal | Lớn'/></a>
                                                        </td>
                                                    </tr>
                                                </table><!-- PayPal Logo -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <?php
                        }
                    } else {
                        echo "Chưa Đăng Nhập Tài Khoản";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
require_once 'views/Shop/footer.php';
