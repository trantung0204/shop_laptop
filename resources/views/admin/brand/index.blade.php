@extends('admin.layouts.master')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title" id="titleAdmin">Thương hiệu</h3>
					<button class="btn btn-primary" data-toggle="modal" href='#add'><i class="glyphicon glyphicon-plus">
					</i>&nbsp&nbsp Thêm mới</button>

					<a id="export_button" href="{{ route('brand.export') }}" class="btn btn-success">
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
								<th>Tên thương hiệu</th>
								<th>Tên đường dẫn</th>
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
			<form id="add_new" method="POST" role="form">	
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Thêm mới</h4>
				</div>
				<div class="modal-body">		
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Nhập">
						</div>

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Thêm</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
				</div>
			</form>
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
						<label for="">Tên sản phẩm:</label>
						<input type="text" class="form-control" id="edit_name" laceholder="Nhập">
					</div>

					<button type="submit" class="btn btn-primary">Sửa</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
	</div>
</div>

{{-- <div class="modal fade" id="eximForm">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Export/Import Contact</h4>
			</div>
			<div class="modal-body">
				<form action="{{ route('brand.import') }}" method="POST" role="form" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="" style="float: left;width: 15%;">Export</label>
						<a href="{{ route('brand.export') }}" class="btn btn-success form-control" style="float: left;width: 12%;margin-top: -8px;">
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
</div> --}}
@endsection
@section('js')
<script type="text/javascript">
	$(function () {
		var userTable = $('#users-table').DataTable({
			processing: true,
			order : [[ 0, 'desc' ]],
			ordering: true,
			serverSide: true,
			ajax: '{!! route('brand.anyData') !!}',
			columns: [
			{ data: 'id', name: 'id' },
			{ data: 'name', name: 'name' },
			{ data: 'slug', name: 'slug' },
			{ data: 'action', name: 'action' },
			]
		});
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
			}
		});
		$('#add_new').on('submit',function(e) {
			e.preventDefault();
			$.ajax({				
				type: 'post',
				url: '{{ route('brand.store') }}',
				data: {
					name: $('#name').val(),
				},
				success: function (response){
					//console.log(response);
					$('#add').modal('hide');
					toastr.success('Thêm thành công!');		
					document.getElementById("add_new").reset();
					userTable.ajax.reload();
				},
				error: function (error) {
					toastr.warning(error.responseJSON.errors.name);
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
						url: '{{asset("")}}admin/brands/delete/' + id,
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
				url: '{{asset("")}}admin/brands/edit/' + id,
				success: function(response){
					$('#edit_id').val(response.id);
					$('#edit_name').val(response.name);
				}
			})
		});
		$('#edit_new').on('submit',function(e) {
			e.preventDefault();
			var id = $('#edit_id').val();
			$.ajax({
				type: 'post',
				url: '{{asset("")}}admin/brands/update/' + id,
				data: {
					name: $('#edit_name').val(),
				},
				success: function (response){
					$('#editP').modal('hide');
					//console.log(response);
					toastr.success('Sửa thành công!');
					
					$('#edit_id').val(response.id);
					$('#edit_name').text(response.name);
					userTable.ajax.reload();
				},
				error: function (error) {
					//toastr.warning(error.responseJSON.errors.name);
				}
			})
		});

	})
</script>

@endsection