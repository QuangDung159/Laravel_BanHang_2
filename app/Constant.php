<?php

namespace App;

class Constant
{
    const URL_INDEX = '/';
    const URL_CART = '/cart';
    const URL_SIGN_IN = '/sign-in';
    const URL_SIGN_UP = '/sign-up';
    const URL_PRODUCT_DETAIL = '/product';

    const PATH_INDEX = 'pages.home';
    const PATH_PRODUCT_BY_TYPE = 'pages.product-by-type';
    const PATH_PRODUCT_DETAIL = 'pages.product-detail';
    const PATH_CONTACT = 'pages.contact';
    const PATH_ABOUT = 'pages.about';
    const PATH_CART = 'pages.cart';
    const PATH_SIGN_IN = 'pages.sign-in';
    const PATH_SIGN_UP = 'pages.sign-up';

    // model
    const TABLE_PRODUCT = 'product';
    const TABLE_BILL = 'bill';
    const TABLE_BILL_PRODUCT = 'bill_product';
    const TABLE_CUSTOMER = 'customer';
    const TABLE_NEWS = 'news';
    const TABLE_PRODUCT_TYPE = 'product_type';
    const TABLE_SLIDE = 'slide';
    const TABLE_USER = 'user';

    // controller
    const CONTROLLER_PAGE = 'PageController@';
    const CONTROLLER_CART = 'CartController@';
    const CONTROLLER_CUSTOMER = 'CustomerController@';
    const CONTROLLER_COMMENT = 'CommentController@';
}
