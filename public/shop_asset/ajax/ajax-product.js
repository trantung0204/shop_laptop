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
	})

	$('.detail-option-box').eq(0).trigger('click');
})