<?php


namespace webLazy\Controllers;


use webLazy\Model\SearchModel;

class SearchController
{
    public function loadView()
    {
        require_once 'views/Shop/Searchs/searchView.php';
    }

    public function menuView()
    {
        require_once 'views/Shop/Searchs/SearchMenuView.php';
    }

    public function searchProducer()
    {
        require_once 'views/Shop/Searchs/SearchProducerView.php';
    }
}