<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Size;
use DB;
use Excel;
use App\Http\Requests\CsvImportRequest;


class SizeController extends Controller
{
	public function index()
	{
		return view('admin.size.index');
	}
	public function anyData()
	{
		return Datatables::of(Size::query())
		->addColumn('action', function ($size) {
			return'
			<a id="editSp" edit="'. $size->id .'" class="btn btn-xs btn-info">Sửa</a>
			<a id="deleteSp" delete="'. $size->id .'" class="btn btn-xs btn-danger">Xóa</a>
			';
		})
		->setRowId('tr-{{$id}}')
		->make(true);
	}
	public function store(Request $request)
	{
		$data['size'] = $request['size'];
		$size = Size::create($data);
		return response()->json(['data' => $size], 200);
	}
	public function destroy($id)
	{
		return DB::table('sizes')->where('id',$id)->delete();
	}
	public function edit($id)
	{
		return Size::find($id);
	}
	public function update(Request $request, $id)
    {
        $data['size'] = $request['size'];
        Size::updateData($id, $data);
        $size = Size::find($id);
        return $size;
    }
    public function Export()
    {
    	$size = Size::select('size')->get();
    	return Excel::create('data_size', function($excel) use ($size){
    		$excel->sheet('mysheet', function($sheet) use ($size){
    			$sheet->fromArray($size);
    		});
    	})->download('xls');
    }
    public function parseImport(Request $request)
    {
    	if ($request->hasFile('file')) {
    		$path = $request->file('file')->getRealPath();
    		$data = Excel::load($path, function($reader){})->get();
    		// if(!empty($data) && $data->count()){
    		// 	foreach ($data as $key => $value) {
    		// 		$size = new Size();
    		// 		$size->size = $value->size;
    		// 		$size->save();
    		// 	}
    		// }
    	}
    	//return back();
    	return $data;
    }
}