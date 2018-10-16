@extends('admin.layouts.master')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
            <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Danh sách sản phẩm</h3>
	              <a class="btn btn-success " id="add_button">Thêm sản phẩm</a> 
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="product-table"  data-url='{{route("getProducts")}}' class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>#</th>
	                  <th>Ảnh</th>
	                  <th>Mã</th>
	                  <th>Tên</th>
	                  <th>Nhãn hiệu</th>
	                  <th>Danh mục</th>
	                  <th>Ngày tạo</th>
	                  <th>Slider</th>
	                  <th>Hành động</th>
	                </tr>
	                </thead>

	                <tfoot>
	                <tr>
	                  <th>#</th>
	                  <th>Ảnh</th>
	                  <th>Mã</th>
	                  <th>Tên</th>
	                  <th>Nhãn hiệu</th>
	                  <th>Danh mục</th>
	                  <th>Ngày tạo</th>
	                  <th>Slider</th>
	                  <th>Hành động</th>
	                </tr>
	                </tfoot>
	              </table>
	              {{-- <a class="btn btn-success" data-toggle="modal" href='#add' >Thêm bài viết mới</a> --}}
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->

			<div class="modal fade" id="show">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title" id="product_name">Thông tin sản phẩm</h4>
			        </div>
			        <div class="modal-body">
			          <h3 style="color: #969696; font-weight: lighter;" id="product_description"></h3>
			          <div id="product_content">
			            
			          </div>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>
			    </div>
			</div>

		    <div class="modal fade" id="edit">
		        <div class="modal-dialog modal-lg">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		          <h4 class="modal-title">Sửa thông tin sản phẩm</h4>
		        </div>
		        <div class="modal-body">
		        <form id="edit-form"  method="POST" role="form" >
		          {{csrf_field()}}<!-- sinh token -->
		          <div class="form-group">
		            <label for="edit_name">Tên sản phẩm</label>
		            <input name="edit_name" type="text" id="edit_name" class="form-control" placeholder="Tên sản phẩm" required="true">
		            <input type="hidden" name="edit_code" id="edit_code">
		          </div>
		          <div class="form-group">
		            <label for="edit_description">Mô tả</label>
		            <textarea name="edit_description" id="edit_description" class="form-control" rows="3" required="required"></textarea>
		          </div>
		          <div class="form-group">
		            <label for="edit_content">Nội dung</label>
		            <textarea name="edit_content" id="editor_edit_content"></textarea>
		          </div>
		          <div class="form-group">

		            <label for="edit_brand_id">Nhãn hiệu</label>
		            
		            <select name="edit_brand_id" id="edit_brand_id" class="form-control" required="required">
		              @foreach ($brands as $brand)
		                <option value="{{$brand->id}}">{{$brand->name}}</option>
		              @endforeach
		            </select>
		          </div>
		          <div class="form-group">
		            <label for="edit_category_id">Danh mục</label>
		            
		            <select name="edit_category_id" id="edit_category_id" class="form-control" required="required">
		              	@foreach ($categories as $category)
			              	@if ($category->parent_id!=null)
		                		<option value="{{$category->id}}">{{$category->name}}</option>
		                	@endif
		              	@endforeach
		            </select>
		          </div>

		          <div class="checkbox">
		          	<label>
		            	<input name="slide" id="edit_slide" type="checkbox" value="" >
		          		Hiện trên Slider?
		          	</label>
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
			
			<div class="modal fade" id="detail">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title" id="title-detail">Chi tiết các mặt hàng</h4>
			        </div>
			        <div class="modal-body">
			          <table id="product-detail-table"  data-url='' class="table table-bordered table-striped">
			            <thead>
			            <tr>
			              <th>#</th>
			              <th>Mã</th>
			              <th>Tên</th>
			              <th class="row-size">Kích cỡ</th>
			              <th class="row-color">Màu sắc</th>
			              <th class="row-cpu">CPU</th>
			              <th class="row-ram">RAM</th>
			              <th class="row-vga">VGA</th>
			              <th class="row-disk">Ổ cứng</th>
			              <th class="row-resolution">Độ phân giải</th>
			              <th>Hành động</th>
			            </tr>
			            </thead>

			            <tfoot>
			            <tr>
			              <th>#</th>
			              <th>Mã</th>
			              <th>Tên</th>
			              <th class="row-size">Kích cỡ</th>
			              <th class="row-color">Màu sắc</th>
			              <th class="row-cpu">CPU</th>
			              <th class="row-ram">RAM</th>
			              <th class="row-vga">VGA</th>
			              <th class="row-disk">Ổ cứng</th>
			              <th class="row-resolution">Độ phân giải</th>
			              <th>Hành động</th>
			            </tr>
			            </tfoot>
			          </table>
			          <form action="" method="POST" class="form-inline" role="form">
			          {{csrf_field()}}<!-- sinh token -->
			            <label style="margin-right: 40px;" >Thêm item: </label>
			            <div class="form-group">
			              <label for="add_color_id">Màu sắc</label>
			              <select name="add_color_id" id="add_color_id" class="form-control" required="required">
			                @foreach ($colors as $color)
			                  <option value="{{$color->id}}">{{$color->name}}</option>
			                @endforeach
			              </select>
			            </div>
			            <input type="hidden" name="add_code" id="add_code" value="">
			            <div class="form-group">
			              <label for="add_size_id">Kích cỡ</label>
			              <select name="add_size_id" id="add_size_id" class="form-control" required="required">
			                @foreach ($sizes as $size)
			                  <option value="{{$size->id}}">{{$size->size}} inch</option>
			                @endforeach
			              </select>
			            </div>
			            <div class="form-group">
			              <label for="add_cpu">CPU</label>
			              <select name="add_cpu" id="add_cpu" class="form-control" required="required">
			                  <option value="0">CPU</option>
			                  <option value="1">Core i3</option>
			                  <option value="2">Core i5</option>
			                  <option value="3">Core i7</option>
			                  <option value="4">Pentium</option>
			                  <option value="5">Core M</option>
			                  <option value="6">AMD</option>
			              </select>
			            </div>
			            <div class="form-group">
			              <label for="add_ram">RAM</label>
			              <select name="add_ram" id="add_ram" class="form-control" required="required">
			                  <option value="0">RAM</option>
			                  <option value="2">2GB</option>
			                  <option value="4">4GB</option>
			                  <option value="8">8GB</option>
			                  <option value="16">16GB</option>
			                  <option value="32">32GB</option>
			                  <option value="64">64GB</option>
			              </select>
			            </div>
			            <div class="form-group">
			              <label for="add_vga">VGA</label>
			              <select name="add_vga" id="add_vga" class="form-control" required="required">
			                  <option value="0">VGA</option>
			                  <option value="1">GTX 1030</option>
			                  <option value="2">GTX 1050</option>
			                  <option value="3">GTX 1050ti</option>
			                  <option value="4">GTX 1060</option>
			                  <option value="5">GTX 1070</option>
			                  <option value="6">GTX 1080</option>
			                  <option value="6">On Board</option>
			              </select>
			            </div>
			            <div class="form-group">
			              <label for="add_disk">DISK</label>
			              <select name="add_disk" id="add_disk" class="form-control" required="required">
			                  <option value="0">DISK</option>
			                  <option value="128">128GB</option>
			                  <option value="256">256GB</option>
			                  <option value="512">512GB</option>
			                  <option value="1000">1TB</option>
			                  <option value="2000">2TB</option>
			              </select>
			            </div>
			            <div class="form-group">
			              <label for="add_resolution">Độ phân giải</label>
			              <select name="add_resolution" id="add_resolution" class="form-control" required="required">
			                  <option value="0">Res</option>
			                  <option value="768">HD 768</option>
			                  <option value="1080">FHD 1080</option>
			                  <option value="1440">2K 1440</option>
			                  <option value="2160">4k 2160</option>
			              </select>
			            </div>

			            {{-- <div class="form-group">
			              <label for="add_quantity">Quantity</label>
			              <input type="number" name="add_quantity" id="add_quantity" class="form-control" value="" required="required" title="">
			            </div> --}}
			          
			            
			          
			            <button type="button" class="btn btn-primary" id="btn-add-detail">Thêm</button>
			          </form>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Đóng</button>
			        </div>
			      </div>
			    </div>
			</div> 
		
		  	<div class="modal fade" id="upload">
		    	<div class="modal-dialog modal-lg">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		          <h4 class="modal-title" id="title-detail-image"></h4>
		        </div>
		        <div class="modal-body">
		          <form id="images-form" action="" method="POST" class="form-inline" data-url='{{ route('imagesUploadPost') }}' role="form" enctype="multipart/form-data">
		            {{ csrf_field() }}
		            <div class="col-sm-4 form-group">
		              <label for="choose_color">Chọn màu</label>
		              <select name="choose_color" id="choose_color" class="form-control">
		                
		                  
		                
		              </select>
		            </div>
		            <input type="hidden" name="image_product_id" id="image_product_id" value="">
		            <div class="col-sm-6 form-group">
		              <label for="">Chọn (nhiều) ảnh</label>
		              <input  type="file" id="uploadFile" name="uploadFile[]" multiple class="form-control">
		            </div>
		          
		            
		          
		            <button type="submit" class="btn btn-primary" id="upload_submit" name='submitImage'>Tải ảnh lên</button>
		          </form>
		          <div class="col-sm-12" id="image_prepare"></div>
		          <div class="col-sm-12" id="image_preview"></div>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
		        </div>
		      </div>
		    	</div>
		  	</div> 

			<div class="modal fade" id="add">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title">Thêm mới sản phẩm</h4>
			        </div>
			        <div class="modal-body">
			        <form id="add-form" data-url="{{ route('addProduct') }}" method="POST" role="form" >
			          {{csrf_field()}}<!-- sinh token -->
			          <div class="form-group">
			            <label for="add_name">Tên sản phẩm</label>
			            <input name="add_name" type="text" id="add_name" class="form-control" placeholder="Tên sản phẩm" required="true">
			            <input type="hidden" name="add_code" id="add_code">
			          </div>
			          <div class="form-group">
			            <label for="add_description">Mô tả</label>
			            <textarea name="add_description" id="add_description" class="form-control" rows="3" required="required" placeholder="Mô tả sản phẩm" ></textarea>
			          </div>
			          <div class="form-group">
			            <label for="add_content">Nội dung</label>
			            <textarea name="add_content" id="editor_add_content"></textarea>
			          </div>
			          <div class="form-group">

			            <label for="add_brand_id">Nhãn hiệu</label>
			            
			            <select name="add_brand_id" id="add_brand_id" class="form-control" required="required">
			              @foreach ($brands as $brand)
			                <option value="{{$brand->id}}">{{$brand->name}}</option>
			              @endforeach
			            </select>
			          </div>
			          <div class="form-group">
			            <label for="add_category_id">Danh mục</label>
			            
			            <select name="add_category_id" id="add_category_id" class="form-control" required="required">
			              @foreach ($categories as $category)
			              	@if ($category->parent_id!=null)
			                	<option value="{{$category->id}}">{{$category->name}}</option>
			              	@endif
			              @endforeach
			            </select>
			          </div>
			          <div class="checkbox">
			          	<label>
			            	<input name="slide" id="add_slide" type="checkbox" value="" >
			          		Hiện trên Slider?
			          	</label>
			          </div>
			        {{-- Thêm chi tiết sản phẩm --}}
			        {{-- <div id="product-detail-table-wapper">
			          <table id="product-detail-table"  data-url='' class="table table-bordered table-striped">
			            <thead>
			            <tr>
			              <th>#</th>
			              <th>Code</th>
			              <th>Name</th>
			              <th>Size</th>
			              <th>Color</th>
			              <th>Action</th>
			            </tr>
			            </thead>

			            <tfoot>
			            <tr>
			              <th>#</th>
			              <th>Code</th>
			              <th>Name</th>
			              <th>Size</th>
			              <th>Color</th>
			              <th>Action</th>
			            </tr>
			            </tfoot>
			          </table>
				          <form action="" method="POST" class="form-inline" role="form">
				          {{csrf_field()}}<!-- sinh token -->
				            <label style="margin-right: 40px;" >Add new items: </label>
				            <div class="form-group">
				              <label for="add_color_id">Color</label>
				              <select name="add_color_id" id="add_color_id" class="form-control" required="required">
				                @foreach ($colors as $color)
				                  <option value="{{$color->id}}">{{$color->name}}</option>
				                @endforeach
				              </select>
				            </div>
				            <input type="hidden" name="add_code" id="add_code" value="">
				            <div class="form-group">
				              <label for="add_size_id">Size</label>
				              <select name="add_size_id" id="add_size_id" class="form-control" required="required">
				                @foreach ($sizes as $size)
				                  <option value="{{$size->id}}">{{$size->size}}</option>
				                @endforeach
				              </select>
				            </div>

				            <div class="form-group">
				              <label for="add_quantity">Quantity</label>
				              <input type="number" name="add_quantity" id="add_quantity" class="form-control" value="" required="required" title="">
				            </div>
				          
				            
				          
				            <button type="button" class="btn btn-primary" id="btn-add-detail">Add</button>
				          </form>
			          </div>
			        </div> --}}
			        <div class="modal-footer">
			          <button id="add-submit"  type="submit" class="btn btn-primary">Xác nhận</button>
			        </form>
			        </div>
			      </div>
			    </div>
			</div> 
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
@endsection

@section('css')
<style type="text/css" media="screen">
  #add-new{
    margin-left: 30px;
  }
  .table-row td{
    vertical-align: middle !important;
  }
  #image_preview,#image_prepare{
    margin-top: 30px;
  }
  .image-append{
     height:100px; 
     display:inline-block; 
     opacity: 0.8;
     transition: 0.2s;
  }
  .image-append:hover{
    opacity: 1;
  }
  .image-div{
    position: relative;
    display: inline-block;
    box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.15);
    margin-right: 15px; 
    margin-bottom: 15px;
    border-radius: 6px;
  }
  .btn-del-image{
    position: absolute;
    transform: translate(50%, 50%);
    top: -20px ;
    right: 0px ;
    color: #D73925;
    font-size: 20px;
    cursor: pointer;
    background: white;
    border-radius: 50%;
  }
  .btn-menu:hover .btn-text{
    display: inline;
  }
  .btn-text{
    display: none;
    transition: 0.4s;
  }
  #add .modal-body{
  	max-height: 80vh;
  	overflow: auto;
  }
  #show img{
  	width: 95%;
  }
  #add_button{
  	margin-left: 25px;
  }
  .table-row{
  	cursor: pointer;
  }
  #detail .modal-dialog{
  	min-width: 80%;
  }
  #product-detail-table {
  	width: 100% !important;
  }
</style>
@endsection

@section('js')
<script type="text/javascript" charset="utf-8">
	var asset="{{ asset('/') }}";
	console.log(asset);
</script>
<script src="{{ asset('admin_asset/js/ajax_product.js') }}"></script>
<script type="text/javascript" charset="utf-8" async defer>
    CKEDITOR.replace( 'editor_edit_content' );
    CKEDITOR.replace( 'editor_add_content' );
  	//CKEDITOR.replace( 'econtent' );
  	CKEDITOR.editorConfig = function( config ) {
        // Define changes to default configuration here. For example:
        // config.language = 'fr';
        // config.uiColor = '#AADC6E';
        config.width = '400px';

      };
</script>
{{-- <script>
$(function() {
    $('#product-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('getProducts') !!}',
        columns: [
            { data: 'id', name: 'products.id' },
            { data: 'image_link', name: 'image_link' },
            { data: 'code', name: 'products.code' },
            { data: 'name', name: 'products.name' },
            { data: 'origin_price', name: 'products.origin_price' },
            { data: 'sale_price', name: 'products.sale_price' },
            { data: 'brand_name', name: 'products.brand_id' },
            { data: 'category_name', name: 'products.category_id' },
            { data: 'created_at', name: 'products.created_at' },
            { data: 'action', name: 'action' }
        ]
    });

});
</script> --}}
@endsection