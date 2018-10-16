	
function slug(title)
{
    var slug;
 
    //Lấy text từ thẻ input title 
 
    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();
 
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    //document.getElementById('slug').value = slug;
    return slug;
}

	$(function () {
		var url=$('#admin-table').attr('data-url');
	    var adminTable = $('#admin-table').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: url,
	        columns: [
	            { data: 'id', name: 'id' },
	            { data: 'avatar', name: 'name' },
	            { data: 'name', name: 'name' },
	            { data: 'email', name: 'email' },
	            { data: 'created_at', name: 'created_at' },
	            { data: 'updated_at', name: 'updated_at' },
	            { data: 'super_admin', name: 'super_admin' },
	            { data: 'action', name: 'action' }
	        ]
	    });
		/*$('.btn-info').click(function () {
			$('#show').modal('show');
		})*/
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('#add-new').on('submit',function (e) {
			e.preventDefault();
			var url = $(this).attr('data-url');
			console.log(url);
			var isSuperAdmin=0;
			if ($('#add_super_admin').prop('checked')) {
				isSuperAdmin=1;
			}

			$.ajax({
				type: 'post',
				url: url,
				data: {
					name: $('#add_name').val(),
					email: $('#add_email').val(),
					password: $('#add_password').val(),
					repassword: $('#re_add_password').val(),
					super_admin: isSuperAdmin,
				},
				success: function (response) {
					console.log("dfdf");
					$('#add').modal('hide');
					toastr.success('Add account success !');
					adminTable.ajax.reload();
				},
				error: function (error) {
					
				}
			})
		});

		$('#edit-form').on('submit',function (e) {
			e.preventDefault();
			var url=$('#edit-submit').attr('data-url');
			var id=$('#edit-submit').data('id');
			var isSuperAdmin=0;
			if ($('#edit_super_admin').prop('checked')) {
				isSuperAdmin=1;
			}
			$.ajax({
				type: 'put',
				url: url,
				data: {
					name: $('#edit_name').val(),
					email: $('#edit_email').val(),
					password: $('#edit_password').val(),
					repassword: $('#re_edit_password').val(),
					super_admin: isSuperAdmin,
				},
				success: function (response) {
					//console.log(response);
					$('#upload').modal('hide');
					console.log(isSuperAdmin);
					adminTable.ajax.reload();
					//$('#product-price-'+id).text(response.data.price+" $");
					toastr.success('Đã lưu thay đổi');
					//toastr.success('Thành công!');
					//$('#table-body').append('<tr><td>'+response.id+'</td><td>'+response.name+'</td> <td>'+response.price+' $</td> <td>'+response.created_at+'</td> <td>'+response.updated_at+'</td> <td> <button type="button" class="btn btn-xs btn-info" data-id="'+response.id+'">Show</button> <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" href="#edit-'+response.id+'">Edit</button>  </td> </tr>');
				},
				error: function (error) {
					
				}
			})
		});

		// $(document).on('click','.btn-info',function () {
		// 	$('#show').modal('show');
		// 	var url=$(this).data('url');
		// 	console.log(url);
		// 	$.ajax({
		// 		type: 'get',
		// 		url: url,

		// 		success: function (response) {
		// 			$("#detail-table-body").empty();
		// 			response.forEach(function (item, index) {
		// 				//alert('ok');
		// 				var status = (item.status == 1) ? "public" : "private";
		// 				$('#detail-table-body').append('<tr><td>'+(index+1)+'</td><td>'+item.title+'</td><td>'+status+'</td><td>'+item.created_at+'</td><td>'+item.updated_at+'</td></tr>');
		// 			})
		// 			/*$('#post-id').text(response.id);
		// 			$('#post-name').text(response.name);
		// 			$('#post-price').text(response.price+" $");
		// 			$('#post-created-at').text(response.created_at);
		// 			$('#post-updated-at').text(response.updated_at);*/
		// 		},
		// 		error: function (error) {
		// 		}
		// 	})
		// })
		
		// $(document).on('click','.btn-edit',function () {
		// 	$('#edit').modal('show');
		// 	var url=$(this).data('url');
		// 	//alert(id);
		// 	$.ajax({
		// 		type: 'get',
		// 		url: url,

		// 		success: function (response) {

		// 			$('#edit_name').val(response.name);
		// 		},
		// 		error: function (error) {
					
		// 		}
		// 	})
		// })

		$(document).on('click','.btn-delete',function () {
			/*if (confirm("Bạn có muốn xóa ?")) {
				var url=$(this).data('url');
				var id=$(this).data('id');
				$.ajax({
					type: 'delete',
					url: url,

					success: function (response) {
						//console.log(response);
						toastr.error('Đã xóa sản phẩm');
						$('#category-row-'+id).hide();
					},
					error: function (error) {
						
					}
				})
            }*/
            swal({
				  title: "Are you sure?",
				  text: "Once deleted, you will not be able to recover this category!",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) {
				    swal("Poof! Your category has been deleted!", {
				      icon: "success",
				    });
					//var id=$(this).data('id');
					var url=$(this).data('url');
					$.ajax({
						type: 'delete',
						url: url,

						success: function (response) {
							//console.log(response);
							toastr.error('Đã xóa sản phẩm');
							adminTable.ajax.reload();
							window.location.href = asset+'admin/login';
						},
						error: function (error) {
							
						}
					})
				  } 
				});
		})

		$(document).on('click','.btn-edit',function () {
			$('#upload').modal('show');
			//$('#image_preview').html("<img class='img-responsive center-block' style='width:200px;border-radius:5px;'  src='"+url(Storage::url($admin->avatar))+"' />");
			document.getElementById("images-form").reset();
			var url=$(this).attr('data-url');
			var id=$(this).attr('data-id');
			var edit_url=$(this).attr('edit-data-url');
			$('#edit-submit').attr('data-url',$(this).attr('update-data-url'));


			$('#images-form').attr('data-url',url);
			$('#images-form').attr('data-id',id);


			//$('#edit').modal('show');
			// var url=$(this).data('url');
			//alert(id);
			$.ajax({
				type: 'get',
				url: edit_url,

				success: function (response) {

					$('#edit_name').val(response.name);
					$('#edit_email').val(response.email);
					$('#edit_password').val("");
					$('#re_edit_password').val("");
					if (response.super_admin==1) {
						$('#edit_super_admin').prop('checked', true);
					}else{
						$('#edit_super_admin').prop('checked', false);
					}
					var src=response.avatar;
					if (src!=null) {
						src = src.replace("public", asset+"storage");
						$('#image_preview').html("<img class='img-responsive center-block' style='width:200px;heiborder-radius:5px;'  src='"+src+"' />");
					}else{
						$('#image_preview').html("<img class='img-responsive center-block' style='width:200px;heiborder-radius:5px;'  src='"+asset+"admin_asset/dist/img/avatar04.png' />");
					}
					
				},
				error: function (error) {
					
				}
			})

		})
		$("#uploadFile").change(function(){
			$('#image_preview').html("");
			var total_file=document.getElementById("uploadFile").files.length;
			for(var i=0;i<total_file;i++)
			{
				$('#image_preview').append("<img class='img-responsive center-block' style='width:200px;border-radius:5px;' src='"+URL.createObjectURL(event.target.files[i])+"'>"); //src="'.url(Storage::url($admin->avatar)).'"
			}
		});

		$('#images-form').on('submit',function(e) {
			e.preventDefault();
			var newPost = new FormData();
			//var urlImage=$("#image_preview").attr('data-url-image');
			var file = document.getElementById('uploadFile').files;	
			newPost.append('image',file[0]);		 
			var url=$('#images-form').attr('data-url');
			console.log(url);
			$.ajax({				
				type: 'post',
				url: url,
				data: newPost,
				dataType:'json',
				async:false,
				processData: false,
				contentType: false,
				success: function (response){
					toastr.success('Images were saved!');
					console.log('blabla');
					// $('#image_preview').html("");
					//$('#upload').modal('hide');
					adminTable.ajax.reload();
					
					$('.admin-avatar').attr('src')
				},
				error: function (error) {
					//500
				}
			})
		});
	});
