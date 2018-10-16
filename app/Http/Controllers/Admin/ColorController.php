<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Color;
use App\Exports\ColorsExport;
use Yajra\Datatables\Datatables;
use Excel;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.color.color');
    }
    public function storeExcel() 
    {
        return \Excel::store(new ColorsExport, 'invoices.xlsx', 's3');
    }


    public function anyData()
    {
        return Datatables::of(Color::all())
        ->addColumn('action', function ($color) {
            return'
            <button type="button" class="btn btn btn-info" data-url="'.route('colors.update', $color->id).'"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</button>
            <button type="button" class="btn btn btn-danger" data-id="'.$color->id.'" data-url="'.route('colors.destroy', $color->id).'"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
            ';
        })
        ->addColumn('color', function ($color) {
            return'<div  style="width:70px;height:70px;border-radius:5px;background-color: '.$color->code.';"><div>';
        })
        ->editColumn('created_at', function ($color) {
            return $color->created_at->format('d/m/Y');
        })
        ->setRowId('color-row-{{$id}}')
        ->setRowClass('table-row')
        ->rawColumns(['action','color'])
        ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json(['data' => Color::storeData($request->only(['name','code','slug']))], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Color::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $result = Color::updateData($id,$request->only(['name','code','slug']));
        if($result){
            $color= Color::find($id);
            return response()->json([
                'data'=>$color
            ], 200);
        }else{
            return response()->json( 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Color::del($id);
    }
    public function Export()
    {
        $colors = Color::select('id','name','code','created_at','updated_at')->get();
        return Excel::create('data_color', function($excel) use ($colors){
            $excel->sheet('mysheet', function($sheet) use ($colors){
                $sheet->fromArray($colors);
            });
        })->download('xls');
    }
    public function Import(Request $request)
    {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function($reader){})->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $color = new Color();
                    $color->name = $value->name;
                    $color->code = $value->code;
                    $color->slug = srt_slug($value->name);
                    $color->save();
                }
            }
        }
        return back();
    }
}
