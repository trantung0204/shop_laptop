<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use \DB;
use Excel;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin.admin');
    }
    public function anyData()
    {
        //return Datatables::of(Product::query())->make(true);
        return Datatables::of(Admin::all())
        ->addColumn('action', function ($admin) {
            return'
            <button type="button" class="btn btn-info btn-edit" data-url="'.route('admins.updateAvatar',$admin->id).'"data-id="'.$admin->id.'" edit-data-url="'.route('admins.update',$admin->id).'" update-data-url="'.route('admins.update',$admin->id).'"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa thông tin</button>
            <button type="button" class="btn btn-danger btn-delete" data-url="'.route('admins.destroy',$admin->id).'" data-id="'.$admin->id.'"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
            ';
            
        })
        ->editColumn('avatar', function ($admin) {
            if (!empty($admin->avatar)) {
                $src=$admin->avatar;
                $src = str_replace("public",asset("/")."storage",$src);
                return '<img class="img-responsive center-block" style="width:70px;border-radius:5px;"  src="'.$src.'" />';
            } else {
                return '<img class="img-responsive center-block" style="width:70px;border-radius:5px;" src="'. asset("admin_asset/dist/img/avatar04.png").'"/>';
            }
        })
        ->editColumn('super_admin', function ($admin) {
            if ($admin->super_admin==1) {
                return '<div style="width:100%; text-align: center; font-size:2em; color: #008D4C;"><i class="fa fa-check-circle" aria-hidden="true"></i></div>';
            } else {
                return '<div style="width:100%; text-align: center; font-size:2em; color:#D73925;"><i class="fa fa-times-circle" aria-hidden="true"></i></div>';
            }
        })
        // ->setRowClass(function ($image) {
        //     return $image->id % 2 == 0 ? 'pink' : 'green';
        // })
        //->editColumn('image', '<img src=""/>')
        //->editColumn('brand_id', 'tung{{$category_id}}')
        //->editColumn('category_id', Category::where('id', '=',$category_id)->first()->name)
        ->editColumn('created_at', function ($admin) {
            return $admin->created_at->format('d/m/Y');
        })
        ->editColumn('updated_at', function ($admin) {
            return $admin->updated_at->format('d/m/Y');
        })
        ->setRowId('admin-row-{{$id}}')
        ->setRowClass('table-row')
        ->rawColumns(['action','avatar','super_admin'])
        ->make(true);
    }
    
    public function updateAvatar(Request $request, $id)
    {      

        $link='';
        if($file=$request->file('image')){
                $link = Storage::disk('local')->put('public/avatars', $file);
                DB::table('admins')->where('id', $id)->update(['avatar' => $link]);
        }
        return response()->json(['data' => $link], 200);
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
        $data=array();
        $data['name']=$request['name'];
        $data['email']=$request['email'];
        if ($request['password']==$request['repassword']) {
            $data['password']=Hash::make($request['password']);
        }
        $data['super_admin']=$request['super_admin'];
        // $result = Admin::updateData($id,$data);
        return response()->json(['data' => Admin::create($data)], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Admin::find($id);
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
        $data=array();
        $data['name']=$request['name'];
        $data['email']=$request['email'];
        if ($request['password']==$request['repassword']) {
            $data['password']=Hash::make($request['password']);
        }
        $data['super_admin']=$request['super_admin'];
        $ad=Admin::find($id);
        $result = $ad->update($data);
        return response()->json([
                'data'=>$data
            ], 200);
        if($result){
            $admin= Admin::find($id);
            return response()->json([
                'data'=>$admin
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
        Admin::del($id);
    }
    public function Export()
    {
        $admins = Admin::select('id','name','email','created_at','updated_at')->get();
        return Excel::create('data_admin', function($excel) use ($admins){
            $excel->sheet('mysheet', function($sheet) use ($admins){
                $sheet->fromArray($admins);
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
                    $admin = new Admin();
                    $admin->name = $value->name;
                    $admin->email = $value->email;
                    $admin->password = Hash::make('123456');
                    $admin->save();
                }
            }
        }
        return back();
    }
}
