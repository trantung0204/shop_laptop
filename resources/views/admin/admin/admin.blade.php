@extends('admin.layouts.master')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Admin</h3>
					<a class="btn btn-success add_button"  data-toggle="modal" href='#add' >Add more admins</a> 
					<button class="btn btn-primary" data-toggle="modal" href='#eximForm'><i class="fa fa-table" aria-hidden="true"></i> Excel import | export</button>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
	              <table id="admin-table" data-url="{{route('getAdmins')}}" class="table table-bordered table-striped">
	                <thead>
		                <tr>
		                  <th>#</th>
		                  <th>Ảnh đại diện</th>
		                  <th>Tên</th>
		                  <th>Email</th>
		                  <th>Ngày tạo</th>
		                  <th>Cập nhật</th>
		                  <th>Quyền admin</th>
		                  <th>Hành động</th>
		                </tr>
	                </thead>
	                <tfoot>
		                <tr>
		                  <th>#</th>
		                  <th>Ảnh đại diện</th>
		                  <th>Tên</th>
		                  <th>Email</th>
		                  <th>Ngày tạo</th>
		                  <th>Cập nhật</th>
		                  <th>Quyền admin</th>
		                  <th>Hành động</th>
		                </tr>
	                </tfoot>
	              </table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>

  <div class="modal fade" id="upload">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="title-detail-image">Cập nhật ảnh đại diện</h4>
        </div>
        <div class="modal-body">

          <form id="images-form" action="" method="POST" class="form-inline" data-url='' role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{-- <div class="col-sm-4 form-group">
              <label for="choose_color">Choose Color</label>
              <select name="choose_color" id="choose_color" class="form-control" required="required">
                
                  
                
              </select>
            </div>
            <input type="hidden" name="image_product_id" id="image_product_id" value=""> --}}
            <div class="col-sm-6 form-group">
              <label for="">Chọn ảnh</label>
              <input  type="file" id="uploadFile" name="uploadFile" class="form-control">
            </div>
          
            
          
            <button type="submit" class="btn btn-primary" id="upload_submit" name='submitImage'>Tải ảnh lên</button>
          </form>

          <div class="col-sm-12" id="image_preview"></div>
	        <form id="edit-form"  method="POST" role="form" >
	          {{csrf_field()}}<!-- sinh token -->
	          <div class="form-group">
	            <label for="name">Tên</label>
	            <input name="name" type="text" id="edit_name" class="form-control" placeholder="Tên" required="true">
	          </div>   

	          <div class="form-group">
	            <label for="name">Email</label>
	            <input name="email" type="email" id="edit_email" class="form-control" placeholder="Email" required="true">
	          </div>   

	          <div class="form-group">
	            <label for="name">Mật khẩu</label>
	            <input name="password" type="password" id="edit_password" class="form-control" placeholder="Mật khẩu" required="true">
	          </div>   

	          <div class="form-group">
	            <label for="name">Nhập lại mật khẩu</label>
	            <input name="repassword" type="password" id="re_edit_password" class="form-control" placeholder="Xác nhận mật khẩu" required="true">
	          </div> 

	          <div class="checkbox">
	            	<label>
	            		<input name="superAdmin" id="edit_super_admin" type="checkbox" value="" >
	            		Quyền Admin?
	            	</label>
	          </div>  
	        
	          
	        </div>
	        <div class="modal-footer">
	          <button id="edit-submit"  type="submit" class="btn btn-primary">Xác nhận</button>
	        </form>
        </div>
      </div>
    </div>
  </div> 

<div class="modal fade" id="add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Thêm tài khoản quản trị</h4>
        </div>
        <div class="modal-body">
        <form id="add-new"  method="POST" role="form"  data-url='{{route("admins.store")}}' >
          {{csrf_field()}}<!-- sinh token -->
	          <div class="form-group">
	            <label for="name">Tên</label>
	            <input name="name" type="text" id="add_name" class="form-control" placeholder="Tên" required="true">
	          </div>   

	          <div class="form-group">
	            <label for="name">Email</label>
	            <input name="email" type="email" id="add_email" class="form-control" placeholder="Email" required="true">
	          </div>   

	          <div class="form-group">
	            <label for="name">Mật khẩu</label>
	            <input name="password" type="password" id="add_password" class="form-control" placeholder="Mật khẩu" required="true">
	          </div>   

	          <div class="form-group">
	            <label for="name">Nhập lại mật khẩu</label>
	            <input name="repassword" type="password" id="re_add_password" class="form-control" placeholder="Xác nhận" required="true">
	          </div>   
	          <div class="checkbox">
	            	<label>
	            		<input name="superAdmin" id="add_super_admin" type="checkbox" value="" >
	            		Quyền admin?
	            	</label>
	          </div>  
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Xác nhận</button>
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>


<div class="modal fade" id="eximForm">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Export/Import Contact</h4>
			</div>
			<div class="modal-body">
				<form action="{{ route('admins.import') }}" method="POST" role="form" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="" style="float: left;width: 15%;">Export</label>
						<a href="{{ route('admins.export') }}" class="btn btn-success form-control" style="float: left;width: 12%;margin-top: -8px;">
							Export
						</a>
					</div>

					<div class="form-group" style="clear: both">
						<label for="" style="margin-top: 30px;float: left;width: 15%;margin-bottom: 30px;">		Import
						</label>

						<input style="float: left;width: 70%;margin-top: 25px;" type="file" class="form-control" id="file" name="file"  autofocus required>
					</div>			
			
					<div class="modal-footer" style="clear: both">
						<button type="submit" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>

  {{-- <div class="modal fade" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Edit info</h4>
        </div>
        <div class="modal-body">
        <form id="edit-form"  method="POST" role="form" >
          {{csrf_field()}}<!-- sinh token -->
          <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" id="edit_name" class="form-control" placeholder="Post title" required="true">
          </div>   

          <div class="form-group">
            <label for="name">Password</label>
            <input name="password" type="password" id="edit_password" class="form-control" placeholder="Post title" required="true">
          </div>   

          <div class="form-group">
            <label for="name">Re Password</label>
            <input name="repassword" type="password" id="re_edit_password" class="form-control" placeholder="Post title" required="true">
          </div>   
        
          
        </div>
        <div class="modal-footer">
          <button id="edit-submit"  type="submit" class="btn btn-primary">Submit</button>
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
@section('css')
<style type="text/css" media="screen">
  .table-row td{
    vertical-align: middle !important;
  }
  #image_preview{
    margin-top: 30px;
  }
  .image-append{
     height:100px; 
     display:inline-block; 
     opacity: 0.8;
     transition: 0.2s;
  }
  .image-append:hover{
    opacity: 1;
  }
  .image-div{
    position: relative;
    display: inline-block;
    box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.15);
    margin-right: 15px; 
    margin-bottom: 15px;
    border-radius: 6px;
  }
  .btn-del-image{
    position: absolute;
    transform: translate(50%, 50%);
    top: -20px ;
    right: 0px ;
    color: #D73925;
    font-size: 20px;
    cursor: pointer;
    background: white;
    border-radius: 50%;
  }
  .add_button{
  	margin-left: 30px;
  }
</style>
@endsection
@section('js')
<script type="text/javascript" charset="utf-8">
	var asset="{{ asset('/') }}";
	console.log(asset);
</script>
<script src="{{ asset('admin_asset/js/ajax_admin.js') }}"></script>
{{-- <script>
$(function() {
    $('#admin-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('getAdmins') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'avatar', name: 'name' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action' }
        ]
    });

});
</script>
 --}}@endsection