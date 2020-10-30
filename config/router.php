<?php
/**
 * @var $oRoute \webLazy\Core\Route ...
 */
//home-shop
$oRoute->get('home', 'webLazy\Controllers\HomeController@loadView');
$oRoute->get('', 'webLazy\Controllers\HomeController@loadView');
$oRoute->get('404', 'webLazy\Controllers\PageNotFoundController@loadView');
$oRoute->get('logout', 'webLazy\Controllers\LogoutHomeController@loadView');
$oRoute->get('logoutAdmin', 'webLazy\Controllers\LogoutHomeController@logoutAdmin');
//list san pham
$oRoute->get('showProduct', 'webLazy\Controllers\ShowProductController@loadView');
//chi tiet san pham
$oRoute->get('ctsp', 'webLazy\Controllers\CTSPController@loadView');
//contact-shop
$oRoute->get('contact', 'webLazy\Controllers\ContactController@loadView');
$oRoute->post('contact', 'webLazy\Controllers\ContactController@actionContact');
//about us-shop
$oRoute->get('about', 'webLazy\Controllers\AboutController@loadView');
//cart-shop
$oRoute->get('cart', 'webLazy\Controllers\CartController@loadView');
$oRoute->get('deleteCart', 'webLazy\Controllers\LogoutHomeController@deleteCart');
$oRoute->post('cart', 'webLazy\Controllers\CartController@loadView');
$oRoute->post('cartAction', 'webLazy\Controllers\CartController@cartAction');
//order-shop
$oRoute->get('order', 'webLazy\Controllers\OrderController@loadView');


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
$oRoute->get('deleteProducer', 'webLazy\Controllers\ProducerController@deleteProducer');
$oRoute->post('addProducer', 'webLazy\Controllers\ProducerController@addProducer');
$oRoute->post('editProducer', 'webLazy\Controllers\ProducerController@editProducer');
//admin-Type
$oRoute->get('listType', 'webLazy\Controllers\TypeController@loadView');
$oRoute->get('addType', 'webLazy\Controllers\TypeController@loadAddView');
$oRoute->get('editType', 'webLazy\Controllers\TypeController@loadEditView');
$oRoute->get('deleteType', 'webLazy\Controllers\TypeController@deleteType');
$oRoute->post('addType', 'webLazy\Controllers\TypeController@addType');
$oRoute->post('editType', 'webLazy\Controllers\TypeController@editType');
//admin-users
$oRoute->get('listUser', 'webLazy\Controllers\UserController@loadView');
$oRoute->get('addUser', 'webLazy\Controllers\UserController@loadAddView');
$oRoute->get('editUser', 'webLazy\Controllers\UserController@loadEditView');
$oRoute->get('deleteUser', 'webLazy\Controllers\UserController@deleteUser');
$oRoute->post('addUser', 'webLazy\Controllers\UserController@addUser');
$oRoute->post('editUser', 'webLazy\Controllers\UserController@editUser');
//admin-Banner
$oRoute->get('listBanner', 'webLazy\Controllers\BannerController@loadView');
$oRoute->get('addBanner', 'webLazy\Controllers\BannerController@loadAddView');
$oRoute->get('deleteBanner', 'webLazy\Controllers\BannerController@deleteBanner');
$oRoute->post('addBanner', 'webLazy\Controllers\BannerController@addBanner');
$oRoute->get('show', 'webLazy\Controllers\BannerController@actionShow');
$oRoute->get('hidden', 'webLazy\Controllers\BannerController@actionShowHidden');
//Order-admin
$oRoute->get('listOrderAdmin', 'webLazy\Controllers\OrderAdminController@loadView');
$oRoute->get('printOrderAdmin', 'webLazy\Controllers\OrderAdminController@printOrderAdmin');
$oRoute->get('deleteOrderAdmin', 'webLazy\Controllers\OrderAdminController@deleteOrderAdmin');
//Login-admin
$oRoute->get('login', 'webLazy\Controllers\LoginAdminController@loadView');
$oRoute->post('login', 'webLazy\Controllers\LoginAdminController@actionLogin');

//admin-thể loại
$oRoute->get('listCategory', 'webLazy\Controllers\CategoryController@loadView');
$oRoute->get('addCategory', 'webLazy\Controllers\CategoryController@loadAddView');
$oRoute->get('editCategory', 'webLazy\Controllers\CategoryController@loadEditView');
$oRoute->post('addCategory', 'webLazy\Controllers\CategoryController@addCategory');
$oRoute->post('editCategory', 'webLazy\Controllers\CategoryController@editCategory');
$oRoute->get('deleteCategory', 'webLazy\Controllers\CategoryController@deleteCategory');

//admin-loai tin tuc
$oRoute->get('listTypeNews', 'webLazy\Controllers\TypeNewsController@loadView');
$oRoute->get('addTypeNews', 'webLazy\Controllers\TypeNewsController@loadAddView');
$oRoute->get('editTypeNews', 'webLazy\Controllers\TypeNewsController@loadEditView');
$oRoute->post('addTypeNews', 'webLazy\Controllers\TypeNewsController@addTypeNews');
$oRoute->post('editTypeNews', 'webLazy\Controllers\TypeNewsController@editTypeNews');
$oRoute->get('deleteTypeNews', 'webLazy\Controllers\TypeNewsController@deleteTypeNews');
//admin-tin tuc
$oRoute->get('listNews', 'webLazy\Controllers\NewsController@loadView');
$oRoute->get('addNews', 'webLazy\Controllers\NewsController@loadAddView');
$oRoute->get('editNews', 'webLazy\Controllers\NewsController@loadEditView');
$oRoute->post('addNews', 'webLazy\Controllers\NewsController@addNews');
$oRoute->post('editNews', 'webLazy\Controllers\NewsController@editNews');
$oRoute->get('deleteNews', 'webLazy\Controllers\NewsController@deleteNews');

//dashboard--admin
$oRoute->get('dashboard', 'webLazy\Controllers\DashboardController@loadView');

//SignIn
$oRoute->get('signIn', 'webLazy\Controllers\SignInController@loadView');
$oRoute->get('forgot', 'webLazy\Controllers\ForgotPasswordController@loadView');
$oRoute->get('repass', 'webLazy\Controllers\ForgotPasswordController@loadViewRepass');
$oRoute->post('repass', 'webLazy\Controllers\ForgotPasswordController@updatePassword');
$oRoute->post('forgot', 'webLazy\Controllers\ForgotPasswordController@checkEmail');
$oRoute->post('signInLogin', 'webLazy\Controllers\SignInController@actionLogin');
$oRoute->post('signInRegister', 'webLazy\Controllers\SignInController@actionRegister');
//blog
$oRoute->get('homeBlog', 'webLazy\Controllers\BlogController@loadView');
$oRoute->get('deleteCMM', 'webLazy\Controllers\BlogController@deleteComment');
$oRoute->get('singerBlog', 'webLazy\Controllers\BlogController@loadSingerView');
$oRoute->post('commentCaptcha', 'webLazy\Controllers\BlogController@isCaptchaExits');
$oRoute->post('commentEmail', 'webLazy\Controllers\BlogController@isEmailExits');
$oRoute->post('comment', 'webLazy\Controllers\BlogController@actionComment');

