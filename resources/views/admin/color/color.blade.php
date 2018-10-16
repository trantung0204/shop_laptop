@extends('admin.layouts.master')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Danh sách màu sắc</h3>
					<a class="btn btn-success add_button"  data-toggle="modal" href='#add' >Thêm màu mới</a> 
          <button class="btn btn-primary" data-toggle="modal" href='#eximForm'><i class="fa fa-table" aria-hidden="true"></i> Excel import | export</button>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table  id="color-table" data-url="{{route('getColors')}}"  class="table table-bordered table-striped">
		                <thead>
		                <tr>
		                  <th>#</th>
		                  <th>Màu</th>
		                  <th>Tên</th>
		                  <th>Mã màu</th>
		                  <th>Ngày tạo</th>
		                  <th>Hành động</th>
		                </tr>
		                </thead>
		                <tfoot>
		                <tr>
		                  <th>#</th>
		                  <th>Màu</th>
		                  <th>Tên</th>
		                  <th>Mã màu</th>
		                  <th>Ngày tạo</th>
		                  <th>Hành động</th>
		                </tr>
		                </tfoot>
					</table>
					{{-- <a class="btn btn-success" data-toggle="modal" href='#add' >Add more colors</a>  --}}
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
	  <div class="modal fade" id="add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Thêm mới màu</h4>
        </div>
        <div class="modal-body">
        <form id="add-new"  method="POST" role="form"  data-url='{{route("colors.store")}}' >
          {{csrf_field()}}<!-- sinh token -->
          <div class="form-group">
            <label for="name">Tên màu</label>
            <input name="name" type="text" id="name" class="form-control" placeholder="Post title" required="true">
          </div>        
          <div class="form-group">
            <label for="name">Mã màu</label>
            <input name="code" type="color" id="code" placeholder="Post title" required="true">
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

  <div class="modal fade" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Sửa màu</h4>
        </div>
        <div class="modal-body">
        <form id="edit-form"  method="POST" role="form" >
          {{csrf_field()}}<!-- sinh token -->
          <div class="form-group">
            <label for="name">Tên màu</label>
            <input name="name" type="text" id="edit_name" class="form-control" placeholder="Post title" required="true">
          </div>        
          <div class="form-group">
            <label for="name">Mã màu</label>
            <input name="code" type="color" id="edit_code" placeholder="Post title" required="true" >
          </div>        
        
          
        </div>
        <div class="modal-footer">
          <button id="edit-submit"  type="submit" class="btn btn-primary">Xác nhận</button>
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
        <form action="{{ route('colors.import') }}" method="POST" role="form" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="" style="float: left;width: 15%;">Export</label>
            <a href="{{ route('colors.export') }}" class="btn btn-success form-control" style="float: left;width: 12%;margin-top: -8px;">
              Export
            </a>
          </div>

          <div class="form-group" style="clear: both">
            <label for="" style="margin-top: 30px;float: left;width: 15%;margin-bottom: 30px;">   Import
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

</section>
@endsection
@section('js')
	<script src="{{ asset('admin_asset/js/ajax_color.js') }}"></script>
@endsection
@section('css')
<style type="text/css" media="screen">
  .table-row td{
    vertical-align: middle !important;
  }
  .add_button{
  	margin-left: 30px;
  }
</style>
@endsection