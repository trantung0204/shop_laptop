@extends('admin.layouts.master')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title" id="titleAdmin">Người dùng</h3>
					<button class="btn btn-primary" data-toggle="modal" href='#add'><i class="glyphicon glyphicon-plus">
					</i>&nbsp&nbsp Thêm mới</button>
					{{-- <button class="btn btn-sm btn-primary" data-toggle="modal" href='#eximForm'><i class="glyphicon glyphicon-plus"> Export / Import</i></button> --}}
					<a id="export_button" href="{{ route('user.export') }}" class="btn btn-success">
						<i class="glyphicon glyphicon-download-alt"></i>
						&nbsp&nbsp Xuất excel
					</a>
				</div>
				
				<!-- /.box-header -->
				<div class="box-body">
					<table id="users-table" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Stt</th>
								<th>Tên người dùng</th>
								<th>Ảnh đại diện</th>
								<th>Email</th>
								<th>Số điện thoại</th>
								<th>Địa chỉ</th>
								<th>Hành động</th>
							</tr>
						</thead>
						
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
<div class="modal fade" id="add">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Thêm mới</h4>
			</div>
			<div class="modal-body">
				<form id="add_new" method="POST" role="form">			
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" id="name" placeholder="Nhập">
					</div>					
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Nhập">
					</div>
					<div class="form-group">
						<label for="">Mobile</label>
						<input type="number" class="form-control" id="mobile" placeholder="Nhập">
					</div>
					<div class="form-group">
						<label for="">Address</label>
						<input type="text" class="form-control" id="address" placeholder="Nhập">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Nhập">
					</div>
					<div class="form-group">
						<label for="">Avatar</label>
						<input type="file" class="form-control" name="avatar" id="avatar" >
					</div>
					<div id="DsAnh"></div>

					<button type="submit" class="btn btn-primary">Thêm</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="editP">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Sửa thông tin</h4>
			</div>
			<div class="modal-body">
				<form id="edit_new" method="POST" role="form">
					{{csrf_field()}}
					<input type="hidden" name="" id="edit_id">
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" id="edit_name" placeholder="Nhập">
					</div>					
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" class="form-control" id="edit_email" placeholder="Nhập">
					</div>
					<div class="form-group">
						<label for="">Mobile</label>
						<input type="number" class="form-control" id="edit_mobile" placeholder="Nhập">
					</div>
					<div class="form-group">
						<label for="">Address</label>
						<input type="text" class="form-control" id="edit_address" placeholder="Nhập">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="text" class="form-control" id="edit_password" placeholder="Nhập">
					</div>
					<div class="form-group">
						<label style="width: 100%" for="">Avatar</label>
						<img style="margin-bottom: 3px" width="100px" id="old_avatar" src="">
						<div id="new_avatar"></div>
						<input type="file" class="form-control" name="edit_Avatar" id="edit_Avatar" >
					</div>

					<button type="submit" class="btn btn-primary">Sửa</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
@section('js')
<script type="text/javascript">
	$(function () {
		var userTable = $('#users-table').DataTable({
			processing: true,
			order : [[ 0, 'desc' ]],
			ordering: true,
			serverSide: true,
			ajax: '{!! route('user.anyData') !!}',
			columns: [
			{ data: 'id', name: 'id' },
			{ data: 'name', name: 'name' },
			{ data: 'avatar', name: 'avatar' },
			{ data: 'email', name: 'email' },
			{ data: 'mobile', name: 'mobile' },
			{ data: 'address', name: 'address' },
			{ data: 'action', name: 'action' },
			]
		});
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
			}
		});
		$("#avatar").change(function(){
			$('#DsAnh').html("");
			var total_file=document.getElementById("avatar").files.length;
			for(var i=0;i<total_file;i++)
			{
				$('#DsAnh').append("<img class='suaAnh' src='"+URL.createObjectURL(event.target.files[i])+"'>");
			}
		});
		$('#add_new').on('submit',function(e){
			e.preventDefault();			
			var newPost = new FormData();
			var file = $('#avatar').get(0).files[0];	
			newPost.append('name',$('#name').val());
			newPost.append('email',$('#email').val());
			newPost.append('mobile',$('#mobile').val());
			newPost.append('address',$('#address').val());
			newPost.append('password',$('#password').val());
			newPost.append('avatar',file);
			$.ajax({				
				type: 'post',
				url: '{{ route('user.store') }}',
				dataType:'json',
				data: newPost,
				async:false,
				processData: false,
				contentType: false,
				success: function (response){
					console.log(response);
					toastr.success('Thêm thành công!');								
					userTable.ajax.reload();
					document.getElementById("add_new").reset();
					$('#add').modal('hide');
					$('#DsAnh').html("");
				},
				error: function (error) {
					//500
				}
			})	
		});	
		$(document).on('click', '#deleteSp', function (e) {
			var id = $(this).attr('delete');
			e.preventDefault();
			swal({
				dangerMode: true,
				title: "Bạn có muốn xóa viết này không?",
				icon: "warning",
				buttons: {
					cancel: 'Hủy',
					confirm: 'Xóa'
				}
			})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						type: "delete",
						url: '{{asset("")}}admin/user/delete/' + id,
						success: function(res)
						{
							toastr.success('Bài viết đã được xóa!', "");
							$('#tr-' + id).remove();
						},
					});
				}
			});
		});
		$(document).on('click', '#editSp', function() {
			$('#editP').modal('show');
			var id = $(this).attr('edit');
			$.ajax({
				type: 'get',
				url: '{{asset("")}}admin/user/edit/' + id,
				success: function(response){
					$('#edit_id').val(response.id);
					$('#edit_name').val(response.name);
					$('#edit_email').val(response.email);
					$('#edit_mobile').val(response.mobile);
					$('#edit_address').val(response.address);
					$('#old_avatar').attr('src','{{asset('')}}storage/'+response.avatar+'');	
				}
			})
		});
		$("#edit_Avatar").change(function(){
			$('#new_avatar').html("");
			$('#old_avatar').remove();
			var total_file=document.getElementById("edit_Avatar").files.length;
			for(var i=0;i<total_file;i++)
			{
				$('#new_avatar').append("<img class='suaAnh2' src='"+URL.createObjectURL(event.target.files[i])+"'>");
			}
		});
		$('#edit_new').on('submit',function(e) {			
			e.preventDefault();
			var id = $('#edit_id').val();
			var newPost = new FormData();
			var file = $('#edit_Avatar').get(0).files[0];	
			
			newPost.append('name',$('#edit_name').val());
			newPost.append('email',$('#edit_email').val());
			newPost.append('mobile',$('#edit_mobile').val());				
			newPost.append('address',$('#edit_address').val());				
			newPost.append('password',$('#edit_password').val());				
			newPost.append('avatar',file);
			//console.log(newPost);
			$.ajax({
				type: 'post',
				url: '{{asset("")}}admin/user/update/' + id,
				data: newPost,
				dataType:'json',
				async:false,
				processData: false,
				contentType: false,
				success: function (response){
					$('#editP').modal('hide');
					//console.log(response);
					toastr.success('Sửa thành công!');
					
					$('#edit_id').val(response.id);
					userTable.ajax.reload();
				},
				error: function (error) {
					//toastr.warning(error.responseJSON.errors.name);
				}
			})
		});

		$(document).on('click', '#sendEmail', function() {
			var id = $(this).attr('sendEmail');
			$.ajax({
				type: 'post',
				url: '{{asset("")}}admin/user/sendMail/' + id,
				success: function(response){
					toastr.success('Gửi email thành công!');
				}
			})
		})
		
	})
</script>

@endsection