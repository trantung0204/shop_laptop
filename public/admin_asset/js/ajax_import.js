
	$(document).ready(function () {
		var importReceiptTable=null;
		var url=$('#import-table').attr('data-url');
		// console.log(url);
	    importReceiptTable = $('#import-table').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: url,
	        "initComplete": function( ) {
							    $("#import-table .row-sum").autoNumeric('init', {aSign:' VNĐ', pSign:'s' ,mDec: '0'  });
							},
	        columns: [
	            { data: 'id', name: 'import_receipts.id' },
	            { data: 'code', name: 'import_receipts.code' },
	            { data: 'admin_id', name: 'import_receipts.admin_id' },
	            { data: 'sum', name: 'import_receipts.sum',class: 'row-sum'},
	            { data: 'created_at', name: 'import_receipts.created_at' },
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

		$('#add_button').on('click',function () {
			$('#add_receipt').modal('show');
			$('#receipt_detail_table>tbody').html('');
			countHorizon=0;
			$('#receipt_total').text('0 VNĐ');
			$.ajax({
				type: 'get',
				url: asset+'admin/import/genCode',

				success: function (response) {
					$('#receipt_code').val(response.data);
				},
				error: function (error) {
					
				}
			})
		})

		$("#receipt_product").change(function(){
			if($('#receipt_product').val()==''){
				$('#addToReceipt').hide();
					$('#receipt_size').html('<option value="">--Chon-co--</option>');
					$('#receipt_color').html('<option value="">--Chon-mau--</option>');
					return false;
			}
			var url=$('#receipt_product').attr('data-url')+'/'+$('#receipt_product').val();
			// console.log(url);
			// console.log($('#receipt_product').attr('data-url'));
			$.ajax({
				type: 'get',
				url: url,

				success: function (response) {
					// $('#receipt_color').html('');
					$('#addToReceipt').hide();
					$('#receipt_size').html('<option value="">--Chon-co--</option>');
					$('#receipt_color').html('<option value="">--Chon-mau--</option>');
					response.data.map(function(color, index){
						$('#receipt_color').append('<option value="'+color.color_id+'">'+color.color_name+'</option>');
						
					});	
				},
				error: function (error) {
					
				}
			})
		})
		$("#receipt_color").change(function(){
			if($('#receipt_color').val()==''){
				$('#addToReceipt').hide();
					$('#receipt_size').html('<option value="">--Chon-co--</option>');
					return false;
			}
			$('#receipt_color').attr('data-url',asset+"admin/getSizebyProductandColor/"+$('#receipt_product').val()+"/"+$('#receipt_color').val());		
			var url=$('#receipt_color').attr('data-url');
			// console.log($('#receipt_product').attr('data-url'));
			$.ajax({
				type: 'get',
				url: url,

				success: function (response) {
					$('#addToReceipt').hide();
					$('#receipt_size').html('<option value="">--Chon-co--</option>')
					response.data.map(function(size, index){
						$('#receipt_size').append('<option value="'+size.size_id+'">'+size.size_number+'</option>');
						// $('#receipt_size').append('<option value="">--Chon-co--</option>')
					});		
				},
				error: function (error) {
					
				}
			})
		})
		$("#receipt_size").change(function(){
			if($('#receipt_size').val()==''){
				$('#addToReceipt').hide();
					return false;
			}
			// $('#addToReceipt').attr('productDetailId',)	
			var url=asset+"admin/getProductDetailId/"+$('#receipt_product').val()+"/"+$('#receipt_color').val()+"/"+$('#receipt_size').val();
			// console.log(url);
			// console.log($('#receipt_product').attr('data-url'));
			$.ajax({
				type: 'get',
				url: url,

				success: function (response) {
					// console.log(response);
					$('#addToReceipt').show();
					$('#addToReceipt').attr('productDetailId',response.data.id);
					$('#addToReceipt').attr('productCode',response.data.product_code);
				},
				error: function (error) {
					
				}
			})
		})
		$("#receipt_total").autoNumeric('init', {aSign:' VNĐ', pSign:'s' ,mDec: '0'});
		$(document).on("click","#product_detail_table .add-to-receipt",function(){
			var detail=$(this).parents('tr');
			var flag=1;
			for (var i = 0; i <countHorizon; i++) {
				//duyệt bảng xem detailId chuẩn bị thêm đã có trong bảng chưa
				if (($('#record-'+i+'-detailId').text())==(detail.find('.row-detail-id').text())) {
					flag=0;
				}
			}
			if (flag==1) {
				// alert('ok');
				//nếu chưa có thì thêm mới, ngược lại thì k làm gì
				$('#receipt_detail_table>tbody').append(`
					<tr id="record-row-`+countHorizon+`">
						<td><button data-index="`+countHorizon+`" type="button" class="btn btn-danger btn-delete-recort"><i class="fa fa-trash-o" aria-hidden="true"></i></button> </td>
						<td  id="record-`+countHorizon+`-detailId">`+detail.find('.row-detail-id').text()+`</td>
						<td id="record-`+countHorizon+`-productCode">`+detail.find('.row-code').text()+`</td>
						<td>`+detail.find('.row-name').text()+`</td>
						<td>`+detail.find('.row-color').html()+`</td>
						<td>`+detail.find('.row-size').text()+`</td>
						<td>`+detail.find('.row-cpu').text()+`</td>
						<td>`+detail.find('.row-ram').text()+`</td>
						<td>`+detail.find('.row-vga').text()+`</td>
						<td>`+detail.find('.row-disk').text()+`</td>
						<td>`+detail.find('.row-resolution').text()+`</td>
						<td><input value="" min="0" step="1000" id="record-`+countHorizon+`-originPrice" type="text" required="required" placeholder="Giá bán"></td>
						<td><input value="" min="0" step="1000" id="record-`+countHorizon+`-salePrice"  type="text" required="required" placeholder="Giá khuyến mãi"></td>
						<td><input value="" min="0" id="record-`+countHorizon+`-qty"  type="number" required="required" placeholder="Số lượng"></td>
						<td><input value="" min="0" step="1000" id="record-`+countHorizon+`-importPrice"  type="text" required="required" placeholder="Giá nhập"></td>
						<td id="record-`+countHorizon+`-sum" >0 VNĐ</td>
					</tr>`);
				$("#record-"+countHorizon+"-originPrice").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});
				$("#record-"+countHorizon+"-salePrice").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});
				$("#record-"+countHorizon+"-importPrice").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});
				$("#record-"+countHorizon+"-sum").autoNumeric('init', {aSign:' VNĐ', pSign:'s' ,mDec: '0'});
				countHorizon++;
			}else{
				toastr.error('Sản phẩm bị lặp!');
			}
			
		})


// <tr>
//   <th><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button> </th>
//   <th id="record-'+countHorizon+'-detailId">'+$('#addToReceipt').attr('productDetailId')+'</th>
//   <th id="record-'+countHorizon+'-productCode">'+$('#addToReceipt').attr('productCode')+'</th>
//   <th>'+$("#receipt_product option:selected").text()+'</th>
//   <th>'+$("#receipt_color option:selected").text()+'</th>
//   <th>'+$("#receipt_size option:selected").text()+'</th>
//   <th><input id="record-'+countHorizon+'-originPrice" type="number" required="required" placeholder="Giá bán"></th>
//   <th><input id="record-'+countHorizon+'-salePrice" type="number" required="required" placeholder="Giá khuyến mãi"></th>
//   <th><input id="record-'+countHorizon+'-qty" type="number" required="required" placeholder="Số lượng"></th>
//   <th><input id="record-'+countHorizon+'-importPrice" type="number" required="required" placeholder="Giá nhập"></th>
//   <th id="record-'+countHorizon+'-sum"></th>
// </tr>
// 
		function ApplyPriceChange() {
			var total=0;
			var qty=0
			var importPrice=0
			for (var i = 0; i < countHorizon; i++) {
				if($("#record-row-"+i).length == 0) {
				  continue;
				}
				if($('#record-'+i+'-qty').val()==''){
					qty=0;
				}else{
					qty=$('#record-'+i+'-qty').val();
				}
				if($('#record-'+i+'-importPrice').autoNumeric('get')==''){
					importPrice=0;
				}else{
					importPrice=$('#record-'+i+'-importPrice').autoNumeric('get');
				}
				var sum=parseInt(qty*importPrice);
				// $('#record-'+i+'-sum').text(sum);
				$("#record-"+i+"-sum").autoNumeric('set', sum);
				// $("#record-"+i+"-sum").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});
				total+=sum;
			}
			$('#receipt_total').autoNumeric('set', total);
		}

		$(document).on("keyup","#receipt_detail_table input",function () {
			// console.log('test');
			ApplyPriceChange();
		})

		$(document).on("click",".btn-delete-recort",function () {
			var id=$(this).attr("data-index");
			// console.log(id);
			$("#record-row-"+id).remove();
			ApplyPriceChange();
			countHorizon--;
		})

		$(document).on("click","#btn-add-receipt",function () {
			if (countHorizon<1) {
				toastr.error('Chưa có sản phẩm nào trong phiếu nhập')
				return;
			}
			var total=0;
			var qty=0;
			var importPrice=0;
			var receiptData=[];
			
			for (var i = 0; i < countHorizon; i++) {
				if($("#record-row-"+i).length == 0) {
				  continue;
				}
				
				var receiptCode=$('#receipt_code').val();
				var productCode=$('#record-'+i+'-productCode').text();
				var detailId=$('#record-'+i+'-detailId').text();
				if($('#record-'+i+'-importPrice').autoNumeric('get')==''){
					// receiptData[i]['importPrice']=0;
					var importPrice=0;
				}else{
					// receiptData[i]['importPrice']=$('#record-'+i+'-importPrice').autoNumeric('get');
					var importPrice=$('#record-'+i+'-importPrice').autoNumeric('get');
				}
				if($('#record-'+i+'-originPrice').autoNumeric('get')==''){
					// receiptData[i]['originPrice']=0;
					var originPrice=0;
				}else{
					// receiptData[i]['originPrice']=$('#record-'+i+'-originPrice').autoNumeric('get');
					var originPrice=$('#record-'+i+'-originPrice').autoNumeric('get');
				}
				if($('#record-'+i+'-salePrice').autoNumeric('get')==''){
					// receiptData[i]['salePrice']=0;
					var salePrice=0;
				}else{
					// receiptData[i]['salePrice']=$('#record-'+i+'-salePrice').autoNumeric('get');
					var salePrice=$('#record-'+i+'-salePrice').autoNumeric('get');
				}
				var userId=$('#form_creator').attr('data-id');
				if($('#record-'+i+'-qty').val()==''){
					// receiptData.append(i+'[]',$('#record-'+i+'-qty').val());
					// receiptData[i]['qty']=0;
					var itemQty=0;
				}else{
					// alert('kdjfk');
					// receiptData[i]['qty']=$('#record-'+i+'-qty').val();
					var itemQty=$('#record-'+i+'-qty').val();
				}
				// var sum=parseInt(receiptData[i]['qty']*receiptData[i]['importPrice']);
				var item={ "import_code": receiptCode, "product_code": productCode, "product_detail_id": detailId, "import_price": importPrice, "origin_price": originPrice, "sale_price": salePrice,"user_id": userId, "quantity": itemQty};
				var sum=parseInt($('#record-'+i+'-qty').val()*$('#record-'+i+'-importPrice').autoNumeric('get'));
				total+=sum;
				// receiptData[i]['importCode']=$('#receipt_code').val();
				// receiptData[i]['productCode']=$('#record-'+i+'-productCode').text();
				// receiptData[i]['detailId']=$('#record-'+i+'-detailId').text();
				// receiptData[i]['userId']=$('#form_creator').attr('data-id');

				receiptData.push(item);
			}

			// receiptInfo['importCode']=$('#receipt_code').val();
			// receiptInfo['adminId']=$('#form_creator').attr('data-id');
			// receiptInfo['sum']=total;
			var code=$('#receipt_code').val();
			var adminId=$('#form_creator').attr('data-id');
			var receiptInfo={ "code": code, "admin_id": adminId,"sum":total };

			receiptData = JSON.stringify(receiptData);
			receiptInfo = JSON.stringify(receiptInfo);

			console.log(receiptData);
			console.log(receiptInfo);

			var url=$('#btn-add-receipt').attr('data-url');
			var urlData=$('#btn-add-receipt').attr('data-url-create-data');
			console.log(url);
			$.ajax({				
				type: 'post',
				url: url,
				data: {
					'receiptInfo' : receiptInfo,
					'status' :	1,
				},
				dataType:'json',
				// async:false,
				// processData: false,
				// contentType: false,
				success: function (response){
					importReceiptTable.ajax.reload();
					toastr.success('Thêm phiếu nhập hàng thành công!');

				},
				error: function (error) {
					//500
				}
			})
			$.ajax({				
				type: 'post',
				url: urlData,
				data: {
					'receiptData' : receiptData,
					'status' :	1,
				},
				dataType:'json',
				// async:false,
				// processData: false,
				// contentType: false,
				success: function (response){
					// importReceiptTable.ajax.reload();
					// toastr.success('Thêm chi tiết phiếu nhập hàng thành công!');
					$('#add_receipt').modal('hide');
				},
				error: function (error) {
					//500
				}
			})
		})


		$(document).on('click','.btn-del',function () {
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
					// console.log(url);
					$.ajax({
						type: 'delete',
						url: url,

						success: function (response) {
							//console.log(response);
							toastr.error('Đã xóa sản phẩm');
							importReceiptTable.ajax.reload();
						},
						error: function (error) {
							
						}
					})
				  } else {

				  }
				});
		})

		$(document).on('click','.btn-detail',function () {
			// $('#edit').modal('show');
			var url=$(this).data('url');
			var id=$(this).data('id');
			$('#btn-print-receipt').attr('href',asset+"admin/printReceipt/"+id);
			//alert(id);
			$.ajax({
				type: 'get',
				url: url,

				success: function (response) {
					console.log(response);
					$('#show_receipt').modal('show');
					$('#header-show-modal p span').text(response.info.code);
					var date=response.info.created_at;
					date=date.slice(0,10).split("-");

					$('#header-show-modal h4').text("Ngày "+date[2]+" tháng "+date[1]+" năm "+date[0]);

					// $('#receipt_price').text(response.info.sum+" VNĐ");
					$("#receipt_price").autoNumeric('init', {aSign:' VNĐ', pSign:'s' ,mDec: '0'});
					$("#receipt_price").autoNumeric('set', response.info.sum);
					var index=1;
					var qty=0;
					$('#receipt_show_table tbody').html("");
					$.each( response.data, function( key, item ){
						qty+=item.quantity;
						var cpu=null;
						switch(item.cpu) {
					                case 1:
					                    cpu='Core i3';
					                    break;
					                case 2:
					                    cpu='Core i5';
					                    break;
					                case 3:
					                    cpu='Core i7';
					                    break;
					                case 4:
					                    cpu='Pentium';
					                    break;
					                case 5:
					                    cpu='Core M';
					                    break;
					                case 6:
					                    cpu='AMD';
					                    break;
							}
						var vga=null;
						switch(item.vga) {
							case 1:
		                        vga='GTX 1030';
		                        break;
		                    case 2:
		                        vga='GTX 1050';
		                        break;
		                    case 3:
		                        vga='GTX 1050ti';
		                        break;
		                    case 4:
		                        vga='GTX 1060';
		                        break;
		                    case 5:
		                        vga='GTX 1070';
		                        break;
		                    case 6:
		                        vga='GTX 1080';
		                        break;
		                    
		                    default:
		                        vga='On Board';
		                        break;
							}
						$('#receipt_show_table tbody').append(`<tr><td>`+index+`</td>
							<td>`+item.product_details_id+`</td>
							<td>`+item.product_code+`</td>
							<td>`+item.product_name+`</td>
							<td>`+item.color+`</td>
							<td>`+item.size+` inch</td>
							<td>`+ cpu+`</td>
							<td>`+item.ram+` GB</td>
							<td>`+vga+`</td>
							<td>`+item.disk+` GB</td>
							<td>`+item.resolution+`p</td>
							<td id="view-record-`+index+`-originPrice">`+item.origin_price+` VNĐ</td>
							<td id="view-record-`+index+`-salePrice">`+item.sale_price+` VNĐ</td>
							<td>`+item.quantity+` Chiếc</td>
							<td id="view-record-`+index+`-importPrice">`+item.import_price+` VNĐ</td>
							<td id="view-record-`+index+`-sum">`+item.import_price*item.quantity+` VNĐ</td>
						</tr>`);
						$("#view-record-"+index+"-originPrice").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});
						$("#view-record-"+index+"-salePrice").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});
						$("#view-record-"+index+"-importPrice").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});
						$("#view-record-"+index+"-sum").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});

						$("#view-record-"+index+"-originPrice").autoNumeric('set', item.origin_price);
						$("#view-record-"+index+"-salePrice").autoNumeric('set', item.sale_price);
						$("#view-record-"+index+"-importPrice").autoNumeric('set', item.import_price);
						$("#view-record-"+index+"-sum").autoNumeric('set', item.import_price*item.quantity);
						index++;
					})

					$('#item_total').text(qty +" Chiếc");
					index=1; qty=0;

					$.ajax({
						type: 'get',
						url: asset+'admin/import/readMoney/'+response.info.sum.substr(0, response.info.sum.length-3),

						success: function (response) {
							// $('#receipt_total_write').text(response.data);
						},
						error: function (error) {
							
						}
					})
				},
				error: function (error) {
					
				}
			})
		})



////EDIT
		$(document).on('click','.btn-edit',function () {
			$('#edit_receipt').modal('show');
			var url=$(this).data('url');
			var id=$(this).data('id');
			//alert(id);
			$.ajax({
				type: 'get',
				url: url,

				success: function (response) {
					console.log(response);
					var data_url=asset+'admin/imports/'+id;
					$('#btn-edit-receipt').attr('data-url',data_url);
					$('#edit_receipt_code').val(response.info.code);
					countHorizon=0;
					$('#edit_receipt_detail_table tbody').html('');
					var sum=0;
					$.each( response.data, function( key, item ){
						$('#edit_receipt_detail_table tbody').append(`<tr id="edit-record-row-`+countHorizon+`">
							<td><input type="hidden" name="" id="edit-record-`+countHorizon+`-id" class="form-control" value="`+item.id+`"><button data-index="`+countHorizon+`" type="button" class="btn btn-danger btn-edit-delete-recort"><i class="fa fa-trash-o" aria-hidden="true"></i></button> </td>
							<td  id="edit-record-`+countHorizon+`-detailId">`+item.product_details_id+`</td>
							<td id="edit-record-`+countHorizon+`-productCode">`+item.product_code+`</td>
							<td>`+item.product_name+`</td>
							<td>`+item.color+`</td>
							<td>`+item.size+`</td>
							<td>`+item.cpu+`</td>
							<td>`+item.ram+`</td>
							<td>`+item.vga+`</td>
							<td>`+item.disk+`</td>
							<td>`+item.resolution+`</td>
							<td><input value="" min="0" step="1000" id="edit-record-`+countHorizon+`-originPrice" type="text" required="required" placeholder="Giá bán"></td>
							<td><input value="" min="0" step="1000" id="edit-record-`+countHorizon+`-salePrice"  type="text" required="required" placeholder="Giá khuyến mãi"></td>
							<td><input value="`+item.quantity+`" min="0" id="edit-record-`+countHorizon+`-qty"  type="number" required="required" placeholder="Số lượng"></td>
							<td><input value="" min="0" step="1000" id="edit-record-`+countHorizon+`-importPrice"  type="text" required="required" placeholder="Giá nhập"></td>
							<td id="edit-record-`+countHorizon+`-sum" ></td>
						</tr>`);
						// alert(countHorizon);
						$("#edit-record-"+countHorizon+"-originPrice").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});
						$("#edit-record-"+countHorizon+"-salePrice").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});
						$("#edit-record-"+countHorizon+"-importPrice").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});
						$("#edit-record-"+countHorizon+"-sum").autoNumeric('init', {aSign:' VNĐ', pSign:'s' ,mDec: '0'});

						$("#edit-record-"+countHorizon+"-originPrice").autoNumeric('set',item.origin_price);
						$("#edit-record-"+countHorizon+"-salePrice").autoNumeric('set',item.sale_price);
						$("#edit-record-"+countHorizon+"-importPrice").autoNumeric('set',item.import_price);
						$("#edit-record-"+countHorizon+"-sum").autoNumeric('set', item.import_price*item.quantity);
						countHorizon++;
						sum+=item.quantity*item.import_price;
					})
					$("#edit_receipt_total").autoNumeric('init', {aSign:' VNĐ', pSign:'s' ,mDec: '0'});
					$('#edit_receipt_total').autoNumeric('set',sum);
				},
				error: function (error) {
					
				}
			})
		})


		$("#edit_receipt_product").change(function(){
			if($('#edit_receipt_product').val()==''){
				$('#edit_addToReceipt').hide();
					$('#edit_receipt_size').html('<option value="">--Chon-co--</option>');
					$('#edit_receipt_color').html('<option value="">--Chon-mau--</option>');
					return false;
			}
			var url=$('#edit_receipt_product').attr('data-url')+'/'+$('#edit_receipt_product').val();
			// console.log(url);
			// console.log($('#edit_receipt_product').attr('data-url'));
			$.ajax({
				type: 'get',
				url: url,

				success: function (response) {
					// $('#edit_receipt_color').html('');
					$('#edit_addToReceipt').hide();
					$('#edit_receipt_size').html('<option value="">--Chon-co--</option>');
					$('#edit_receipt_color').html('<option value="">--Chon-mau--</option>');
					response.data.map(function(color, index){
						$('#edit_receipt_color').append('<option value="'+color.color_id+'">'+color.color_name+'</option>');
						
					});	
				},
				error: function (error) {
					
				}
			})
		})
		$("#edit_receipt_color").change(function(){
			if($('#edit_receipt_color').val()==''){
				$('#edit_addToReceipt').hide();
					$('#edit_receipt_size').html('<option value="">--Chon-co--</option>');
					return false;
			}
			$('#edit_receipt_color').attr('data-url',asset+"admin/getSizebyProductandColor/"+$('#edit_receipt_product').val()+"/"+$('#edit_receipt_color').val());		
			var url=$('#edit_receipt_color').attr('data-url');
			// console.log($('#edit_receipt_product').attr('data-url'));
			$.ajax({
				type: 'get',
				url: url,

				success: function (response) {
					$('#edit_addToReceipt').hide();
					$('#edit_receipt_size').html('<option value="">--Chon-co--</option>')
					response.data.map(function(size, index){
						$('#edit_receipt_size').append('<option value="'+size.size_id+'">'+size.size_number+'</option>');
						// $('#edit_receipt_size').append('<option value="">--Chon-co--</option>')
					});		
				},
				error: function (error) {
					
				}
			})
		})
		$("#edit_receipt_size").change(function(){
			if($('#edit_receipt_size').val()==''){
				$('#edit_addToReceipt').hide();
					return false;
			}
			// $('#edit_addToReceipt').attr('productDetailId',)	
			var url=asset+"admin/getProductDetailId/"+$('#edit_receipt_product').val()+"/"+$('#edit_receipt_color').val()+"/"+$('#edit_receipt_size').val();
			// console.log(url);
			// console.log($('#edit_receipt_product').attr('data-url'));
			$.ajax({
				type: 'get',
				url: url,

				success: function (response) {
					// console.log(response);
					$('#edit_addToReceipt').show();
					$('#edit_addToReceipt').attr('productDetailId',response.data.id);
					$('#edit_addToReceipt').attr('productCode',response.data.product_code);
				},
				error: function (error) {
					
				}
			})
		})
		$(document).on("click","#edit_product_detail_table .add-to-receipt",function(){
			var detail=$(this).parents('tr');
			var flag=1;
			// console.log(countHorizon);
			for (var i = 0; i <countHorizon; i++) {
				//duyệt bảng xem detailId chuẩn bị thêm đã có trong bảng chưa
				if (($('#edit-record-'+i+'-detailId').text())==($(this).attr('data-id'))) {
					flag=0;
				}
			}
			console.log(flag);
			if (flag==1) {
				//nếu chưa có thì thêm mới, ngược lại thì k làm gì
				// $('#edit_receipt_detail_table>tbody').append(`<tr id="edit-record-row-`+countHorizon+`"><td><input type="hidden" name="" id="edit-record-`+countHorizon+`-id" class="form-control" value="0"><button data-index="`+countHorizon+`" type="button" class="btn btn-danger btn-edit-delete-recort"><i class="fa fa-trash-o" aria-hidden="true"></i></button> </td>
				// 	<td  id="edit-record-`+countHorizon+`-detailId">`+$(`#edit_addToReceipt`).attr(`productDetailId`)+`</td>
				// 	<td id="edit-record-`+countHorizon+`-productCode">`+$(`#edit_addToReceipt`).attr(`productCode`)+`</td>
				// 	<td>`+$("#edit_receipt_product option:selected").text()+`</td>
				// 	<td>`+$("#edit_receipt_color option:selected").text()+`</td>
				// 	<td>`+$("#edit_receipt_size option:selected").text()+`</td>
				// 	<td><input value="0" min="0" step="1000" id="edit-record-`+countHorizon+`-originPrice" type="number" required="required" placeholder="Giá bán"></td>
				// 	<td><input value="0" min="0" step="1000" id="edit-record-`+countHorizon+`-salePrice"  type="number" required="required" placeholder="Giá khuyến mãi"></td>
				// 	<td><input value="0" min="0" id="edit-record-`+countHorizon+`-qty"  type="number" required="required" placeholder="Số lượng"></td>
				// 	<td><input value="0" min="0" step="1000" id="edit-record-`+countHorizon+`-importPrice"  type="number" required="required" placeholder="Giá nhập"></td>
				// 	<td id="edit-record-`+countHorizon+`-sum" >0 VNĐ</td>
				// </tr>`);
				$('#edit_receipt_detail_table>tbody').append(`
					<tr id="edit-record-row-`+countHorizon+`">
						<td><input type="hidden" name="" id="edit-record-`+countHorizon+`-id" class="form-control" value="0"><button data-index="`+countHorizon+`" type="button" class="btn btn-danger btn-edit-delete-recort"><i class="fa fa-trash-o" aria-hidden="true"></i></button> </td>
						<td  id="edit-record-`+countHorizon+`-detailId">`+detail.find('.row-detail-id').text()+`</td>
						<td id="edit-record-`+countHorizon+`-productCode">`+detail.find('.row-code').text()+`</td>
						<td>`+detail.find('.row-name').text()+`</td>
						<td>`+detail.find('.row-color').html()+`</td>
						<td>`+detail.find('.row-size').text()+`</td>
						<td>`+detail.find('.row-cpu').text()+`</td>
						<td>`+detail.find('.row-ram').text()+`</td>
						<td>`+detail.find('.row-vga').text()+`</td>
						<td>`+detail.find('.row-disk').text()+`</td>
						<td>`+detail.find('.row-resolution').text()+`</td>
						<td><input value="" min="0" step="1000" id="edit-record-`+countHorizon+`-originPrice" type="text" required="required" placeholder="Giá bán"></td>
						<td><input value="" min="0" step="1000" id="edit-record-`+countHorizon+`-salePrice"  type="text" required="required" placeholder="Giá khuyến mãi"></td>
						<td><input value="" min="0" id="edit-record-`+countHorizon+`-qty"  type="number" required="required" placeholder="Số lượng"></td>
						<td><input value="" min="0" step="1000" id="edit-record-`+countHorizon+`-importPrice"  type="text" required="required" placeholder="Giá nhập"></td>
						<td id="edit-record-`+countHorizon+`-sum" >0 VNĐ</td>
					</tr>`);
				$("#edit-record-"+countHorizon+"-originPrice").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});
				$("#edit-record-"+countHorizon+"-salePrice").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});
				$("#edit-record-"+countHorizon+"-importPrice").autoNumeric('init', {aSign:' đ', pSign:'s' ,mDec: '0'});
				$("#edit-record-"+countHorizon+"-sum").autoNumeric('init', {aSign:' VNĐ', pSign:'s' ,mDec: '0'});
				countHorizon++;
			}else{
				toastr.error('Sản phẩm bị lặp!');
			}
			
		})


		function ApplyPriceChangeOnEdit() {
			var total=0;
			var qty=0
			var importPrice=0
			for (var i = 0; i < countHorizon; i++) {
				if($("#edit-record-row-"+i).length == 0) {
				  continue;
				}
				if($('#edit-record-'+i+'-qty').val()==''){
					qty=0;
				}else{
					qty=$('#edit-record-'+i+'-qty').val();
				}
				if($('#edit-record-'+i+'-importPrice').autoNumeric('get')==''){
					importPrice=0;
				}else{
					importPrice=$('#edit-record-'+i+'-importPrice').autoNumeric('get');
				}
				var sum=parseInt(qty*importPrice);
				$('#edit-record-'+i+'-sum').autoNumeric('set',sum);
				total+=sum;
			}
			$('#edit_receipt_total').autoNumeric('set',total);
		}

		$(document).on("keyup","#edit_receipt_detail_table input",function () {
			console.log(countHorizon);
			ApplyPriceChangeOnEdit();
		})

		$(document).on("click",".btn-edit-delete-recort",function () {
			var id=$(this).attr("data-index");
			countHorizon--;
			// console.log(id);
			$("#edit-record-row-"+id).remove();
			ApplyPriceChange();
		})

		$(document).on("click","#btn-edit-receipt",function () {
			if (countHorizon<1) {
				toastr.error('Chưa có sản phẩm nào trong phiếu nhập')
				return;
			}
			var total=0;
			var qty=0;
			var importPrice=0;
			var receiptData=[];
			
			for (var i = 0; i < countHorizon; i++) {
				if($("#edit-record-row-"+i).length == 0) {
				  continue;
				}
				
				var itemId=$('#edit-record-'+i+'-id').val();
				var receiptCode=$('#edit_receipt_code').val();
				var productCode=$('#edit-record-'+i+'-productCode').text();
				var detailId=$('#edit-record-'+i+'-detailId').text();
				if($('#edit-record-'+i+'-importPrice').autoNumeric('get')==''){
					var importPrice=0;
				}else{
					var importPrice=$('#edit-record-'+i+'-importPrice').autoNumeric('get');
				}
				if($('#edit-record-'+i+'-originPrice').autoNumeric('get')==''){
					var originPrice=0;
				}else{
					var originPrice=$('#edit-record-'+i+'-originPrice').autoNumeric('get');
				}
				if($('#edit-record-'+i+'-salePrice').autoNumeric('get')==''){
					var salePrice=0;
				}else{
					var salePrice=$('#edit-record-'+i+'-salePrice').autoNumeric('get');
				}
				var userId=$('#form_creator').attr('data-id');
				if($('#edit-record-'+i+'-qty').val()==''){
					var itemQty=0;
				}else{
					var itemQty=$('#edit-record-'+i+'-qty').val();
				}
				var item={ "id": itemId,"import_code": receiptCode, "product_code": productCode, "product_detail_id": detailId, "import_price": importPrice, "origin_price": originPrice, "sale_price": salePrice,"user_id": userId, "quantity": itemQty};
				var sum=parseInt($('#edit-record-'+i+'-qty').val()*$('#edit-record-'+i+'-importPrice').autoNumeric('get'));
				total+=sum;

				receiptData.push(item);
			}
			var code=$('#edit_receipt_code').val();
			var adminId=$('#form_editor').attr('data-id');
			var receiptInfo={ "code": code, "admin_id": adminId,"sum":total };

			receiptData = JSON.stringify(receiptData);
			receiptInfo = JSON.stringify(receiptInfo);

			console.log(receiptData);
			console.log(receiptInfo);

			var url=$('#btn-edit-receipt').attr('data-url');
			var urlData=$('#btn-edit-receipt').attr('data-url-update-data');
			console.log(url);
			$.ajax({				
				type: 'put',
				url: url,
				data: {
					'receiptInfo' : receiptInfo,
					'status' :	1,
				},
				dataType:'json',
				// async:false,
				// processData: false,
				// contentType: false,
				success: function (response){
					importReceiptTable.ajax.reload();
					toastr.success('Sửa phiếu nhập hàng thành công!');

				},
				error: function (error) {
					//500
				}
			})
			$.ajax({				
				type: 'post',
				url: urlData,
				data: {
					'receiptData' : receiptData,
					'status' :	1,
				},
				dataType:'json',
				// async:false,
				// processData: false,
				// contentType: false,
				success: function (response){
					// importReceiptTable.ajax.reload();
					// toastr.success('Thêm chi tiết phiếu nhập hàng thành công!');
					$('#edit_receipt').modal('hide');
				},
				error: function (error) {
					//500
				}
			})
		})


	function getProductDetail(code,table_name) {
		var url=asset+'admin/importProductDetails/'+code;

		console.log(url);

		productDetailTable = $('#'+table_name).DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: url,
	        destroy: true,
	        columns: [
	            { data: 'id', name: 'id',class: 'row-detail-id' },
	            { data: 'product_code', name: 'product_details.product_code',class: 'row-code'},
	            { data: 'product_name', name: 'product_details.product_name',class: 'row-name'},
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
	}
	getProductDetail($('#receipt_product').val(),'product_detail_table');
	getProductDetail($('#edit_receipt_product').val(),'edit_product_detail_table');

	$('#receipt_category').on('change',function () {
		$.ajax({
			type: 'get',
			url: asset+'admin/getProOfCate/'+$(this).val(),

			success: function (response) {
				$('#receipt_product').html('');
				response.data.map(function( attr, index ) {
					$('#receipt_product').append('<option value="'+attr.code+'">'+attr.name+'</option>');
					getProductDetail($('#receipt_product').val(),'product_detail_table');
				})
			},
			error: function (error) {
				
			}
		})
	})
	$('#edit_receipt_category').on('change',function () {
		$.ajax({
			type: 'get',
			url: asset+'admin/getProOfCate/'+$(this).val(),

			success: function (response) {
				$('#edit_receipt_product').html('');
				response.data.map(function( attr, index ) {
					$('#edit_receipt_product').append('<option value="'+attr.code+'">'+attr.name+'</option>');
					getProductDetail($('#edit_receipt_product').val(),'edit_product_detail_table');
				})
			},
			error: function (error) {
				
			}
		})
	})
	$('#receipt_product').on('change',function () {
		getProductDetail($('#receipt_product').val(),'product_detail_table');
	})
	$('#edit_receipt_product').on('change',function () {
		getProductDetail($('#edit_receipt_product').val(),'edit_product_detail_table');
	})
	

});

