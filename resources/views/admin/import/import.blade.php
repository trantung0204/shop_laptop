@extends('admin.layouts.master')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
            <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Import Receipt</h3> 
	              <a class="btn btn-success " id="add_button" data-url="">Create Receipt</a> 
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="import-table"  data-url='{{ route('getImportReceipts') }}' class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>#</th>
	                  <th>Mã Phiếu Nhập</th>
	                  <th>Người tạo</th>
	                  <th>Tổng tiền</th>
	                  <th>Thời gian</th>
	                  <th>Thao tác</th>
	                </tr>
	                </thead>

	                <tfoot>
	                <tr>
	                  <th>#</th>
                    <th>Mã Phiếu Nhập</th>
                    <th>Người tạo</th>
                    <th>Tổng tiền</th>
                    <th>Thời gian</th>
                    <th>Thao tác</th>
	                </tr>
	                </tfoot>
	              </table>
	              {{-- <a class="btn btn-success" data-toggle="modal" href='#add' >Thêm bài viết mới</a> --}}
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->

            <div class="modal fade" id="add_receipt">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Tạo Phiếu Nhập Hàng</h4>
                  </div>
                  <div class="modal-body">
                    <h5 id="form_creator" data-id="{{Auth::guard('admin')->user()->id}}"><i class="fa fa-user-o" aria-hidden="true"></i> {{Auth::guard('admin')->user()->name}}</h5>

                    <div class="form-group">
                      <label for="code">Mã phiếu nhập:</label>
                      <input type="text" name="code" class="form-control" id="receipt_code" value="

                      ">
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="receipt_category">Danh mục:</label>
                          <select name="receipt_category" id="receipt_category" class="form-control" required="required">
                            @foreach ($categories as $category)
                              {{-- @continue($category->parent_id==null) --}}
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="receipt_product">Sản phẩm:</label>
                          <select name="receipt_product" id="receipt_product" class="form-control" required="required">
                            @foreach ($products as $product)
                              <option value="{{$product->code}}">{{$product->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row detail-table">
                      <div class="col-md-12">
                        <h3>Bảng chi tiết sản phẩm</h3>
                        <table id="product_detail_table" class="table table-hover" style="width: 100%;">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Mã</th>
                              <th>Tên</th>
                              <th>Kích cỡ</th>
                              <th>Màu sắc</th>
                              <th>CPU</th>
                              <th>RAM</th>
                              <th>VGA</th>
                              <th>Ổ cứng</th>
                              <th>Độ phân giải</th>
                              <th>Hành động</th>
                            </tr>
                          </thead>

                          <tbody>
                            
                          </tbody>

                          <tfoot>
                            <tr>
                              <th>#</th>
                              <th>Mã</th>
                              <th>Tên</th>
                              <th>Kích cỡ</th>
                              <th>Màu sắc</th>
                              <th>CPU</th>
                              <th>RAM</th>
                              <th>VGA</th>
                              <th>Ổ cứng</th>
                              <th>Độ phân giải</th>
                              <th>Hành động</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>

                    <h3>Bảng phiếu nhập</h3>
                    <table id="receipt_detail_table" class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Id chi tiết</th>
                          <th>Mã hàng</th>
                          <th>Tên hàng</th>
                          <th>Màu</th>
                          <th>Cỡ</th>
                          <th>CPU</th>
                          <th>RAM</th>
                          <th>VGA</th>
                          <th>Ổ cứng</th>
                          <th>Độ phân giải</th>
                          <th>Giá bán</th>
                          <th>Giá khuyến mãi</th>
                          <th>Số lượng</th>
                          <th>Giá nhập</th>
                          <th>Thành tiền</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="15">Tổng tiền</th>
                          <th id="receipt_total">0 VNĐ</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="btn-add-receipt" type="button" data-url="{{ route('imports.store') }}" data-url-create-data="{{ route('imports.createReceiptData') }}" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="edit_receipt">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Sửa Phiếu Nhập Hàng</h4>
                  </div>
                  <div class="modal-body">
                    <h5 id="form_editor" data-id="{{Auth::guard('admin')->user()->id}}"><i class="fa fa-user-o" aria-hidden="true"></i> {{Auth::guard('admin')->user()->name}}</h5>
                    
                    {{-- <form action="/action_page.php"> --}}
                      <div class="form-group">
                        <label for="code">Mã phiếu nhập:</label>
                        <input type="text" name="code" class="form-control" id="edit_receipt_code">
                      </div>
                      {{-- <button type="submit" class="btn btn-default">Submit</button> --}}
                    {{-- </form> --}}
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="receipt_category">Danh mục:</label>
                          <select name="receipt_category" id="edit_receipt_category" class="form-control" required="required">
                            @foreach ($categories as $category)
                              {{-- @continue($category->parent_id==null) --}}
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="receipt_product">Sản phẩm:</label>
                          <select name="receipt_product" id="edit_receipt_product" class="form-control" required="required">
                            @foreach ($products as $product)
                              <option value="{{$product->code}}">{{$product->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row detail-table">
                      <div class="col-md-12">
                        <h3>Bảng chi tiết sản phẩm</h3>
                        <table id="edit_product_detail_table" class="table table-hover" style="width: 100%;">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Mã</th>
                              <th>Tên</th>
                              <th>Kích cỡ</th>
                              <th>Màu sắc</th>
                              <th>CPU</th>
                              <th>RAM</th>
                              <th>VGA</th>
                              <th>Ổ cứng</th>
                              <th>Độ phân giải</th>
                              <th>Hành động</th>
                            </tr>
                          </thead>

                          <tbody>
                            
                          </tbody>

                          <tfoot>
                            <tr>
                              <th>#</th>
                              <th>Mã</th>
                              <th>Tên</th>
                              <th>Kích cỡ</th>
                              <th>Màu sắc</th>
                              <th>CPU</th>
                              <th>RAM</th>
                              <th>VGA</th>
                              <th>Ổ cứng</th>
                              <th>Độ phân giải</th>
                              <th>Hành động</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>

                    <table id="edit_receipt_detail_table" class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Id chi tiết</th>
                          <th>Mã hàng</th>
                          <th>Tên hàng</th>
                          <th>Màu</th>
                          <th>Cỡ</th>
                          <th>CPU</th>
                          <th>RAM</th>
                          <th>VGA</th>
                          <th>Ổ cứng</th>
                          <th>Độ phân giải</th>
                          <th>Giá bán</th>
                          <th>Giá khuyến mãi</th>
                          <th>Số lượng</th>
                          <th>Giá nhập</th>
                          <th>Thành tiền</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="15">Tổng tiền</th>
                          <th id="edit_receipt_total">0 VNĐ</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="btn-edit-receipt" type="button" data-url="" data-url-update-data="{{ route('imports.updateReceiptData') }}" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="show_receipt">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Chi Tiết Phiếu Nhập</h4>
                  </div>
                  <div class="modal-body">
                    <div id="header-show-modal" >
                      <h2>PHIẾP NHẬP KHO</h2>
                      <p>Mã phiếu: <span></span></p>
                      <h4></h4>
                    </div>
                    <table id="receipt_show_table" class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Id chi tiết</th>
                          <th>Mã hàng</th>
                          <th>Tên hàng</th>
                          <th>Màu</th>
                          <th>Kích thước</th>
                          <th>CPU</th>
                          <th>RAM</th>
                          <th>VGA</th>
                          <th>Disk</th>
                          <th>Resolution</th>
                          <th>Giá bán</th>
                          <th>Giá khuyến mãi</th>
                          <th>Số lượng</th>
                          <th>Giá nhập</th>
                          <th>Thành tiền</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                      <tfoot>
                          <tr>
                            <th colspan="10">Tổng số mặt hàng</th>
                            <th id="item_total"></th>
                          </tr>
                          <tr>
                            <th colspan="15">Tổng số tiền</th>
                            <th id="receipt_price"></th>
                          </tr>
                          <tr>
                            <th colspan="15">Tổng số tiền (viết bằng chữ)</th>
                            <th id="receipt_total_write"></th>
                          </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a id="btn-print-receipt" href="" class="btn btn-primary">Print</a>
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
  #add_button{
    margin-left: 30px;
  }
  #header-show-modal{
    text-align: center;
  }
  #form_creator{
    line-height: 20px;
    height: 20px;
    text-align: right;
  }
  #form_editor{
    line-height: 20px;
    height: 20px;
    text-align: right;
  }
  #addToReceipt, #edit_addToReceipt{
    margin-top: 25px; 
    display: none;
  }
  #add_receipt>div{
    width: 95%;
  }
  #edit_receipt>div{
    width: 95%;
  }
  #show_receipt>div{
    width: 80%;
  }
  #edit_receipt>div{
    width: 95%;
  }
  #receipt_detail_table th,#receipt_detail_table td,{
    text-align: center;
  }
  #receipt_show_table th,#receipt_show_table td{
    text-align: center;
  }
  #edit_receipt_detail_table th,#edit_receipt_detail_table td{
    text-align: center;
  }
  .detail-table{
    margin-bottom: 40px;
  }

</style>
@endsection

@section('js')
<script type="text/javascript" charset="utf-8" async defer>
      var asset="{{ asset('/') }}";
      var countHorizon=0; //biến đếm dòng trong bảng thêm chi tiết vào phiếu nhập
</script>
<script src="{{ asset('admin_asset/js/ajax_import.js') }}"></script>
<script src="{{ asset('js/autoNumeric-min.js') }}"></script>
@endsection