<?php

namespace App\Http\Controllers;

use App\Constant;
use App\Product;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showIndexPage()
    {
        $listSlide = Slide::all();

        $listNewProduct = Product::orderBy('product_created_at', 'desc')
            ->take('4')->get();

        $listTopProduct = Product::orderBy('product_created_at', 'asc')
            ->take(4)->get();

        return view(Constant::PATH_INDEX)
            ->with('listSlide', $listSlide)
            ->with('listNewProduct', $listNewProduct)
            ->with('listTopProduct', $listTopProduct);
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
