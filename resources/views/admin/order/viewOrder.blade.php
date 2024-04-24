@extends('layoutadmin')
@section('contentadmin')
    {{-- Viết code ở đây --}}
    <section class="content">
      <div class="invoice p-3 mb-3">
        <!-- title row -->
        <div class="row">
          <div class="col-12">
            <h3 class="text-center">
               Hóa đơn
            </h3>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info m-5">
          <div class="col-sm-4 invoice-col">
            Từ
            <address>
              <strong>Tên Shop</strong><br>
              Phone: (804) 123-5432<br>
              Email: Coopee@almasaeedstudio.com
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            Đến
            <address>
              <strong>{{$infoUser['name_buyer']}}</strong><br>
              <span>Địa chỉ: {{$infoUser['address']}}</span><br>
              <span>Sđt: {{$infoUser['phone']}}</span><br>
              Email: {{$infoUser['email']}}
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <b>Mã HĐ: {{$infoUser['code_order']}}</b><br>
            <br>
            <b>Ngày:</b>{{$infoUser['date']}}<br>
            <b>Payment :</b>{{$namePayment['name_payment']}}<br>
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Màu sắc</th>
                <th>size</th>
                <th>Giá</th>
                <th>Thành tiền</th>
              </tr>
              </thead>
              <tbody>
                @php 
                  $i = 1;
                  $tongcong = 0 
                @endphp
                @foreach ($detailsOrders as $item)                   
                <tr>
                  @php                   
                    $formatted_price_one = number_format($item['price_one_product'], 0, ',', '.');
                    $formatted_total_price = number_format($item['total_price'], 0, ',', '.');

                  @endphp
                  <td>{{$i}}</td>
                  <td>{{$item['name_product']}}</td>
                  <td>{{$item['quantity']}}</td>
                  <td>{{$item['color']}}</td>
                  <td>{{$item['size']}}</td>
                  <td>{{$formatted_price_one}}</td>
                  <td>{{$formatted_total_price}}</td>
                </tr>
                @php
                  $tongcong += $item['total_price'];
                  $i++ 
                @endphp
                @endforeach
              
              <tr>
                <td>Tổng cộng</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                @php                   
                    $formatted_tongcong = number_format($tongcong, 0, ',', '.');
                @endphp
                <td>{{$formatted_tongcong}} vnđ</td>
              </tr>              
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
          <div class="col-12">
            <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
            <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
              Payment
            </button>
            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
              <i class="fas fa-download"></i> Generate PDF
            </button>
          </div>
        </div>
      </div>  
  
    </section>
@endsection