<?php

namespace webLazy\API\Products;

use webLazy\Core\App;
use webLazy\Core\HandleResponse;
use webLazy\Core\Request;
use webLazy\Core\URL;
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
                'hinhAnhSanPham' => "http://192.168.1.12:9021/" . 'assets/upload/' . $imgURL,
                'moTaSanPham'    => the_excerpt($aItem[3]),
                'idLoaiSanPham'  => $aItem[5],
            ];
        }

        echo HandleResponse::success('list product', $aData);
    }

    public function getProduct()
    {
        $aData = [];
        $aProducts = ProductModel::selectIdProduct(Request::uri()[1]);
        if (!empty($aProducts)) {
            $imgURL = (json_decode($aProducts['Anh'], true))[0];
            $aData = [
                'id'             => $aProducts['MaSP'],
                'tenSanPham'     => $aProducts['TenSP'],
                'giaSanPham'     => $aProducts['GiaBan'],
                'hinhAnhSanPham' => App::get('config/app')['HomeURL'] . 'assets/upload/' . $imgURL,
                'moTaSanPham'    => $aProducts['ChiTiet'],
                'idLoaiSanPham'  => $aProducts['MaLoai'],
            ];
        }

        echo HandleResponse::success('list product', $aData);
    }

    public function getProductWithTypeID()
    {
        $aData = [];
        $typeProductID=Request::uri()[1];
        $aProducts = ProductModel::getProductsWithTypeID($typeProductID);
        foreach ($aProducts as $aItem) {
            $imgURL = (json_decode($aItem[6], true))[0];
            $aData[] = [
                'id'             => $aItem[0],
                'tenSanPham'     => $aItem[1],
                'giaSanPham'     => $aItem[4],
                'hinhAnhSanPham' => App::get('config/app')['HomeURL'] . 'assets/upload/' . $imgURL,
                'moTaSanPham'    => $aItem[5],
                'idLoaiSanPham'  => $aItem[3],
            ];
        }

        echo HandleResponse::success('list product', $aData);
    }
}
