<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Core\Session;
use webLazy\Model\BannerModel;

class BannerController
{
    public function loadView()
    {
        require_once 'views/Admin/Banner/listBannerView.php';
    }

    public function loadAddView()
    {
        require_once 'views/Admin/Banner/addBannerView.php';
    }
    public function addBanner()
    {
        $data=$_POST;
        $data['Anh']=uploadIMGBanner($_FILES['Images']);
        if (BannerModel::insertBanner($data)) {
            Redirect::to('listBanner');
        }
    }

    public function actionShow()
    {
        $id=Request::uri()[1];
        if (BannerModel::updateHienBanner($id)) {
            Redirect::to('listBanner');
        }

    }
    public function actionShowHidden()
    {
        $id=Request::uri()[1];
        if (BannerModel::updateAnBanner($id)) {
            Redirect::to('listBanner');
        }

    }

    public function deleteBanner()
    {
        $id = Request::uri()[1];
        if (BannerModel::deleteBanner($id)) {
            Session::set('success_deleteBanner', 'Banner Đã Dc xóa');
            Redirect::to('listBanner');
        }
    }

}