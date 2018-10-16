<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\User;
use Hash;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CsvImportRequest;
use Excel;

class UserController extends Controller
{
	public function index()
	{
		return view('admin.user.index');
	}
	public function anyData()
	{
		return Datatables::of(User::query())
		->addColumn('action', function ($user) {
			return'
			<a id="editSp" edit="'. $user->id .'" class="btn btn-xs btn-info">Sửa</a>
			<a id="deleteSp" delete="'. $user->id .'" class="btn btn-xs btn-danger">Xóa</a>
			<a id="sendEmail" sendEmail="'. $user->id .'" class="btn btn-xs btn-default">Gửi email</a>
			';
		})
		->editColumn('avatar', '<img style="width:120px" src="'.asset('storage/{{$avatar}}').'"/>')
		->setRowId('tr-{{$id}}')
		->rawColumns(['avatar', 'action'])
		->make(true);
	}
	public function store(Request $request)
	{
		//return $request;
		if ($request->hasFile('avatar')) {
			$data['name'] = $request['name'];
			$data['email'] = $request['email'];
			$data['mobile'] = $request['mobile'];
			$data['address'] = $request['address'];
			$data['password'] = Hash::make($request['password']);
			$data['avatar'] = $request->avatar->store('public/avatars');
			$user = User::create($data);
		}else{
            //$imageName='http://localhost:8800/images/posts/userDefault.png';
		}       
		return response()->json(['data' => $user], 200);
	}
	public function destroy($id)
	{
		$avatar=DB::table('users')->find($id)->avatar;
		Storage::disk('local')->delete('public/'.$avatar);
		return DB::table('users')->where('id',$id)->delete();
	}
	public function edit($id)
	{
		return User::find($id);
	}
	public function update(Request $request, $id)
	{
		if ($request->hasFile('avatar')) {
			$data['name'] = $request['name'];
			$data['email'] = $request['email'];
			$data['mobile'] = $request['mobile'];
			$data['address'] = $request['address'];
			$data['password'] = Hash::make($request['password']);
			$data['avatar'] = $request->avatar->store('avatars');
			User::updateData($id, $data);
			$user = User::find($id);
		}else{
			$data['name'] = $request['name'];
			$data['email'] = $request['email'];
			$data['mobile'] = $request['mobile'];
			$data['address'] = $request['address'];
			$data['password'] = Hash::make($request['password']);
			User::updateData($id, $data);
			$user = User::find($id);
            //$imageName='http://localhost:8800/images/posts/userDefault.png';
		}       
		return response()->json(['data' => $user], 200);
	}

	public function ship(Request $request, $orderId)
    {
        $user = User::findOrFail($orderId);

        // Ship order...

        Mail::to($user->email)->send(new OrderShipped($user));
        return $user;
    }
    public function Export()
    {
    	$user = User::select('name','email','mobile','address')->get();
    	return Excel::create('data_user', function($excel) use ($user){
    		$excel->sheet('mysheet', function($sheet) use ($user){
    			$sheet->fromArray($user);
    		});
    	})->download('xls');
    }
    // public function parseImport(CsvImportRequest $request)
    // {
    // 	$path = $request->file('csv_file')->getRealPath();

    // 	if($request->has('header')) {
    // 		$data = Excel::load($path, function($reader) {})->get()->toArray();	
    // 	} else{
    // 		$data = array_map('str_getcsv', file($path));
    // 	}

    // 	if(count($data) > 0) {
    // 		if ($request->has('header')) {
    // 			$csv_header_files = [];
    // 			foreach ($data[0] as $key => $value) {
    // 				$csv_header_files[] = $key;
    // 			}
    // 			$csv_data = array_slice($data, 0, 2);

    // 			$csv_data_file = CsvData::create([
    				
    // 			]);
    // 		}
    // 	}
    // }

}
