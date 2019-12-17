<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addProductToCartFromHome($productId)
    {
        $product = Product::where('product_id', '=', $productId)
            ->first();

        $data = [
            'id' => $productId,
            'name' => $product->product_name,
            'qty' => 1,
            'price' => $product->product_promotion_price,
            'weight' => 0,
            'options' => [
                'image' => $product->product_image
            ]
        ];
        Cart::add($data);

        Session::put('msg_add_to_cart_success', ' Add ' . $product->product_name . ' to cart successfully.');

        return Redirect::to('/');
    }
}
