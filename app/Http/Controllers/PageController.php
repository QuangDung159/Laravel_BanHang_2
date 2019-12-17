<?php

namespace App\Http\Controllers;

use App\Constant;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showIndexPage()
    {
        return view(Constant::PATH_INDEX);
    }

    public function showProductByTypePage($productTypeId)
    {
        return view(Constant::PATH_PRODUCT_BY_TYPE);
    }

    public function showProductDetailPage($productId)
    {
        return view(Constant::PATH_PRODUCT_DETAIL);
    }

    public function showContactPage()
    {
        return view(Constant::PATH_CONTACT);
    }

    public function showAboutPage()
    {
        return view(Constant::PATH_ABOUT);
    }
}
