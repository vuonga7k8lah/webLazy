<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Session;
use webLazy\Core\URL;
use webLazy\Model\CartModel;

class CartController
{
    public function loadView()
    {
        require_once 'views/Shop/Cart/cartView.php';
    }
    public function cartAction()
    {
        if (isset($_POST['update_click'])) {
            $aSession = $_POST['quantity'];
            $_SESSION['cart'] = array();
            foreach ($aSession as $key => $value) {
                $_SESSION['cart'][$key] = $value;
            }
            header('location:' . URL::uri('cart'));
        } else {
            if (isset($_SESSION['MaKH'])) {
                if((empty($_POST['SDT']) || empty($_POST['DiaChiNhan']))){
                    Session::set('valuesDate',"Hãy Điền Thông Tin Để Xác Nhận");
                    Redirect::to('cart');
                }

                if ($_POST['order_click']) { //Đặt hàng sản phẩm
                    if (empty($_POST['quantity'])) {
                        echo "Giỏ hàng rỗng";
                    }
                    $error = false;
                    if ($error == false && !empty($_POST['quantity'])) { //Xử lý lưu giỏ hàng vào db
                        $data = $_POST;
                        $data['MaKH'] = $_SESSION['MaKH'];
                        $insertOrder = CartModel::insertOrder($data);
                        $data['id_donhang'] = CartModel::selectIdDonHang($data['MaKH'])['id'];
                        $adata = array();
                        foreach ($data['quantity'] as $key => $value) {
                            $data['price'] = CartModel::selectGiaSanPham($key)['GiaBan'];
                            $data['MaSP']=(string) $key;
                            $data['quantity']=$value;
                            unset($data['order_click']);
                            unset($data['Total']);
                            unset($data['note']);
                            unset($data['MaKH']);
                            unset($data['DiaChiNhan']);
                            unset($data['SDT']);
                            $adata[]=$data;
                        }
                        $insertDonHangPhu=CartModel::insertHoaDonphu($adata);
                        $_SESSION['order']=$data['id_donhang'];
                        unset($_SESSION['cart']);
                        unset($_SESSION['valuesDate']);
                        header('location:'.URL::uri('order'));
                    }
                }
            } else {
                Session::set('isLoginCart',"Bạn Hãy Đăng Nhập Tài Khoản Để Đặt Hàng");
                header('location:' . URL::uri('signIn'));
            }
        }
    }
}