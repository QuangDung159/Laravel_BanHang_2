<?php

namespace App\Providers;

use App\Customer;
use App\ProductType;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

session_start();

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header', function ($view) {
            $listProductType = json_decode(Redis::get('list_product_type'));

            if (!$listProductType) {
                $listProductType = ProductType::all();
                Redis::set('list_product_type', json_encode($listProductType));
            }

            $listItemInCart = Cart::content();
            $total = Cart::total();

            $customerName = '';
            if (Session::has('customer_id')) {
                $customerId = Session::get('customer_id');
                $customerName = Customer::where('customer_id', '=', $customerId)
                    ->first()->customer_name;
            }

            return $view
                ->with('listProductType', $listProductType)
                ->with('listItemInCart', $listItemInCart)
                ->with('cartTotal', $total)
                ->with('customerName', $customerName);
        });
    }
}
