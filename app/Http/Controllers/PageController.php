<?php

namespace App\Http\Controllers;

use App\Constant;
use App\Product;
use App\ProductType;
use App\Slide;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PageController extends Controller
{
    public function showIndexPage()
    {
        $listSlide = Slide::all();

        $listNewProduct = Product::orderBy('product_created_at', 'desc')
            ->take(4)->get();

        $listTopProduct = Product::orderBy('product_created_at', 'asc')
            ->take(4)->get();

        return view(Constant::PATH_INDEX)
            ->with('listSlide', $listSlide)
            ->with('listNewProduct', $listNewProduct)
            ->with('listTopProduct', $listTopProduct);
    }

    public function showProductByTypePage($productTypeId)
    {
        $productType = ProductType::where('product_type_id', '=', $productTypeId)
            ->first();

        $listProduct = Product::where('product_type_id', '=', $productTypeId)
            ->paginate(9);

        $listProductType = json_decode(Redis::get('list_product_type'));

        return view(Constant::PATH_PRODUCT_BY_TYPE)
            ->with('productTypeName', $productType->product_type_name)
            ->with('listProduct', $listProduct)
            ->with('listProductType', $listProductType);
    }

    public function showProductDetailPage($productId)
    {
        $product = Product::where('product_id', '=', $productId)
            ->first();

        $listProductRelated = Product::where('product_type_id', '=', $product->product_type_id)
            ->where('product_id', '!=', $product->product_id)
            ->take(3)->get();

        $listProductBest = Product::orderBy('product_rate', 'desc')
            ->take(4)->get();

        $listProductNew = Product::orderBy('product_created_at', 'desc')
            ->take(4)->get();

        return view(Constant::PATH_PRODUCT_DETAIL)
            ->with('product', $product)
            ->with('listProductRelated', $listProductRelated)
            ->with('listProductBest', $listProductBest)
            ->with('listProductNew', $listProductNew);
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
