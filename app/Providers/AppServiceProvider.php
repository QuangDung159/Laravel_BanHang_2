<?php

namespace App\Providers;

use App\ProductType;
use Illuminate\Support\ServiceProvider;

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
            $listProductType = ProductType::all();
            return $view->with('listProductType', $listProductType);
        });
    }
}
