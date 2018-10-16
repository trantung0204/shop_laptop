<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ImportReceipt;
use App\ImportProduct;
use App\Product;
use App\Category;
use App\ProductDetail;
use \DB;
use App\Admin;
use Yajra\Datatables\Datatables;

class ImportReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function anyData()
    {
        //return Datatables::of(Product::query())->make(true)
        //
        $importReceipt = ImportReceipt::select('import_receipts.*','admins.name as admin_name')
                            ->join('admins', 'import_receipts.admin_id', '=', 'admins.id');

        return Datatables::of($importReceipt)
        ->addColumn('action', function ($product) {
            return'
            <button type="button" class="btn btn-info btn-detail btn-menu" data-id="'.$product->id.'" data-url="'.route('imports.show',$product->id).'" data-code="" >Chi tiết</button>
            <button type="button" class="btn btn-warning btn-edit " data-id="'.$product->id.'" data-url="'.route('imports.show',$product->id).'">Sửa</button>
            <button type="button" class="btn btn-danger btn-del" data-url="'.route('imports.destroy',$product->id).'">Xoá</button>
            ';
            
        })
        ->setRowId('receipt-row-{{$id}}')
        ->setRowClass('receipt-record')
        // ->setRowAttr([
        //     'data-url' => function($product) {
        //         return route('products.show', $product->id);
        //     },
        // ])
        ->editColumn('admin_id', function ($importReceipt) {
            return $importReceipt->admin_name;
        })
        // ->editColumn('sum', function ($importReceipt) {
        //     return $importReceipt->sum.' $';
        // })
        ->editColumn('created_at', function ($importReceipt) {
            return $importReceipt->created_at->format('d/m/Y');
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function index()
    {
        $categories=Category::where('parent_id','<>',null)->get();
        $products=Product::where('category_id',$categories[0]->id)->get();
        // dd($products[0]);
        return view('admin.import.import',compact('products','categories'));
    }
    public function getColorbyProduct($code){
        $color= DB::table('product_details')->where('product_code', '=', $code)
                                        ->join('colors', 'product_details.color_id', '=', 'colors.id')
                                        ->select('product_details.color_id as color_id','colors.name as color_name')
                                        ->distinct('color_id')
                                        ->get();
        return response()->json([
                'data'=>$color
            ], 200);
    }
    public function getSizebyProductandColor($code,$color){
        $size= DB::table('product_details')->where('product_code', '=', $code)
                                        ->where('color_id', '=', $color)
                                        ->join('sizes', 'product_details.size_id', '=', 'sizes.id')
                                        ->select('product_details.size_id as size_id','sizes.size as size_number')
                                        ->distinct('size_id')
                                        ->orderBy('size_number','asc')
                                        ->get();
        return response()->json([
                'data'=>$size
            ], 200);
    }
    public function getProductDetailId($code,$color,$size){
        $productDetail= DB::table('product_details')->where('product_code', '=', $code)
                                        ->where('color_id', '=', $color)
                                        ->where('size_id', '=', $size)
                                        ->select('id','product_code')
                                        ->first();
        return response()->json([
                'data'=>$productDetail
            ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=json_decode($request->get('receiptInfo'), true);

        // dd($data);
        $receiptInfo=array();
        $receiptInfo['code']=$data['code'];
        $receiptInfo['admin_id']=$data['admin_id'];
        $receiptInfo['sum']=$data['sum'];
        // dd($receiptInfo);
        return response()->json(['data' => ImportReceipt::create($receiptInfo)], 200); 
    }
    public function createReceiptData(Request $request)
    {
        $datas=json_decode($request->get('receiptData'), true);
        // dd($datas);

        foreach ($datas as $data) {
            $receiptData=array();
            $receiptData['import_code']=$data['import_code'];
            $receiptData['product_code']=$data['product_code'];
            $receiptData['product_details_id']=$data['product_detail_id'];
            $receiptData['import_price']=$data['import_price'];
            $receiptData['origin_price']=$data['origin_price'];
            $receiptData['sale_price']=$data['sale_price'];
            $receiptData['user_id']=$data['user_id'];
            $receiptData['quantity']=$data['quantity'];
            ImportProduct::create($receiptData);
        }
        // dd($receiptInfo);
        return response()->json(['data' => 'ok'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receiptInfo=ImportReceipt::find($id);

        $receiptDatas=ImportProduct::where('import_code',$receiptInfo->code)->get();
        $data=array();
        // if (is_object($receiptDatas)) {
        //     return('true');
        // }
        // return('false');
        // dd($receiptDatas);
        foreach ($receiptDatas as $item) {
            $detail=ProductDetail::where('id',$item->product_details_id)->first();
            // return response()->json(['data'=>$detail,'info'=>$receiptInfo],200);
            $data[$item->id]['id']=$item->id;
            $data[$item->id]['import_code']=$item->import_code;
            $data[$item->id]['product_code']=$item->product_code;
            $data[$item->id]['product_details_id']=$item->product_details_id;
            $data[$item->id]['product_name']=$detail->product->name;
            if ($detail->color_id!=null) {
                $data[$item->id]['color']=$detail->color->name;
            }else{
                $data[$item->id]['color']=null;
            }
            if ($detail->size_id!=null) {
                $data[$item->id]['size']=$detail->size->size;
            }else{
                $data[$item->id]['size']=null;
            }
            if ($detail->cpu!=null) {
                $data[$item->id]['cpu']=$detail->cpu;
            }else{
                $data[$item->id]['cpu']=null;
            }
            if ($detail->ram!=null) {
                $data[$item->id]['ram']=$detail->ram;
            }else{
                $data[$item->id]['ram']=null;
            }
            if ($detail->vga!=null) {
                $data[$item->id]['vga']=$detail->vga;
            }else{
                $data[$item->id]['vga']=null;
            }
            if ($detail->disk!=null) {
                $data[$item->id]['disk']=$detail->disk;
            }else{
                $data[$item->id]['disk']=null;
            }
            if ($detail->resolution!=null) {
                $data[$item->id]['resolution']=$detail->resolution;
            }else{
                $data[$item->id]['resolution']=null;
            }
            $data[$item->id]['origin_price']=$item->origin_price;
            $data[$item->id]['sale_price']=$item->sale_price;
            $data[$item->id]['quantity']=$item->quantity;
            $data[$item->id]['import_price']=$item->import_price;
        }
        return response()->json(['data'=>$data,'info'=>$receiptInfo],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $info=ImportReceipt::find($id);
        // $data=ImportProduct::where('import_code',$info->code);
        // return response()->json(['data'=>$data,'info'=>$info],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=json_decode($request->get('receiptInfo'), true);

        // dd($data);
        $receiptInfo=array();
        $receiptInfo['code']=$data['code'];
        $receiptInfo['admin_id']=$data['admin_id'];
        $receiptInfo['sum']=$data['sum'];
        // dd($receiptInfo);
        return response()->json(['data' => ImportReceipt::find($id)->update($receiptInfo)], 200); 
        // return response()->json(['data' => $receiptInfo], 200); 
    }

    public function updateReceiptData(Request $request)
    {
        $datas=json_decode($request->get('receiptData'), true);
        // return response()->json(['data' => 'ok'], 200);
        $stillExist=array();
        foreach ($datas as $data) {
            $receiptData=array();
            $id=$data['id'];
            $receiptData['import_code']=$data['import_code'];
            $receiptData['product_code']=$data['product_code'];
            $receiptData['product_details_id']=$data['product_detail_id'];
            $receiptData['import_price']=$data['import_price'];
            $receiptData['origin_price']=$data['origin_price'];
            $receiptData['sale_price']=$data['sale_price'];
            $receiptData['user_id']=$data['user_id'];
            $receiptData['quantity']=$data['quantity'];
            if ($id==0) {
                $newRecord=ImportProduct::create($receiptData);
                $stillExist[]=$newRecord->id;
            }else{
                ImportProduct::find($id)->update($receiptData);
                $stillExist[]=$id;
            }
            $currentImportCode=$receiptData['import_code'];
        }
        ImportProduct::where('import_code',$currentImportCode)->whereNotIn('id', $stillExist)->delete();
        // dd($receiptInfo);
        return response()->json(['abc' => 'ok'], 200);
    }

    public function printReceipt($id)
    {
        $receiptInfo=ImportReceipt::find($id);

        $receiptDatas=ImportProduct::where('import_code',$receiptInfo->code)->get();
        $data=array();
        // if (is_object($receiptDatas)) {
        //     return('true');
        // }
        // return('false');
        // dd($receiptDatas);
        foreach ($receiptDatas as $item) {
            $detail=ProductDetail::where('id',$item->product_details_id)->first();
            $data[$item->id]['id']=$item->id;
            $data[$item->id]['import_code']=$item->import_code;
            $data[$item->id]['product_code']=$item->product_code;
            $data[$item->id]['product_details_id']=$item->product_details_id;
            $data[$item->id]['product_name']=$detail->product->name;
            $data[$item->id]['color']=$detail->color->name;
            $data[$item->id]['size']=$detail->size->size;
            $data[$item->id]['origin_price']=$item->origin_price;
            $data[$item->id]['sale_price']=$item->sale_price;
            $data[$item->id]['quantity']=$item->quantity;
            $data[$item->id]['import_price']=$item->import_price;
        }
        // return response()->json(['data'=>$data,'info'=>$receiptInfo],200);
        return view('admin.import.printReceipt',compact('data','receiptInfo'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receipt= DB::table('import_receipts')->where('id','=',$id)->first();
        DB::table('import_products')->where('import_code', '=', $receipt->code)->delete();
        ImportReceipt::find($id)->delete();
    }
    
    public function convert_number_to_words($number) {
        $hyphen      = ' ';
        $conjunction = '  ';
        $separator   = ' ';
        $negative    = 'âm ';
        $decimal     = ' phẩy ';
        $dictionary  = array(
        0                   => 'Không',
        1                   => 'Một',
        2                   => 'Hai',
        3                   => 'Ba',
        4                   => 'Bốn',
        5                   => 'Năm',
        6                   => 'Sáu',
        7                   => 'Bảy',
        8                   => 'Tám',
        9                   => 'Chín',
        10                  => 'Mười',
        11                  => 'Mười một',
        12                  => 'Mười hai',
        13                  => 'Mười ba',
        14                  => 'Mười bốn',
        15                  => 'Mười năm',
        16                  => 'Mười sáu',
        17                  => 'Mười bảy',
        18                  => 'Mười tám',
        19                  => 'Mười chín',
        20                  => 'Hai mươi',
        30                  => 'Ba mươi',
        40                  => 'Bốn mươi',
        50                  => 'Năm mươi',
        60                  => 'Sáu mươi',
        70                  => 'Bảy mươi',
        80                  => 'Tám mươi',
        90                  => 'Chín mươi',
        100                 => 'trăm',
        1000                => 'ngàn',
        1000000             => 'triệu',
        1000000000          => 'tỷ',
        1000000000000       => 'nghìn tỷ',
        1000000000000000    => 'ngàn triệu triệu',
        1000000000000000000 => 'tỷ tỷ'
        );
         
        if (!is_numeric($number)) {
            return false;
        }
         
        if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
            // overflow
            trigger_error('convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX, E_USER_WARNING);
            return false;
        }
         
        if ($number < 0) {
            return $negative . Self::convert_number_to_words(abs($number));
        }
         
        $string = $fraction = null;
         
        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }
         
        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens   = ((int) ($number / 10)) * 10;
                $units  = $number % 10;
                $string = $dictionary[$tens];
                if ($units) {
                    $string .= $hyphen . $dictionary[$units];
                }
                break;
            case $number < 1000:
                $hundreds  = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder) {
                    $string .= $conjunction . Self::convert_number_to_words($remainder);
                }
                break;
            default:
                $baseUnit = pow(1000, floor(log($number, 1000)));
                $numBaseUnits = (int) ($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string = Self::convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
                if ($remainder) {
                    $string .= $remainder < 100 ? $conjunction : $separator;
                    $string .= Self::convert_number_to_words($remainder);
                }
                break;
        }
         
        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = array();
            foreach (str_split((string) $fraction) as $number) {
                $words[] = $dictionary[$number];
            }

            $string .= implode(' ', $words);
        }
         
        return $string;
    }
    public function getDetail($code)
    {
        // dd(Product::where('code',$code)->first()->getType());
        //return Datatables::of(Product::query())->make(true);
        if (Product::where('code',$code)->first()->getType()==2) {
            $productDetails = DB::table('product_details')
                            ->where('product_code', '=', $code)
                            ->join('products', 'product_details.product_code', '=', 'products.code')
                            ->select('product_details.*', 'products.name as product_name')
                            ->get();return Datatables::of($productDetails)
            ->addColumn('action', function ($productDetail) {
                $src='
                
                <button type="button" class="btn btn-xs btn-info add-to-receipt" data-id="'.$productDetail->id.'"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</button>
                ';
                return $src;
                
            })
            ->editColumn('cpu','null')
            ->addColumn('size_name','null')
            ->editColumn('vga','null')
            ->editColumn('ram','null')
            ->editColumn('disk','null')
            ->editColumn('resolution','null')
            ->addColumn('color_name','null')
            ->setRowId('product-row-{{$id}}')
            ->setRowClass('table-row')
            ->rawColumns(['action'])
            ->make(true);
        }else{
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
                
                <button type="button" class="btn btn-xs btn-info add-to-receipt" data-id="'.$productDetail->id.'"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</button>
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
        

    }
    public function getProOfCate($id)
    {
        return response()->json([
                'data'=>Product::where('category_id',$id)->select('name','code')->get()
            ], 200);
    }
    public function generateCode()
    {
        $code='';
        do{
            $code='PN'.str_pad(rand(1,9999), 4, '0', STR_PAD_LEFT);
        }while(ImportReceipt::where('code',$code)->get()->count()>0);
        return response()->json([
                'data'=>$code,
            ], 200);
    }
}
