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
				->select('import_products.id','import_products.origin_price','import_products.sale_price','import_products.quantity','import_products.import_code','products.code','products.name','brands.name as brand_name','images.link')
				// ->orderBy('import_products.id','asc')
				->orderBy('import_products.sale_price','asc')
				->first();
		}
		// dd($products);
		return view('shop.pages.home',compact('slides','categories','brands','products'));
	}
	public function listing()
	{
		// $category = Category::where('slug',$slug)->first();
		// $products = Product::where('category_id',$category->id)->get();
		return view('shop.pages.listing',compact('category','products'));
	}
	public function modalDetail($id)
	{
		$product = Product::find($id);

		$sizes = [];
		$arrColor = [];
		$product_details = DB::table('product_details')->where('product_code',$product->code)->get();
		foreach ($product_details as $key => $product_detail) {
			$idColor = $product_detail->color_id;
			$colors = Color::find($idColor);			
			array_push($arrColor,$colors);
			if ($key == 0) {
				$sizes = DB::table('product_details')
				->where('product_code',$product_detail->product_code)
				->where('color_id',$product_detail->color_id)
				->get();
			}		
		};
		$colorDetails = array_unique($arrColor);
		$arrSize =[];
		foreach ($sizes as $key => $value) {
			$size = Size::find($value->size_id);
			array_push($arrSize,$size->size);
		}

		$images = Image::where('product_id',$id)->first();
		$src = $images->link;
		$src = str_replace("public",asset("/")."storage",$src);
		
		return response()->json([
			'product' => $product,
			'src' => $src,
			'product_details' => $product_details,
			'color' => $colorDetails,
			'size' => $arrSize,
		]);
	}
	public function changeColor(Request $request)
	{
		$color = Color::find($request->color_id);

		$arrSize =[];
		$sizes = DB::table('product_details')
				->where('product_code',$request->product_code)
				->where('color_id',$request->color_id)
				->get();	
		foreach ($sizes as $key => $value) {
			$size = Size::find($value->size_id);
			array_push($arrSize,$size->size);
		}		

		$image = DB::table('images')
				->where('product_id',$request->idProduct)
				->where('color_id',$request->color_id)
				->first();
		if ($image == null) {
			unset($image);
			return response()->json([
				'size' => $arrSize,
				'color' => $color,						
			]);
		}else{
			$srcImage = $image->link;
			$srcImage = str_replace("public",asset("/")."storage",$srcImage);
			return response()->json([
				'size' => $arrSize,
				'color' => $color,		
				'srcImage' => $srcImage					
			]);
		}	
	}
	public function productShop($slug)
	{
		$product = DB::table('products')->where('slug',$slug)->first();

		$product_details = DB::table('product_details')->where('product_code',$product->code)->get();
		$images = DB::table('images')->where('product_id',$product->id)->get();
		//dd($images);
		return view('shop.pages.product',[
			'product' => $product,
			'images' => $images,
			'colors' => $product_details,
		]);
		// return view('shop.pages.product');
	}
	public function changeColorDetail(Request $request)
	{
		$color = Color::find($request->color_id);

		$arrSize =[];
		$sizes = DB::table('product_details')
				->where('product_code',$request->product_code)
				->where('color_id',$request->color_id)
				->get();	
		foreach ($sizes as $key => $value) {
			$size = Size::find($value->size_id);
			array_push($arrSize,$size->size);
		}		

		$image = DB::table('images')
				->where('product_id',$request->idProduct)
				->where('color_id',$request->color_id)
				->first();
		if ($image == null) {
			unset($image);
			return response()->json([
				'size' => $arrSize,
				'color' => $color,						
			]);
		}else{
			$srcImage = $image->link;
			$srcImage = str_replace("public",asset("/")."storage",$srcImage);
			return response()->json([
				'size' => $arrSize,
				'color' => $color,		
				'srcImage' => $srcImage					
			]);
		}	
	}
	public function loginShop()
	{
		return view('shop.pages.login');
	}
	public function signupShop()
	{
		return view('shop.pages.signup');
	}
	public function about()
	{
		return view('shop.pages.about');
	}
}
