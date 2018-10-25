$(document).ready(function () {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$(".product_price").autoNumeric('init', {aSign:' VNĐ', pSign:'s' ,mDec: '0'  });

	$('.detail-option-box').on('click',function () {
		$('.product_price.sale_price').autoNumeric('set',$(this).attr('sale_price'));
		$('.product_price.origin_price').autoNumeric('set',$(this).attr('origin_price'));
		$('.product-info .quantity').text($(this).attr('quantity'));
		$('#btn-add-to-cart').attr('detail_id',$(this).attr('detail_id'));
		$('#btn-add-to-cart').attr('receipt_code',$(this).attr('receipt_code'));
		// $('#buy-quantity').attr('max',$(this).attr('quantity'));
	})


	$('.detail-option-box').on('click',function () {
		$('.detail-option-box').removeClass('active');
		$(this).toggleClass('active');
	})
	$('.detail-option-box').eq(0).trigger('click');

	$(document).on('click','#btn-add-to-cart',function () {
		// alert(asset+'card/add');
		if ($(this).attr('data-type')==1) {
			var datas={
				receipt_code: $(this).attr('receipt_code'),
				detail_id: $(this).attr('detail_id'),
				buy_quantity: $('#buy-quantity').val(),
			}
		}else{
			var datas={
				product_code: $(this).attr('product_id'),
				buy_quantity: $('#buy-quantity').val(),
			}
		}
		$.ajax({
			type: 'post',
			url: asset+'shop/card/add',
			data: datas,	

			success: function (response) {
				// console.log(response);
				if (response.error) {
					toastr.warning(response.msg);
				}else{
					// toastr.success(response.msg);
					showCart();
				}
				
			},
			error: function (error) {
			}
		})
	})
	$(document).on('change','.edit-qty-item',function () {
		// alert(asset+'card/add');
		$.ajax({
			type: 'get',
			url: asset+'shop/card/editItem/'+$(this).attr('data-row-id')+'/'+$(this).val(),

			success: function (response) {
				showCart();
			},
			error: function (error) {
			}
		})
	})

	$(document).on('click','.remove-item',function () {
		// alert(asset+'card/add');
		$.ajax({
			type: 'get',
			url: asset+'shop/card/delItem/'+$(this).attr('data-row-id'),

			success: function (response) {
				showCart();
			},
			error: function (error) {
			}
		})
	})

	function showCart() {
		$.ajax({
			type: 'get',
			url: asset+'shop/card/showCart',

			success: function (response) {
				$('#pc-cart-list').empty();
				$.each(response.content,function( key, val ) {
					var html=``;
					html+=`
						<li class="cart__item">
			               <div class="cart__item__image pull-left">
			               	 <a href="#">
			                    <img src="`+val.options.image+`" alt=""/>
			               	 </a>
			               </div>
			               <div class="cart__item__control">
			                  <div class="cart__item__delete"><a data-row-id="`+val.rowId+`" class="remove-item icon icon-delete"><span>XOÁ</span></a></div>
			               </div>
			               <div class="cart__item__info">
			                  <div class="cart__item__info__title">
			                     <h2><a href="#">`+val.name+`</a></h2>
			                  </div>
			                  <div class="cart__item__info__price"><span class="info-label">Giá bán:</span>
			                  		<span class="item-price-`+key+`"></span></div>
			                  <div class="cart__item__info__qty"><span class="info-label">Số lượng:</span>
			                  <input data-row-id="`+val.rowId+`" type="number" class="input--ys edit-qty-item" value='`+val.qty+`' /></div>
			                  <div class="cart__item__info__details">
			                     <div class='multitooltip'>
			                        `;
			        if (val.options.color!=null) {
			        	html+=`		<a href="#">Chi tiết</a>
			        				<div class="tip on-bottom">
			                           <span><strong>Màu:</strong>`+val.options.color+`</span>
			                           <span><strong>CPU:</strong>`+val.options.cpu+`</span>
			                           <span><strong>RAM:</strong>`+val.options.ram+` GB</span>
			                           <span><strong>VGA:</strong>`+val.options.vga+`</span>
			                           <span><strong>Ổ cứng:</strong>`+val.options.disk+` GB</span>
			                           <span><strong>Kích thước:</strong>`+val.options.size+` Inch</span>
			                           <span><strong>Độ phân giải:</strong>`+val.options.resolution+`p</span>
			                        </div>`;
			        	
			        }
			        html+=`
			                     </div>
			                  </div>
			               </div>
			            </li>`
					$('#pc-cart-list').append(html);
					$(".item-price-"+key).autoNumeric('init', {aSign:' VNĐ', pSign:'s' ,mDec: '0'  });
					$(".item-price-"+key).autoNumeric('set', val.price);
				})
				$('#cart-list-total').text(response.total+" VNĐ");
				$('.cart-list-count').text(response.count);
			},
			error: function (error) {
			}
		})
	}
	showCart();
})