<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {    
        view()->composer('shop.layouts.master', function($view){
            $categories = DB::table('categories')->get();
            $brands = DB::table('brands')->get();
            $view->with('categories',$categories);
            $view->with('brands',$brands);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
