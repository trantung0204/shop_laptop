@extends('admin.layouts.master')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title" id="titleAdmin">Kích cỡ</h3>
					<button class="btn btn-primary" data-toggle="modal" href='#add'><i class="glyphicon glyphicon-plus">
					</i>&nbsp&nbsp Thêm mới</button>

					<a id="export_button" href="{{ route('size.export') }}" class="btn btn-success">
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
								<th>Kích cỡ</th>
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
						<label for="">Size</label>
						<input type="number" step="0.1" class="form-control" id="size" placeholder="Nhập">
					</div>
					
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
						<label for="">Size:</label>
						<input type="number" step="0.1" class="form-control" id="edit_size" laceholder="Nhập">
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
				<form id="import_parse"  method="POST" role="form" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="" style="float: left;width: 15%;">Export</label>
						<a href="{{ route('size.export') }}" class="btn btn-success form-control" style="float: left;width: 12%;margin-top: -8px;">
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
			ajax: '{!! route('size.anyData') !!}',
			columns: [
			{ data: 'id', name: 'id' },
			{ data: 'size', name: 'size' },
			{ data: 'action', name: 'action' },
			]
		});
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
			}
		});
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});
		$('#add_new').on('submit',function(e) {
			e.preventDefault();
			$.ajax({				
				type: 'post',
				url: '{{ route('size.store') }}',
				data: {
					size: $('#size').val(),
				},
				success: function (response){
					//console.log(response);
					$('#add').modal('hide');
					toastr.success('Thêm thành công!');		
					document.getElementById("add_new").reset();
					userTable.ajax.reload();
				},
				error: function (error) {
					//toastr.warning(error.responseJSON.errors.name);
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
						url: '{{asset("")}}admin/sizes/delete/' + id,
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
				url: '{{asset("")}}admin/sizes/edit/' + id,
				success: function(response){
					$('#edit_id').val(response.id);
					$('#edit_size').val(response.size);
				}
			})
		});
		$('#edit_new').on('submit',function(e) {
			e.preventDefault();
			var id = $('#edit_id').val();
			$.ajax({
				type: 'post',
				url: '{{asset("")}}admin/sizes/update/' + id,
				data: {
					size: $('#edit_size').val(),
				},
				success: function (response){
					$('#editP').modal('hide');
					//console.log(response);
					toastr.success('Sửa thành công!');
					
					$('#edit_id').val(response.id);
					$('#edit_size').text(response.size);
					userTable.ajax.reload();
				},
				error: function (error) {
					//toastr.warning(error.responseJSON.errors.name);
				}
			})
		});
		$('#import_parse').on('submit',function(e) {
			e.preventDefault();			
			var newPost = new FormData();
			var file = $('#file').get(0).files[0];
			newPost.append('file',file);
			$.ajax({				
				type: 'post',
				url: '{{ route('size.import_parse') }}',
				dataType:'json',
				data: newPost,
				async:false,
				processData: false,
				contentType: false,
				success: function (response){
					console.log(response);
					toastr.success('Thêm thành công!');								
					$('#data_excel').modal('show');

				},
				error: function (error) {
					//500
				}
			})	
		})
	})
</script>

@endsection