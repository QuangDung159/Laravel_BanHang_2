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
    Route::get('/add-product-to-cart/{productId}/{productTypeId}', Constant::CONTROLLER_CART . 'addProductToCartFromProductType');
    Route::get('/add-product-to-cart-from-detail/{productId}', Constant::CONTROLLER_CART . 'addProductToCartFromDetail');
    Route::get('/cart', Constant::CONTROLLER_CART . 'showCartPage');
    Route::get('/cart/{itemId}', Constant::CONTROLLER_CART . 'removeItemFromCart');
    Route::get('/sign-in', Constant::CONTROLLER_CUSTOMER . 'showSignInPage');
    Route::post('/sign-in', Constant::CONTROLLER_CUSTOMER . 'doSignIn');
    Route::get('/sign-up', Constant::CONTROLLER_CUSTOMER . 'showSignUpPage');
    Route::post('/sign-up', Constant::CONTROLLER_CUSTOMER . 'doSignUp');
    Route::get('/sign-out', Constant::CONTROLLER_CUSTOMER . 'doSignOut');
});

