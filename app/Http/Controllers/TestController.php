<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }
    public function category()
    {
        return view('admin.category.index');
    }
    public function brand()
    {
        return view('admin.brand.index');
    }
    public function admin()
    {
        return view('admin.admin.index');
    }
    public function product()
    {
        return view('admin.product.index');
    }
    public function size()
    {
        return view('admin.size.index');
    }
    public function color()
    {
        return view('admin.color.index');
    }
    public function shop()
    {
        return view('shop.layouts.master');
    }
    public function home()
    {
        return view('shop.pages.home');
    }
    public function listing()
    {
        return view('shop.pages.listing');
    }
    public function productShop()
    {
        return view('shop.pages.product');
    }
    public function checkout()
    {
    	return view('shop.pages.checkout');
    }
}
