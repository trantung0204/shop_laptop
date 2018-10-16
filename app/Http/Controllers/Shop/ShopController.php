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

class ShopController extends Controller
{
	public function index()
	{
		$products = Product::all();
		foreach ($products as $product) {
			$arr = [];
			$images = $product->images;
			foreach ($images as $key => $image) {
				array_push($arr,$image->link);			
			}		
			array_unique($arr);
			$image->link = $arr[0];
		}	
		
		return view('shop.pages.home',compact('products'));
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
	public function productShop()
	{
		$product = DB::table('products')->where('slug',$slug)->first();

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
		//dd($product);
		$images = DB::table('images')->where('product_id',$product->id)->get();
		//dd($images);
		return view('shop.pages.product',[
			'product' => $product,
			'images' => $images,
			'colors' => $colorDetails,
			'sizes' => $arrSize,
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
