<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Constant;

Route::group([], function () {
    Route::get('/', Constant::CONTROLLER_PAGE . 'showIndexPage');
    Route::get('/product-by-type/{productTypeId}', Constant::CONTROLLER_PAGE . 'showProductByTypePage');
    Route::get('/product/{productId}', Constant::CONTROLLER_PAGE . 'showProductDetailPage');
    Route::get('/contact', Constant::CONTROLLER_PAGE . 'showContactPage');
    Route::get('/about', Constant::CONTROLLER_PAGE . 'showAboutPage');
    Route::get('/add-product-to-cart/{productId}', Constant::CONTROLLER_CART . 'addProductToCartFromHome');
});

