<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Import Receipt</title>
  <!-- Latest compiled and minified CSS & JS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <style type="text/css" media="screen">
    *{
      font-family: 'TimesNewRoman';
      font-size: 14px;
    }
    th, tr{
      text-align: center;
    }
    .number{
      text-align: right;
    }
    table td{
      font-size: 16px;
      font-weight: lighter;
    }
    table th{
      font-size: 15px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <div style="text-align: center;">
      <h2>PHIẾP NHẬP KHO</h2>
      <p>Mã phiếu: <span>{{$receiptInfo->code}}</span></p>
      @php
      function readDate($date)
      {
          $date=substr($date,0,10);
          $date=explode("-",$date);

          $strDate="Ngày ".$date[2]." tháng ".$date[1]." năm ".$date[0];
          return $strDate;
      }
      @endphp
      <h4>{{readDate($receiptInfo->created_at)}}</h4>
    </div>
    <table id="receipt_show_table" class="table table-hover table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Id chi tiết</th>
          <th>Mã hàng</th>
          <th>Tên hàng</th>
          <th>Màu</th>
          <th>Cỡ</th>
          <th>Giá bán</th>
          <th>Giá khuyến mãi</th>
          <th>Số lượng</th>
          <th>Giá nhập</th>
          <th>Thành tiền</th>
        </tr>
      </thead>
      <tbody>
        @php
          $index=1;
          $qty=0;
          $sum=0;
        @endphp
        @foreach ($data as $item)
          <tr>
            <td>{{$index}}</th>
            <td>{{$item['product_details_id']}}</td>
            <td>{{$item['product_code']}}</td>
            <td>{{$item['product_name']}}'</td>
            <td>{{$item['color']}}</td>
            <td>{{$item['size']}}</td>
            <td class="number">{{number_format($item['origin_price'])}} VNĐ</td>
            <td class="number">{{number_format($item['sale_price'])}} VNĐ</td>
            <td>{{$item['quantity']}} Chiếc</td>
            <td class="number">{{number_format($item['import_price'])}} VNĐ</td>
            <td class="number">{{number_format($item['import_price']*$item['quantity'])}} VNĐ</td>
          </tr>
          @php
            $index++;
            $qty+=$item['quantity'];
            $sum+=$item['import_price']*$item['quantity'];
          @endphp
        @endforeach
      </tbody>
      <tfoot>
          <tr>
            <th colspan="10">Tổng số mặt hàng</th>
            <th >{{$qty}} Chiếc</th>
          </tr>
          <tr>
            <th colspan="10">Tổng số tiền</th>
            <th class="number">{{number_format($sum)}} VNĐ</th>
          </tr>
          <tr>
            <th colspan="10">Tổng số tiền (viết bằng chữ)</th>
            <th></th>
          </tr>
      </tfoot>
    </table>
  </div>
</body>
</html>