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
	var productDetailTable=null;
	var url=$('#product-table').attr('data-url');
    var productTable = $('#product-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: url,
        columns: [
            { data: 'id', name: 'products.id' },
            { data: 'image_link', name: 'image_link' },
            { data: 'code', name: 'products.code' },
            { data: 'name', name: 'products.name' },
            // { data: 'origin_price', name: 'products.origin_price' },
            // { data: 'sale_price', name: 'products.sale_price' },
            { data: 'brand_name', name: 'products.brand_id' },
            { data: 'category_name', name: 'products.category_id' },
            { data: 'created_at', name: 'products.created_at' },
            { data: 'slide', name: 'products.slide' },
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

	$('#add_button').on('click',function (e) {
		e.preventDefault();
		$('#add').modal('show');
		$('#product-detail-table-wapper').hide();
	});
	$('#add-form').on('submit',function (e) {
		e.preventDefault();
		var url = $(this).attr('data-url');
		console.log(url);
		var slide=0;
		if ($('#add_slide').prop('checked')) {
			slide=1;
		}
		$.ajax({
			type: 'post',
			url: url,
			data: {
				name: $('#add_name').val(),
				description: $('#add_description').val(),
				content: CKEDITOR.instances.editor_add_content.getData(),
				category_id: $('#add_category_id').val(),
				brand_id: $('#add_brand_id').val(),
				slug: slug($('#add_name').val()),
				slide: slide,
			},
			success: function (response) {
				// console.log("dfdf");
				$('#add').modal('hide');
				toastr.success('Success!');
				productTable.ajax.reload();
				$('#add_name').val(""),
				$('#add_description').val(""),
				$('#editor_add_content').val(""),
				$('#add_name').val("")
			},
			error: function (error) {
				
			}
		})
	});

	$('#edit-form').on('submit',function (e) {
		e.preventDefault();
		var url=$('#edit-submit').attr('data-url');
		var id=$('#edit-submit').data('id');
		var slide=0;
		if ($('#edit_slide').prop('checked')) {
			slide=1;
		}
		$.ajax({
			type: 'put',
			url: url,
			data: {
				name: $('#edit_name').val(),
				slug: slug($('#edit_name').val()),
				code: $('#edit_code').val(),
				description: $('#edit_description').val(),
				content: CKEDITOR.instances.editor_edit_content.getData(),
				brand_id: $('#edit_brand_id').val(),
				category_id: $('#edit_category_id').val(),
				slide: slide,
			},
			success: function (response) {
				//console.log(response);
				$('#edit').modal('hide');
				
				productTable.ajax.reload();
				//$('#product-price-'+id).text(response.data.price+" $");
				toastr.success('Đã lưu thay đổi');
				//toastr.success('Thành công!');
				//$('#table-body').append('<tr><td>'+response.id+'</td><td>'+response.name+'</td> <td>'+response.price+' $</td> <td>'+response.created_at+'</td> <td>'+response.updated_at+'</td> <td> <button type="button" class="btn btn-xs btn-info" data-id="'+response.id+'">Show</button> <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" href="#edit-'+response.id+'">Edit</button>  </td> </tr>');
			},
			error: function (error) {
				
			}
		})
	});

	$(document).on('click','.table-row',function () {
		$('#show').modal('show');
		var url=$(this).attr('data-url');
		console.log(url);
		$.ajax({
			type: 'get',
			url: url,

			success: function (response) {
				$("#detail-table-body").empty();
				// response.forEach(function (item, index) {
				// 	//alert('ok');
				// 	var status = (item.status == 1) ? "public" : "private";
				// 	$('#detail-table-body').append('<tr><td>'+(index+1)+'</td><td>'+item.title+'</td><td>'+status+'</td><td>'+item.created_at+'</td><td>'+item.updated_at+'</td></tr>');
				// })
				$('#product_name').text(response.name);
				$('#product_description').text(response.description);
				$('#product_origin_price').text(new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'USD' }).format(response.origin_price) );
				$('#product_sale_price').text(new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'USD' }).format(response.sale_price) );
				$('#product_content').html(response.content);
			},
			error: function (error) {
			}
		})
	})
	
	$(document).on('click','.btn-edit',function (e) {
		e.stopPropagation();
		$('#edit').modal('show');
		var url=$(this).data('url');
		//alert(id);
		$.ajax({
			type: 'get',
			url: url,

			success: function (response) {
				$('#edit_name').val(response.name);
				$('#edit_code').val(response.code);
				$('#edit_description').val(response.description);
				$('#edit_sale_price').val(response.sale_price);
				$('#edit_origin_price').val(response.origin_price);
				$('#edit_brand_id').val(response.brand_id);
				$('#edit_category_id').val(response.category_id);
				CKEDITOR.instances.editor_edit_content.setData(response.content);
				if (response.slide==1) {
					$('#edit_slide').prop('checked', true);
				}else{
					$('#edit_slide').prop('checked', false);
				}
				//$('#edit-submit').data("id", response.id);
				$('#edit-submit').attr("data-url", "/admin/products/"+response.id);
				$('#edit-submit').attr("data-id",response.id);
			},
			error: function (error) {
				
			}
		})
	})

	$(document).on('click','.btn-detail',function (e) {
		e.stopPropagation();
		// if ($(this).attr('data-category')==2) {
		// 	$('#product-detail-table .row-size').hide();
		// 	$('#product-detail-table .row-size').hide();
		// 	$('#product-detail-table .row-size').hide();
		// 	$('#product-detail-table .row-size').hide();
		// }
		$('#detail').modal('show');
		var url=$(this).attr('data-url');
		var urlAdd=$(this).attr('data-url-add');
		var code=$(this).attr('data-code');
		$('#add_code').val(code);
		$('#btn-add-detail').attr('data-url',urlAdd);

		console.log(url);

		productDetailTable = $('#product-detail-table').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: url,
	        destroy: true,
	        columns: [
	            { data: 'id', name: 'id' },
	            { data: 'product_code', name: 'product_details.product_code' },
	            { data: 'product_name', name: 'product_details.product_name' },
	            { data: 'size_name', name: 'product_details.size_name',class: 'row-size' },
	            { data: 'color_name', name: 'product_details.color_name',class: 'row-color' },
	            { data: 'cpu', name: 'product_details.cpu',class: 'row-cpu' },
	            { data: 'ram', name: 'product_details.ram',class: 'row-ram' },
	            { data: 'vga', name: 'product_details.vga',class: 'row-vga' },
	            { data: 'disk', name: 'product_details.disk',class: 'row-disk' },
	            { data: 'resolution', name: 'product_details.resolution',class: 'row-resolution' },
	            { data: 'action', name: 'action' }
	        ]
	    });
	})

	$(document).on('click','.btn-del',function (e) {
		e.stopPropagation();
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
				var url=$(this).attr('data-url');
				console.log(url);
				$.ajax({
					type: 'delete',
					url: url,

					success: function (response) {
						//console.log(response);
						toastr.error('Đã xóa sản phẩm');
						productTable.ajax.reload();
					},
					error: function (error) {
						
					}
				})
			  } else {

			  }
			});
	})

	// $(document).on('click','.btn-quantity',function () {
	// 	//$('#show').modal('show');
	// 	var url=$(this).attr('data-url');
	// 	console.log(url);
	// 	$.ajax({
	// 		type: 'get',
	// 		url: url,

	// 		success: function (response) {
	// 			productDetailTable.ajax.reload();
	// 		},
	// 		error: function (error) {
	// 		}
	// 	})
	// })
	$(document).on('click','#btn-add-detail',function (e) {
		e.preventDefault();
		//$('#show').modal('show');
		var url=$(this).attr('data-url');
		console.log(url);
		$.ajax({
			type: 'post',
			url: url,
			data: {
				product_code: $('#add_code').val(),
				color_id: $('#add_color_id').val(),
				size_id: $('#add_size_id').val(),
				cpu: $('#add_cpu').val(),
				ram: $('#add_ram').val(),
				vga: $('#add_vga').val(),
				disk: $('#add_disk').val(),
				resolution: $('#add_resolution').val(),
			},	
			success: function (response) {
				productDetailTable.ajax.reload();
				if(response.noti){
					toastr.error(response.noti);
				}
			},
			error: function (error) {
			}
		})
	})
	$(document).on('click','.btn-del-detail',function () {
		
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
					var url=$(this).attr('data-url');
					console.log(url);
					$.ajax({
						type: 'delete',
						url: url,

						success: function (response) {
							productDetailTable.ajax.reload();
						},
						error: function (error) {
						}
					})
			  } else {

			  }
			});

	})

	$(document).on('click','.btn-image',function (e) {
		e.stopPropagation();
		$('#upload').modal('show');
		$('#image_preview').html("");
		$('#image_prepare').html("");
		document.getElementById("images-form").reset();
		var url=$(this).attr('data-url');
		var urlImage=$(this).attr('data-url-image');
		$("#image_preview").attr('data-url-image',urlImage)
		var id=$(this).attr('data-id');
		var name=$(this).attr('data-name');


		$('#image_product_id').val(id);
		$('#title-detail-image').text(name);

		//console.log(url);
		if ($(this).attr('parent')==2) {
			$("#choose_color").parent().hide();
		}else{
			$("#choose_color").parent().show();
			$.ajax({
				type: 'get',
				url: url,
				success: function (response) {
					// $('#choose_color').append('<option value="'+ response.id +'">'+ response.name +'</option>');
					//console.log(response);
					$("#choose_color").empty();

					response.data.map(function(color, index){
						$('#choose_color').append('<option value="'+ color.color_id +'">'+ color.color_name +'</option>');
					})
				},
				error: function (error) {
				}
			})
		}
		$.ajax({
			type: 'get',
			url: urlImage,
			success: function (response) {
				$("#image_preview").html("");

				response.data.map(function(image, index){
					var src=image.link;
					src = src.replace("public", asset+"storage");
					$('#image_preview').append("<div class='image-div'><img class='img-responsive img-rounded image-append' src='"+src+"'><i class='fa fa-times-circle btn-del-image' aria-hidden='true' data-url='"+asset+"admin/delImages/"+image.id+"' data-id='"+image.id+"' data-link='"+image.link+"'></i></div>");
				})
			},
			error: function (error) {
			}
		})
	})

	$("#uploadFile").change(function(){
		//$('#image_preview').html("");
		var total_file=document.getElementById("uploadFile").files.length;
		for(var i=0;i<total_file;i++)
		{
			$('#image_prepare').append("<div class='image-div'><img class='img-responsive img-rounded image-append' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
		}
	});

	$('#images-form').on('submit',function(e) {
		e.preventDefault();
		var newPost = new FormData();
		var urlImage=$("#image_preview").attr('data-url-image');
		var files = document.getElementById('uploadFile').files;	
		for (var i = 0; i < files.length; i++) {
			newPost.append('image[]',files[i]);
		}			 
		//newPost.append('name',$('#name').val());
		newPost.append('color_id',$('#choose_color').val());
		newPost.append('product_id',$('#image_product_id').val());
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
				$.ajax({
					type: 'get',
					url: urlImage,
					success: function (response) {
						// $('#choose_color').append('<option value="'+ response.id +'">'+ response.name +'</option>');
						//console.log(response);
						$("#image_prepare").html("");
						$("#image_preview").html("");

						response.data.map(function(image, index){
							var src=image.link;
							src = src.replace("public", asset+"storage");
							$('#image_preview').append("<div class='image-div'><img class='img-responsive img-rounded image-append' src='"+src+"'><i class='fa fa-times-circle btn-del-image' aria-hidden='true' data-url='"+asset+"admin/delImages/"+image.id+"' data-id='"+image.id+"' data-link='"+image.link+"'></i></div>");
						})
					},
					error: function (error) {
					}
				})
				productTable.ajax.reload();
			},
			error: function (error) {
				//500
			}
		})
	});

	$(document).on('click','.image-append',function(){
		//console.log($(this).attr('src'));
		window.open($(this).attr('src'));
	});

	$(document).on('click','.btn-del-image',function () {
		var url=$(this).attr('data-url');
		var id=$(this).attr('data-id');
		var urlImage=$("#image_preview").attr('data-url-image');
		//var src=$(this).attr('data-src');
		console.log(url);
		$.ajax({
			type: 'get',
			url: url,	
			success: function (response) {
				//productDetailTable.ajax.reload();
				$.ajax({
					type: 'get',
					url: urlImage,
					success: function (response) {
						// $('#choose_color').append('<option value="'+ response.id +'">'+ response.name +'</option>');
						//console.log(response);
						$("#image_preview").html("");

						response.data.map(function(image, index){
							var src=image.link;
							src = src.replace("public", asset+"storage");
							$('#image_preview').append("<div class='image-div'><img class='img-responsive img-rounded image-append' src='"+src+"'><i class='fa fa-times-circle btn-del-image' aria-hidden='true' data-url='"+asset+"admin/delImages/"+image.id+"' data-id='"+image.id+"' data-link='"+image.link+"'></i></div>");
						})
					},
					error: function (error) {
					}
				})
				productTable.ajax.reload();
			},
			error: function (error) {
			}
		})
	})

});
