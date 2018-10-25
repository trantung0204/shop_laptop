<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Product;
use App\ProductDetail;
use App\Category;
use App\Image;
use App\Color;
use App\Size;
use App\Brand;
use App\ImportProduct;

class ShopController extends Controller
{
	public function index()
	{
		$categories=array();
		$parents=Category::where('parent_id',null)->get();
		foreach ($parents as $parent) {
			$childs=Category::where('parent_id',$parent->id)->get();
			$item=array();
			foreach ($childs as $child) {
				$item[$child->name]=$child;
			}
			$categories[$parent->name]=$item;
		}
		$brands=Brand::all();
		$slides=Product::where('slide',1)
		->orderBy('id','desc')
		->join('brands', 'products.brand_id', '=', 'brands.id')
		->select('products.*','brands.name as brand_name')
		->get();
		$receiptProduct=Product::join('import_products', 'products.code', '=', 'import_products.product_code')
			->select('products.code')
			->where('quantity','>',0)
			->distinct('import_products.product_code')->get();
		$products=array();
		foreach ($receiptProduct as $key => $product) {
			$import_code=ImportProduct::where('product_code',$product->code)
				->select('import_code')
				->distinct('import_code')
				->orderBy('import_products.id','asc')
				->first();
			// dd($import_code);

			$products[$product->code]=Product::join('import_products', 'products.code', '=', 'import_products.product_code')
				->where('import_products.import_code',$import_code->import_code)
				->where('import_products.product_code',$product->code)
				->join('brands', 'products.brand_id', '=', 'brands.id')
				->join('images', 'images.product_id', '=', 'products.id')
				->select('import_products.id','import_products.origin_price','import_products.sale_price','import_products.quantity','import_products.import_code','products.code','products.slug','products.name','brands.name as brand_name','images.link')
				// ->orderBy('import_products.id','asc')
				->orderBy('import_products.sale_price','asc')
				->first();
		}
		// dd($products);
		return view('shop.pages.home',compact('slides','categories','brands','products'));
	}
	public function listing()
	{
		$categories=array();
		$parents=Category::where('parent_id',null)->get();
		foreach ($parents as $parent) {
			$childs=Category::where('parent_id',$parent->id)->get();
			$item=array();
			foreach ($childs as $child) {
				$item[$child->name]=$child;
			}
			$categories[$parent->name]=$item;
		}
		$brands=Brand::all();
		// $category = Category::where('slug',$slug)->first();
		// $products = Product::where('category_id',$category->id)->get();
		return view('shop.pages.listing',compact('categories','products','brands','slides'));
	}
	public function productShop($slug)
	{
		$categories=array();
		$parents=Category::where('parent_id',null)->get();
		foreach ($parents as $parent) {
			$childs=Category::where('parent_id',$parent->id)->get();
			$item=array();
			foreach ($childs as $child) {
				$item[$child->name]=$child;
			}
			$categories[$parent->name]=$item;
		}
		$brands=Brand::all();
		$product = DB::table('products')->where('slug',$slug)->first();

		$images = DB::table('images')->where('product_id',$product->id)->get();
		
		if (Product::type($product->id)==2) {
			$type=2;
			$product_details=ImportProduct::where('product_code',$product->code)->where('quantity','>',0)->first();
		}else{
			$type=1;
			$product_details=array();
			$detailList=ImportProduct::select('import_products.product_details_id')
				->where('quantity','>',0)
				->where('product_code',$product->code)
				->distinct('import_products.product_details_id')->get();
			foreach ($detailList as $detail) {
				$product_details[$detail->product_details_id]=ImportProduct::join('product_details', 'product_details.id', '=', 'import_products.product_details_id')
				    ->join('sizes', 'product_details.size_id', '=', 'sizes.id')
				    ->join('colors', 'product_details.color_id', '=', 'colors.id')
					->where('import_products.product_details_id',$detail->product_details_id)
					->select('colors.name as color_name','sizes.size','product_details.id','product_details.cpu','product_details.ram','product_details.disk','product_details.vga','product_details.resolution','import_products.origin_price','import_products.sale_price','import_products.quantity','import_products.import_code')->first();
			}
		}
		// dd($product_details);
		return view('shop.pages.product',[
			'product' => $product,
			'images' => $images,
			'product_details' => $product_details,
			'categories' => $categories,
			'brands' => $brands,
			'type' => $type,
		]);
		// return view('shop.pages.product');
	}
	public function loginShop()
	{
		$categories=array();
		$parents=Category::where('parent_id',null)->get();
		foreach ($parents as $parent) {
			$childs=Category::where('parent_id',$parent->id)->get();
			$item=array();
			foreach ($childs as $child) {
				$item[$child->name]=$child;
			}
			$categories[$parent->name]=$item;
		}
		$brands=Brand::all();
		// $category = Category::where('slug',$slug)->first();
		// $products = Product::where('category_id',$category->id)->get();
		return view('shop.pages.login',compact('categories','products','brands','slides'));
	}
	public function signupShop()
	{
		$categories=array();
		$parents=Category::where('parent_id',null)->get();
		foreach ($parents as $parent) {
			$childs=Category::where('parent_id',$parent->id)->get();
			$item=array();
			foreach ($childs as $child) {
				$item[$child->name]=$child;
			}
			$categories[$parent->name]=$item;
		}
		$brands=Brand::all();
		// $category = Category::where('slug',$slug)->first();
		// $products = Product::where('category_id',$category->id)->get();
		return view('shop.pages.signup',compact('categories','products','brands','slides'));
	}
	public function about()
	{
		$categories=array();
		$parents=Category::where('parent_id',null)->get();
		foreach ($parents as $parent) {
			$childs=Category::where('parent_id',$parent->id)->get();
			$item=array();
			foreach ($childs as $child) {
				$item[$child->name]=$child;
			}
			$categories[$parent->name]=$item;
		}
		$brands=Brand::all();
		// $category = Category::where('slug',$slug)->first();
		// $products = Product::where('category_id',$category->id)->get();
		return view('shop.pages.about',compact('categories','products','brands','slides'));
	}
	public function checkout()
	{
		$categories=array();
		$parents=Category::where('parent_id',null)->get();
		foreach ($parents as $parent) {
			$childs=Category::where('parent_id',$parent->id)->get();
			$item=array();
			foreach ($childs as $child) {
				$item[$child->name]=$child;
			}
			$categories[$parent->name]=$item;
		}
		$brands=Brand::all();
		// $category = Category::where('slug',$slug)->first();
		// $products = Product::where('category_id',$category->id)->get();
		return view('shop.pages.checkout',compact('categories','products','brands','slides'));
	}
	public function shoppingCart()
	{
		$categories=array();
		$parents=Category::where('parent_id',null)->get();
		foreach ($parents as $parent) {
			$childs=Category::where('parent_id',$parent->id)->get();
			$item=array();
			foreach ($childs as $child) {
				$item[$child->name]=$child;
			}
			$categories[$parent->name]=$item;
		}
		$brands=Brand::all();
		// $category = Category::where('slug',$slug)->first();
		// $products = Product::where('category_id',$category->id)->get();
		return view('shop.pages.shopping',compact('categories','products','brands','slides'));
	}
	public function guarantee()
	{
		$categories=array();
		$parents=Category::where('parent_id',null)->get();
		foreach ($parents as $parent) {
			$childs=Category::where('parent_id',$parent->id)->get();
			$item=array();
			foreach ($childs as $child) {
				$item[$child->name]=$child;
			}
			$categories[$parent->name]=$item;
		}
		$brands=Brand::all();
		// $category = Category::where('slug',$slug)->first();
		// $products = Product::where('category_id',$category->id)->get();
		return view('shop.pages.guarantee',compact('categories','products','brands','slides'));
	}
}
