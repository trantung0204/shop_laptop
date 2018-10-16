<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Category;
use DB;
use Excel;

class CategoryController extends Controller
{
	public function index()
	{
		$category= Category::all();
		return view('admin.category.index',compact('category'));
	}
	public function anyData()
	{
		return Datatables::of(Category::query())
		->addColumn('action', function ($category) {
			$str='
			<a id="editSp" edit="'. $category->id .'" class="btn btn-xs btn-info">Sửa</a>';
			if ($category->parent_id!=null) {
				$str.='<a id="deleteSp" delete="'. $category->id .'" class="btn btn-xs btn-danger">Xóa</a>
				';
			}
			return $str;
		})
		->editColumn('parent_id', function ($category) {
			if ($category->parent_id!=null) {
				return Category::find($category->parent_id)->name;
			}else{
				return 'Danh mục gốc';
			}
		})
		->setRowId('tr-{{$id}}')
		->make(true);
	}
	public function store(Request $request)
	{
		$data = $request->all();
		if($data['parent_id']==0){
			unset($data['parent_id']);
		}
		$category = Category::create($data);
		$this->addSlug($category->id);
		return response()->json(['data' => $category], 200);
	}

	public function addSlug($id)
	{
		$category = Category::find($id);
		$slug = $category->slug = str_slug($category->name) . '-' . $id;
		$category->save();
	}
	public function destroy($id)
	{
		return DB::table('categories')->where('id',$id)->delete();
	}
	public function edit($id)
	{
		return Category::find($id);
	}
	public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = str_slug($request['name']) . '-' . $id;
		if($data['parent_id']==0){
			$data['parent_id']=null;
		}
        Category::updateData($id, $data);
        $category = Category::find($id);
        return $category;
    }
    public function Export()
    {
    	$category = Category::select('name','slug')->get();
    	return Excel::create('data_category', function($excel) use ($category){
    		$excel->sheet('mysheet', function($sheet) use ($category){
    			$sheet->fromArray($category);
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
    				$category = new Category();
    				$category->name = $value->name;
    				$category->slug = $value->slug;
    				$category->save();
    			}
    		}
    	}
    	return back();
    }
    public function loadCategory()
    {
    	return response()->json([
	        	'data' => Category::all(),
	        ], 200);
    }
}
