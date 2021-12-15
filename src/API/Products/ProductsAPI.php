<?php

namespace webLazy\API\Products;

use webLazy\Core\App;
use webLazy\Core\HandleResponse;
use webLazy\Model\ProductModel;

class ProductsAPI
{
	public function getProducts()
	{
		$aData = [];
		$aProducts = ProductModel::selectAll();
		$i = 1;
		foreach ($aProducts as $aItem) {
			$imgURL = (json_decode($aItem[4], true))[0];
			$aData[] = [
				'id'             => $aItem[0],
				'tenSanPham'     => $aItem[1],
				'giaSanPham'     => $aItem[2],
				'hinhAnhSanPham' => App::get('config/app')['HomeURL'] . 'assets/upload/' . $imgURL,
				'moTaSanPham'    => the_excerpt($aItem[3]),
				'idLoaiSanPham'  => $aItem[5],
			];
			if ($i > 4) {
				break;
			}
			$i++;
		}

		echo HandleResponse::success('list product', $aData);
	}
}