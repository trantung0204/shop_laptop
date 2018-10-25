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
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{

    public function testCart(){
    	// Cart::add(['id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'options' => ['size' => 'large','code' => 'SP98797','color' => 'black','image' => 'abc.jpg']]);
    	// Cart::remove('cdf2a8279f532f52aa64b05b9fce0003');
    	// Cart::destroy();
    	// $item=Cart::content()->where('id', 15);
    	// if(!$item->isEmpty()){
    	// 	return $item;
    	// }
    	// $item=Cart::content()->where('id', 15);
    	// return $item;
    	return Cart::content();
    }
    public function addProduct(Request $request)
    {
    	$request=$request->all();
    	// dd($request['buy_quantity']);
    		// dd($request);
    	if (isset($request['product_code'])) {
    		$productDetail=ImportProduct::join('products', 'import_products.product_code', '=', 'products.code')
    			    ->join('product_details', 'product_details.id', '=', 'import_products.product_details_id')
    		        ->where('import_products.product_code',$request['product_code'])
    		        ->where('import_products.quantity','>',0)
    		        ->select('import_products.origin_price','import_products.sale_price','import_products.quantity','products.name','products.code','products.id as product_id','product_details.id')
    		        ->first();
    		$image= Image::where('product_id',$productDetail->product_id)->select('link')->first()->link;
	        $image=str_replace('public',asset('storage'),$image);
	        $image=str_replace('public',asset('storage'),$image);

	        if ($productDetail->quantity<$request['buy_quantity']) {
	        	return response()->json([
	        		'msg' => 'Số lượng sản phẩm còn lại không đủ',
	        		'error' => true,
	        	], 200);
	        }
	        Cart::add([
				'id' => $productDetail->id, 
				'name' => $productDetail->name, 
				'qty' => $request['buy_quantity'], 
				'price' => $productDetail->sale_price, 
				'options' => [
					'size' => null,
					'color' => null,
					'cpu' => null,
					'ram' => null,
					'vga' => null,
					'disk' => null,
					'resolution' => null,
					'image' => $image,
					'productCode' => $productDetail->code,
					'origin_price' => $productDetail->origin_price
				]
			]);
    	}else{
    		$productDetail=ProductDetail::join('import_products', 'product_details.id', '=', 'import_products.product_details_id')
	                            ->join('colors', 'product_details.color_id', '=', 'colors.id')
	                            ->join('sizes', 'product_details.size_id', '=', 'sizes.id')
	                            ->join('products', 'product_details.product_code', '=', 'products.code')
	                            // ->join('images', 'images.product_id', '=', 'products.id')
	                            ->where('product_details.id', $request['detail_id'])
	                            ->where('import_products.import_code', $request['receipt_code'])
	                            ->select('colors.id as color_id','colors.name as color_name','sizes.size','product_details.id','product_details.cpu','product_details.ram','product_details.disk','product_details.vga','product_details.resolution','import_products.origin_price','import_products.sale_price','import_products.quantity','products.name','products.code','products.id as product_id')
	                            // ->where('images.color_id','=','colors.id')
	                            ->first();
	        $image= Image::where('product_id',$productDetail->product_id)->where('color_id',$productDetail->color_id)->select('link')->first()->link;
	    	
	        // dd($image);
	        $image=str_replace('public',asset('storage'),$image);
	        if ($productDetail->quantity<$request['buy_quantity']) {
	        	return response()->json([
	        		'msg' => 'Số lượng sản phẩm còn lại không đủ',
	        		'error' => true,
	        	], 200);
	        }
	        switch ($productDetail->cpu) {
	           case '1':
	              $cpu='Core i3';
	              break;
	           case '2':
	              $cpu='Core i5';
	              break;
	           case '3':
	              $cpu='Core i7';
	              break;
	           case '4':
	              $cpu='Pentium';
	              break;
	           case '5':
	              $cpu='Core M';
	              break;
	           case '6':
	              $cpu='AMD';
	              break;
	          
	           default:
	              $cpu='Intel';
	              break;
	        }
	        switch ($productDetail->vga) {
	            case '1':
	                $vga='GTX 1030';
	                break;
	            case '2':
	                $vga='GTX 1050';
	                break;
	            case '3':
	                $vga='GTX 1050ti';
	                break;
	            case '4':
	                $vga='GTX 1060';
	                break;
	            case '5':
	                $vga='GTX 1070';
	                break;
	            case '6':
	                $vga='GTX 1080';
	                break;
	            
	            default:
	                $vga='On Board';
	                break;
	        }
			Cart::add([
				'id' => $productDetail->id, 
				'name' => $productDetail->name, 
				'qty' => $request['buy_quantity'], 
				'price' => $productDetail->sale_price, 
				'options' => [
					'size' => $productDetail->size,
					'color' => $productDetail->color_name,
					'cpu' => $cpu,
					'ram' => $productDetail->ram,
					'vga' => $vga,
					'disk' => $productDetail->disk,
					'resolution' => $productDetail->resolution,
					'image' => $image,
					'productCode' => $productDetail->code,
					'origin_price' => $productDetail->origin_price
				]
			]);
		}
		// Cart::content()->where('id', $product->id);
		return response()->json([
    		'msg' => 'Đã thêm sản phẩm vào giỏ hàng',
    		'error' => false,
    	], 200);
    }
    public function showCart()
    {
    	// return response()->json([
    	// 	'content' => Cart::content(),
    	// ], 200);
    	
    	$data=['content' => Cart::content(),'total'=>Cart::total(),'count'=>Cart::count()];
    	return $data;
    }
    public function delItem($rowId)
    {
    	Cart::remove($rowId);
    }
    public function editItem($rowId,$qty)
    {
    	Cart::update($rowId, $qty);
    }
}
