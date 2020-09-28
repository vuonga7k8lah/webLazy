<?php
/**
 * @var $oRoute \webLazy\Core\Route ...
 */
//home-shop
$oRoute->get('home', 'webLazy\Controllers\HomeController@loadView');
$oRoute->get('', 'webLazy\Controllers\HomeController@loadView');
$oRoute->get('404', 'webLazy\Controllers\PageNotFoundController@loadView');
$oRoute->get('logout', 'webLazy\Controllers\LogoutHomeController@loadView');
//list san pham
$oRoute->get('showProduct', 'webLazy\Controllers\ShowProductController@loadView');
//chi tiet san pham
$oRoute->get('ctsp', 'webLazy\Controllers\CTSPController@loadView');


//admin-shop
$oRoute->get('admin', 'webLazy\Controllers\AdminController@loadView');
//admin-Product
$oRoute->get('listProduct', 'webLazy\Controllers\ProductController@loadView');
$oRoute->get('addProduct', 'webLazy\Controllers\ProductController@loadAddView');
$oRoute->get('editProduct', 'webLazy\Controllers\ProductController@loadEditView');
$oRoute->get('deleteProduct', 'webLazy\Controllers\ProductController@deleteProduct');
$oRoute->post('addProduct', 'webLazy\Controllers\ProductController@addProduct');
$oRoute->post('editProduct', 'webLazy\Controllers\ProductController@editProduct');
//admin-Producer
$oRoute->get('listProducer', 'webLazy\Controllers\ProducerController@loadView');
$oRoute->get('addProducer', 'webLazy\Controllers\ProducerController@loadAddView');
$oRoute->get('editProducer', 'webLazy\Controllers\ProducerController@loadEditView');
$oRoute->get('deleteProducer', 'webLazy\Controllers\ProducerController@deleteProduct');
$oRoute->post('addProducer', 'webLazy\Controllers\ProducerController@addProduct');
$oRoute->post('editProducer', 'webLazy\Controllers\ProducerController@editProduct');




//SignIn
$oRoute->get('signIn', 'webLazy\Controllers\SignInController@loadView');
$oRoute->get('forgot', 'webLazy\Controllers\ForgotPasswordController@loadView');
$oRoute->get('repass', 'webLazy\Controllers\ForgotPasswordController@loadViewRepass');
$oRoute->post('repass', 'webLazy\Controllers\ForgotPasswordController@updatePassword');
$oRoute->post('forgot', 'webLazy\Controllers\ForgotPasswordController@checkEmail');
$oRoute->post('signInLogin', 'webLazy\Controllers\SignInController@actionLogin');
$oRoute->post('signInRegister', 'webLazy\Controllers\SignInController@actionRegister');


