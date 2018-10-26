<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Illuminate\Support\Facades\View;
use App\Brand;
use App\Category;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {    
        $categories=array();
        $parents=Category::where('parent_id',null)->get();
        foreach ($parents as $parent) {
            $childs=Category::where('parent_id',$parent->id)->get();
            $item=array();
            $item['parentSlug']=$parent->slug;
            foreach ($childs as $child) {
                $item[$child->name]=$child;
            }
            $categories[$parent->name]=$item;
        }
        $brands=Brand::all();
        View::share(['categories'=> $categories,'brands'=> $brands]);
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
