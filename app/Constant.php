<?php

namespace App;

class Constant
{
    const URL_INDEX = '/home';
    const URL_CART = '/cart';

    const PATH_INDEX = 'pages.home';
    const PATH_PRODUCT_BY_TYPE = 'pages.product-by-type';
    const PATH_PRODUCT_DETAIL = 'pages.product-detail';
    const PATH_CONTACT = 'pages.contact';
    const PATH_ABOUT = 'pages.about';
    const PATH_CART = 'pages.cart';

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
}
