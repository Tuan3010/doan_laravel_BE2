@extends('layout')
@section('content')
    
<!-- Content -->
<link rel="stylesheet" href="css/style-result-search-order.css">
<div class="content">
  <div class="grid wide result-search-order">
    <h1 class="result-search-order-title">Thông tin đơn hàng <a href="#">#TSL03456</a></h1>
    <span class="result-search-order-slogan">Cảm ơn vì đã đặt hàng bên shop , shop iu cảm ơn khách iu gất nhiều  </span>
    <div class="line"></div>
    <div class="row">
      <div class="col l-6 ">
        <div class="item bg-grey">
          <h3>THÔNG TIN KHÁCH HÀNG</h3>
          <div class="line"></div>
          <span><strong>Họ tên: </strong>{{$order->name_buyer}}</span>
          <span><strong>Điện thoại: </strong>{{$order->phone}}</span>
          <span><strong>Email: </strong>{{$order->email}}</span>
          <span><strong>Địa chỉ: </strong>{{$order->address}}</span>
        </div>
      </div>
      <div class="col l-6 ">
        <div class="item bg-grey">
          <h3>THÔNG TIN GIAO NHẬN</h3>
          <div class="line"></div>
          <span><strong>Họ tên: </strong>{{$order->name_buyer}}</span>
          <span><strong>Điện thoại: </strong>{{$order->phone}}</span>
          <span><strong>Email: </strong>{{$order->email}}</span>
          <span><strong>Địa chỉ: </strong>{{$order->address}}</span>
        </div>
      </div>
      
      <div class="col l-6 ">
        <div class="item bg-grey">
          <h3>DANH SÁCH SẢN PHẨM</h3>
          <div class="line"></div>
          <div class="item-product-wrap">
            @php
                $tongcong = 0;
            @endphp
            @foreach ($products as $item)
                
            <div class="item-product">
              <div class="row">
                <div class="col l-4">
                  <div class="img-product">
                    <img width="100%" src="https://ananas.vn/wp-content/uploads/{{$item->img_product}}" alt="">
                  </div>
                </div>
                <div class="col l-8">
                  <span><strong>{{$item->name_product}}</strong></span>
                  <span><strong>Giá:</strong>{{$item->price_one_product}}</span>
                  <span><strong>Size:</strong>{{$item->size}}</span>
                  <span><strong>Số lượng:</strong>{{$item->quantity}}</span>
                  <span><strong>Màu:</strong>{{$item->color}}</span>
                  @php
                      $tongcong +=$item->total_price;
                  @endphp
                  <span><strong>{{$item->total_price}} VND</strong></span>
                </div>
              </div>
            </div>
            
            @endforeach
            
          </div>
        </div>
      </div>
      <div class="col l-6 ">
        <div class="item bg-grey">
          <h3>THANH TOÁN</h3>
          <div class="line"></div>
          @php
              $tongcongfortmat = number_format($tongcong, 0, ',', '.');
          @endphp
          <span><strong>Trị giá: </strong>{{$tongcongfortmat}}đ</span>
          <span><strong>Giảm giá: 0đ</strong></span>
          <span><strong>Phí giao hàng: 0đ</strong></span>
          <span><strong>Tổng thanh toán: </strong>{{$tongcongfortmat}} VND</span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
  