<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Brand;
use App\Color;
use App\Size;
use App\ProductDetail;
use App\Image;
use \DB;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::all();
        $categories=Category::all();
        $colors=Color::all();
        $sizes=Size::all();
        return view('admin.product.product',compact('brands','categories','colors','sizes'));
    }
    public function addForm()
    {
        $brands=Brand::all();
        $categories=Category::all();
        $colors=Color::all();
        $sizes=Size::all();
        return view('admin.pages.addProduct',compact('brands','categories','colors','sizes'));
    }
    public function anyData()
    {
        //return Datatables::of(Product::query())->make(true)
        //
        $products = Product::with('images')->select('products.*', 'categories.name as category_name', 'categories.parent_id', 'brands.name as brand_name')
                            ->join('categories', 'products.category_id', '=', 'categories.id')
                            ->join('brands', 'products.brand_id', '=', 'brands.id');

        return Datatables::of($products)
        ->addColumn('action', function ($product) {
            $str='';
            if ($product->parent_id==1) {
                $str='<button type="button" class="btn btn-default btn-detail btn-menu" data-url="'.route('getProductDetails', $product->code).'" data-code="'.$product->code.'" data-category="'.$product->parent_id.'" data-url-add="'.route('addDetail').'"><i class="fa fa-ellipsis-h" aria-hidden="true"></i><span class="btn-text"> Chi tiết</span></button>';
            }
            $str.='<button type="button" class="btn btn-success btn-image btn-menu"  data-url="'.route('listColors', $product->code).'" data-url-image="'.route('listImages', $product->id).'" data-id="'.$product->id.'" data-name="'.$product->name.'" parent="'.$product->parent_id.'"><i class="fa fa-upload" aria-hidden="true"></i><span class="btn-text"> Ảnh</span></button>
            <button type="button" class="btn btn-warning btn-edit btn-menu" data-url="'.route('products.show', $product->id).'"  data-id="'.$product->id.'"><i class="fa fa-pencil" aria-hidden="true"></i><span class="btn-text"> Sửa</span></button>
            <button type="button" class="btn btn-danger btn-del btn-menu" data-url="'.route('products.destroy', $product->id).'" data-id="'.$product->id.'"><i class="fa fa-trash" aria-hidden="true"></i><span class="btn-text"> Xóa</span></button>
            ';
            return $str;
        })
        // ->setRowClass(function ($image) {
        //     return $image->id % 2 == 0 ? 'pink' : 'green';
        // })
        // ->editColumn('image_link', '<img class="img-responsive center-block" style="width:70px;" src="{{$images}}"/>')
        ->addColumn('image_link', function (Product $product) {
            if(isset($product->images) && isset($product->images[0])){
                $src=$product->images[0]->link;
                $src = str_replace("public",asset("/")."storage",$src);
                return '<img class="img-responsive center-block" style="width:70px;" src="'.$src.'"/>';
            }else{
                return '<img class="img-responsive center-block" style="width:70px;" src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg"/>';
            }
        })
        // ->editColumn('origin_price', '{{$origin_price}} USD')
        // ->editColumn('sale_price', '{{$sale_price}} USD')
        //->editColumn('brand_id', 'tung{{$category_id}}')
        //->editColumn('category_id', Category::where('id', '=',$category_id)->first()->name)
        ->setRowId('product-row-{{$id}}')
        ->setRowClass('product-record')
        ->setRowAttr([
            'data-url' => function($product) {
                return route('products.show', $product->id);
            },
        ])
        ->editColumn('slide', function ($product) {
            if ($product->slide==1) {
                return '<div style="width:100%; text-align: center; font-size:2em; color: #008D4C;"><i class="fa fa-check-circle" aria-hidden="true"></i></div>';
            } else {
                return '<div style="width:100%; text-align: center; font-size:2em; color:#D73925;"><i class="fa fa-times-circle" aria-hidden="true"></i></div>';
            }
        })
        ->editColumn('created_at', function ($product) {
            return $product->created_at->format('d/m/Y');
        })
        ->setRowClass('table-row')
        ->rawColumns(['slide','image_link','action'])
        ->make(true);
    }
    public function getDetail($code)
    {
        //return Datatables::of(Product::query())->make(true);
        //
        $productDetails = DB::table('product_details')
                            ->where('product_code', '=', $code)
                            ->join('colors', 'product_details.color_id', '=', 'colors.id')
                            ->join('sizes', 'product_details.size_id', '=', 'sizes.id')
                            ->join('products', 'product_details.product_code', '=', 'products.code')
                            ->select('product_details.*', 'colors.name as color_name','colors.code as color_code', 'sizes.size as size_name', 'products.name as product_name')
                            ->get();

        return Datatables::of($productDetails)
        ->addColumn('action', function ($productDetail) {
            $src='
            
            <button type="button" class="btn btn-xs btn-danger btn-del-detail" data-url="'.route('delProductDetail', $productDetail->id).'" data-id="'.$productDetail->id.'"><i class="fa fa-trash" aria-hidden="true"></i> Remove</button>
            ';
            return $src;
            
        })
        ->editColumn('cpu', function ($productDetail) {
            switch ($productDetail->cpu) {
                case '1':
                    return'Core i3';
                    break;
                case '2':
                    return'Core i5';
                    break;
                case '3':
                    return'Core i7';
                    break;
                case '4':
                    return'Pentium';
                    break;
                case '5':
                    return'Core M';
                    break;
                case '6':
                    return'AMD';
                    break;
                
                default:
                    return'Intel';
                    break;
            }
        })
        ->editColumn('vga', function ($productDetail) {
            switch ($productDetail->vga) {
                case '1':
                    return'GTX 1030';
                    break;
                case '2':
                    return'GTX 1050';
                    break;
                case '3':
                    return'GTX 1050ti';
                    break;
                case '4':
                    return'GTX 1060';
                    break;
                case '5':
                    return'GTX 1070';
                    break;
                case '6':
                    return'GTX 1080';
                    break;
                
                default:
                    return'On Board';
                    break;
            }
        })
        ->editColumn('ram', function ($productDetail) {
            return $productDetail->ram.' GB';
        })
        ->editColumn('disk', function ($productDetail) {
            return $productDetail->disk.' GB';
        })
        ->editColumn('resolution', function ($productDetail) {
            return $productDetail->resolution.'p';
        })
        ->editColumn('color_name', '<i style="color:{{$color_code}};text-shadow: 1px 1px 1px #000000;" class="fa fa-circle" aria-hidden="true"></i>  {{$color_name}}  ')
        ->setRowId('product-row-{{$id}}')
        ->setRowClass('table-row')
        ->rawColumns(['color_name','action'])
        ->make(true);
    }
    
    public function quantityIncrement($id,$i)
    {
        // DB::table('product_details')
        // ->where('id', $id)
        // ->update([
        //    'quantity' => DB::raw('quantity + 1')
        // ]);
        if ($i==1) {
            DB::table('product_details')->where('id', $id)->increment('quantity');
        }else{
            if (DB::table('product_details')->where('id', $id)->first()->quantity<=1) {
                ProductDetail::del($id);
            }else{
                DB::table('product_details')->where('id', $id)->decrement('quantity');
            }
        }
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $productData=array();
        $code='';
        do{
            $code='SP'.str_pad(rand(1,9999), 4, '0', STR_PAD_LEFT);
        }while(Product::where('code',$code)->get()->count()>0);
        $productData['code']=$code;

        $productData['name']=$request->name;
        // $productData['origin_price']=$request->origin_price;
        // $productData['sale_price']=$request->sale_price;
        $productData['description']=$request->description;
        $productData['content']=$request->content;
        $productData['slug']=str_slug($request->name, '-');
        $productData['brand_id']=$request->brand_id;
        $productData['category_id']=$request->category_id;
        $productData['slide']=$request->slide;
        $pro=Product::create($productData);
        if (Category::find($productData['category_id'])->parent_id==2) {
            ProductDetail::create(['product_code'=>$pro->code]);
        }
        return response()->json(['data' => $pro], 200);
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function update(Request $request, $id)
    {
        $result = Product::updateData($id,$request->only(['name','slug','code','description','content','origin_price','sale_price','brand_id','category_id','slide']));
        if($result){
            $category= Product::find($id);
            return response()->json([
                'data'=>$category
            ], 200);
        }else{
            return response()->json( 500);
        }
    }

    public function destroy($id)
    {
        $x= DB::table('products')->where('id','=',$id)->first();
        DB::table('product_details')->where('product_code', '=', $x->code)->delete();
        $images=DB::table('images')->where('product_id', '=', $x->id);
        foreach ($images->get() as $img) {
            $this->delImages($img->id);
        }
        $images->delete();
        //ProductDetail::del($x->code);
        Product::del($id);
    }
    public function delProductDetail($id)
    {
        ProductDetail::del($id);
    }
    public function addDetail(Request $request)
    {
        $details = DB::table('product_details')->where('product_code', $request->product_code)->where('color_id', $request->color_id)->where('size_id', $request->size_id)->first();

        //return response()->json(['data' => $details], 200);


        if (empty($details)) {
            return response()->json(['data' => ProductDetail::storeData($request->only(['product_code','color_id','size_id','cpu','ram','disk','vga','resolution']))], 200);
        }else{
            return response()->json(['noti' => 'This item aready exist!'], 200);
        }
    }
    public function getColors($code)
    {
        $colors= DB::table('product_details')->where('product_code', '=', $code)
                                    ->join('colors', 'product_details.color_id', '=', 'colors.id')
                                    ->select('product_details.color_id as color_id','colors.name as color_name')
                                    ->distinct('color_id')
                                    ->get();
        return response()->json([
                'data'=>$colors
            ], 200);
    }

    // public function imagesUpload()
    // {
    //     return view('imagesUpload');
    // }

    // public function imagesUploadPost(Request $request)
    // {
    //     request()->validate([
    //         'uploadFile' => 'required',
    //     ]);

    //     foreach ($request->file('uploadFile') as $key => $value) {
    //         $imageName = time(). $key . '.' . $value->getClientOriginalExtension();
    //         $value->move(public_path('images'), $imageName);
    //     }
    //     return response()->json(['success'=>'Images Uploaded Successfully.']);
    // }
     public function imagesUploadPost(Request $request)
    {      

        $data = array();
        $images=array();
        if($files=$request->file('image')){
            foreach($files as $key =>$file){
                $temp = [];
                // $temp['link'] = $file->store('imagesen ');
                $temp['link'] = Storage::disk('local')->put('public/images', $file);
                $temp['color_id'] = $request['color_id']=='null'?null:$request['color_id'];
                $temp['product_id'] = $request['product_id'];
                Image::storeData($temp);
            }
        }
        return response()->json(['data' => $images], 200);
    }
    public function getImages($id)
    {
        $images= DB::table('images')->where('product_id', '=', $id)->get();
        return response()->json([
                'data'=>$images
            ], 200);
    }
    public function delImages($id)
    {
        $link=DB::table('images')->where('id', '=', $id)->first()->link;
        DB::table('images')->where('id', '=', $id)->delete();
        Storage::disk('local')->delete($link);
    }
}
