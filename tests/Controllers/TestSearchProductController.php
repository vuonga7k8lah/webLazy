<?php

namespace webLazyTests\Controllers;

use PHPUnit\Framework\TestCase;
use webLazy\Core\App;
use webLazy\Model\SearchModel;

class TestSearchProductController extends TestCase
{
    private $nameProduct = 'iphone';

    public function testSearchProduct(): bool
    {
        $this->setUpInit();
        $aResponse = SearchModel::searchProduct($this->nameProduct);
        //Kiểm tra dữ liệu trả về là 1 mảng
        $this->assertIsArray($aResponse);
        foreach ($aResponse as $aProduct) {
            // kiểm tra xem tư khoá có thuộc trong tên sản phẩn trả về hay k
            $this->assertEmpty(strpos($aProduct[1],$this->nameProduct) !== false);
        }
        $this->assertCount(2, $aResponse);
        return true;
    }

    public function setUpInit(): bool
    {
        include getcwd() . '/function/validate.php';
        App::bind('config/app', require_once "config/app.php");
        return true;
    }
}
