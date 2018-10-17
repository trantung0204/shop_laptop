$(function () {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$(".product_price").autoNumeric('init', {aSign:' VNĐ', pSign:'s' ,mDec: '0'  });
	
	$(document).on('click','.btn-choose-color',function (e) {
		//e.preventdefault();
		var url=$(this).attr('data-url');
		console.log(url);
		$.ajax({
			type: 'get',
			url: url,

			success: function (response) {
				var src= response.data;
				src= src.toString() 
				src= src.replace("public", "http://tungdeptrai.vn/storage");
				console.log(src);
				$('#product_image').attr('src',src);
			},
			error: function (error) {
			}
		})
	})
	
	$(document).on('click','.btn-choose-size',function () {
		//e.preventdefault();
		var url=$(this).attr('data-url');
		$('#btn-add-to-cart').attr('color-id',$(this).attr('data-color'));
		$('#btn-add-to-cart').attr('size-id','');
		$('#btn-add-to-cart').css("display","none");
		console.log(url);
		$.ajax({
			type: 'get',
			url: url,

			success: function (response) {
				// $(this).find("span").find("div").css("border", "3px solid gray");
				$(this).css("border", "3px solid gray");
				console.log(response);
				$('#choosen_product_size').html("");
				response.data.map(function(size, index){
					$('#choosen_product_size').append('<li><a class="btn-choose-detail" data-size="'+size.size_id+'">'+size.size_number+'</a></li> ');
				});
			},
			error: function (error) {
			}
		})
	})

	$(document).on('click','.btn-choose-detail',function () {
		//e.preventdefault();
		$(this).css("border", "3px solid gray");
		$('#btn-add-to-cart').attr('size-id',$(this).attr('data-size'));
		$('#btn-add-to-cart').css("display","block");
	})

	$(document).on('click','#btn-add-to-cart',function () {
		//e.preventdefault();
		var url=$(this).attr('data-url');
		var url_reload_cart=$(this).attr('data-url-reload-cart');
		console.log(url);
		// var data['productCode']=$('#main_product_code').val();
		// var data['colorId']=$('#btn-add-to-cart').attr('color-id');
		$.ajax({
			type: 'post',
			url: url,
			data: {
				product_code: $('#main_product_code').text(),
				color_id: $(this).attr('color-id'),
				size_id: $(this).attr('size-id'),
				quantity: $('#main-product-quantity').val(),
			},	
			success: function (response) {
				//toastr.success('Product already in cart!');
				$.ajax({
					type: 'get',
					url: url_reload_cart,
					success: function (response) {
						$('#cart_container').html("");
						console.log(response);
						var count=0;
						$.each( response, function( key, item ) {
						  	var image = item.options.image;
							count+= parseInt(item.qty);
							image=image.replace("public", "http://tungdeptrai.vn/storage");
							$('#cart_container').append('<li class="cart__item"><div class="cart__item__image pull-left"><a href="#"><img src="'+image+'"/></a></div><div class="cart__item__control"><div class="cart__item__delete"><a  class="icon icon-delete" data-url-reload-cart="http://tungdeptrai.vn/shop/getCart" data-url="http://tungdeptrai.vn/shop/delItem/'+item.rowId+'"><span>Delete</span></a></div><div class="cart__item__edit"><a  class="icon icon-edit"  data-url-reload-cart="http://tungdeptrai.vn/shop/getCart" data-url="http://tungdeptrai.vn/shop/editItem/'+item.rowId+'" data-rowId="'+item.rowId+'"><span>Edit</span></a></div></div><div class="cart__item__info"><div class="cart__item__info__title"><h2><a href="#">'+item.name+'</a></h2></div><div class="cart__item__info__price"><span class="info-label">Price:</span><span>$'+item.price+'</span></div><div class="cart__item__info__qty"><span class="info-label">Qty:</span><input type="text" class="input--ys item_qty_'+item.rowId+'" value="'+item.qty+'"/></div><div class="cart__item__info__details"><div class="multitooltip"><a href="#">Details</a><div class="tip on-bottom"><span><strong>Color:</strong> '+item.options.color+'</span><span><strong>Size:</strong> '+item.options.size+'</span><span><strong>Product Code:</strong> '+item.options.productCode+'</span></div></div></div></div></li>');
						
						});
						
						$('#count_cart').text(count);
					},
					error: function (error) {
					}
				})
			},
			error: function (error) {
			}
		})
	})
	
	$(document).on('click','.icon-delete',function () {
		//e.preventdefault();
		var url=$(this).attr('data-url');
		var url_reload_cart=$(this).attr('data-url-reload-cart');
		console.log(url);
		$.ajax({
			type: 'get',
			url: url,

			success: function (response) {
				//toastr.error('Item has been removed!');
				$.ajax({
					type: 'get',
					url: url_reload_cart,
					success: function (response) {
						$('#cart_container').html("");
						console.log(response);
						var count=0;
						$.each( response, function( key, item ) {
						  	var image = item.options.image;
							count+= parseInt(item.qty);
							image=image.replace("public", "http://tungdeptrai.vn/storage");
							$('#cart_container').append('<li class="cart__item"><div class="cart__item__image pull-left"><a href="#"><img src="'+image+'"/></a></div><div class="cart__item__control"><div class="cart__item__delete"><a  class="icon icon-delete" data-url-reload-cart="http://tungdeptrai.vn/shop/getCart" data-url="http://tungdeptrai.vn/shop/delItem/'+item.rowId+'"><span>Delete</span></a></div><div class="cart__item__edit"><a  class="icon icon-edit"  data-url-reload-cart="http://tungdeptrai.vn/shop/getCart" data-url="http://tungdeptrai.vn/shop/editItem/'+item.rowId+'" data-rowId="'+item.rowId+'"><span>Edit</span></a></div></div><div class="cart__item__info"><div class="cart__item__info__title"><h2><a href="#">'+item.name+'</a></h2></div><div class="cart__item__info__price"><span class="info-label">Price:</span><span>$'+item.price+'</span></div><div class="cart__item__info__qty"><span class="info-label">Qty:</span><input type="text" class="input--ys item_qty_'+item.rowId+'" value="'+item.qty+'"/></div><div class="cart__item__info__details"><div class="multitooltip"><a href="#">Details</a><div class="tip on-bottom"><span><strong>Color:</strong> '+item.options.color+'</span><span><strong>Size:</strong> '+item.options.size+'</span><span><strong>Product Code:</strong> '+item.options.productCode+'</span></div></div></div></div></li>');
						
						});
						
						$('#count_cart').text(count);
					},
					error: function (error) {
					}
				})
			},
			error: function (error) {
			}
		})
	})
	
	$(document).on('click','.icon-edit',function () {
		//e.preventdefault();
		var url=$(this).attr('data-url');
		var url_reload_cart=$(this).attr('data-url-reload-cart');
		var rowId=$(this).attr('data-rowId');
		console.log(url);
		console.log($('.item_qty_'+rowId).val());
		$.ajax({
			type: 'post',
			url: url,
			data: {
				qty: $('.item_qty_'+rowId).val(),
			},	

			success: function (response) {
				//toastr.success('Item has been changed!');
				$.ajax({
					type: 'get',
					url: url_reload_cart,
					success: function (response) {
						$('#cart_container').html("");
						console.log(response);
						var count=0;
						$.each( response, function( key, item ) {
						  	var image = item.options.image;
							count+= parseInt(item.qty);
							image=image.replace("public", "http://tungdeptrai.vn/storage");
							$('#cart_container').append('<li class="cart__item"><div class="cart__item__image pull-left"><a href="#"><img src="'+image+'"/></a></div><div class="cart__item__control"><div class="cart__item__delete"><a  class="icon icon-delete" data-url-reload-cart="http://tungdeptrai.vn/shop/getCart" data-url="http://tungdeptrai.vn/shop/delItem/'+item.rowId+'"><span>Delete</span></a></div><div class="cart__item__edit"><a  class="icon icon-edit"  data-url-reload-cart="http://tungdeptrai.vn/shop/getCart" data-url="http://tungdeptrai.vn/shop/editItem/'+item.rowId+'" data-rowId="'+item.rowId+'"><span>Edit</span></a></div></div><div class="cart__item__info"><div class="cart__item__info__title"><h2><a href="#">'+item.name+'</a></h2></div><div class="cart__item__info__price"><span class="info-label">Price:</span><span>$'+item.price+'</span></div><div class="cart__item__info__qty"><span class="info-label">Qty:</span><input type="text" class="input--ys item_qty_'+item.rowId+'" value="'+item.qty+'"/></div><div class="cart__item__info__details"><div class="multitooltip"><a href="#">Details</a><div class="tip on-bottom"><span><strong>Color:</strong> '+item.options.color+'</span><span><strong>Size:</strong> '+item.options.size+'</span><span><strong>Product Code:</strong> '+item.options.productCode+'</span></div></div></div></div></li>');
						
						});
						
						$('#count_cart').text(count);
						console.log(count);
					},
					error: function (error) {
					}
				})
			},
			error: function (error) {
			}
		})
	})
});