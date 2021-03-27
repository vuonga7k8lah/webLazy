<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Core\Session;

class WishListController
{
	public function loadView()
	{
		require_once 'views/Shop/WishList/wishListView.php';
	}

	public function actionAddWishList()
	{
		if (isset($_POST['MaSP'])) {
			$_SESSION["wishLish"][$_POST['MaSP']] = 1;
			$aResponse = [
				"isValid" => "yes",
				"msg"     => "Sản Phẩm Đã Được Thêm Vào Danh Sách Yêu Thích",
				'numberSP'=>count($_SESSION["wishLish"])
			];
		}
		echo json_encode($aResponse);
	}

	public function deleteWishList()
	{
		$id = Request::uri()[1];
		unset($_SESSION["wishLish"][$id]);
		Redirect::to('wishList');
	}
	public function AllToCartAjax()
	{
		if (isset($_POST['MaSP'])) {
			$_SESSION["cart"][$_POST['MaSP']] = 1;
			$aResponse = [
				"isValid" => "yes",
				"msg"     => "Sản Phẩm Đã Được Thêm Vào Giỏ Hàng",
				'numberSP'=>count($_SESSION["cart"])
			];
		}
		echo json_encode($aResponse);
	}
	public function addWishListToCart()
	{
		$id = Request::uri()[1];
		$_SESSION["cart"][$id]=1;
		unset($_SESSION["wishLish"][$id]);
		Redirect::to('wishList');
	}
}