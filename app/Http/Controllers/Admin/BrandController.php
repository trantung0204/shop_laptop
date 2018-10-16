<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Brand;
use DB;
use Excel;

class BrandController extends Controller
{
    public function index()
	{
		$brand= Brand::all();
		return view('admin.brand.index');
	}
	public function anyData()
	{
		return Datatables::of(Brand::query())
		->addColumn('action', function ($brand) {
			return'
			<a id="editSp" edit="'. $brand->id .'" class="btn btn-xs btn-info">Sửa</a>
			<a id="deleteSp" delete="'. $brand->id .'" class="btn btn-xs btn-danger">Xóa</a>
			';
		})
		->setRowId('tr-{{$id}}')
		->make(true);
	}
	public function store(Request $request)
	{
		$data['name'] = $request['name'];
		$data['slug'] = str_slug($request['name']);
		$brand = Brand::create($data);
		return response()->json(['data' => $brand], 200);
	}
	public function destroy($id)
	{
		return DB::table('brands')->where('id',$id)->delete();
	}
	public function edit($id)
	{
		return Brand::find($id);
	}
	public function update(Request $request, $id)
    {
        $data['name'] = $request['name'];
        $data['slug'] = str_slug($request['name']);
        Brand::updateData($id, $data);
        $brand = Brand::find($id);
        return $brand;
    }
    public function Export()
    {
    	$brand = Brand::select('name','slug')->get();
    	return Excel::create('data_brand', function($excel) use ($brand){
    		$excel->sheet('mysheet', function($sheet) use ($brand){
    			$sheet->fromArray($brand);
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
    				$brand = new Brand();
    				$brand->name = $value->name;
    				$brand->slug = $value->slug;
    				$brand->save();
    			}
    		}
    	}
    	return back();
    }
}
