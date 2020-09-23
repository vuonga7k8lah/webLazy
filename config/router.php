<?php
/**
 * @var $oRoute \webLazy\Core\Route ...
 */
//home-shop
$oRoute->get('home', 'webLazy\Controllers\HomeController@loadView');
$oRoute->get('', 'webLazy\Controllers\HomeController@loadView');
$oRoute->get('404', 'webLazy\Controllers\PageNotFoundController@loadView');
$oRoute->get('logout', 'webLazy\Controllers\LogoutHomeController@loadView');
//admin-shop
$oRoute->get('admin', 'webLazy\Controllers\AdminController@loadView');
//SignIn
$oRoute->get('signIn', 'webLazy\Controllers\SignInController@loadView');
$oRoute->post('signInLogin', 'webLazy\Controllers\SignInController@actionLogin');
$oRoute->post('signInRegister', 'webLazy\Controllers\SignInController@actionRegister');
