@extends('layout')
@section('content')
    
<!-- Content -->
<link rel="stylesheet" href="css/style-order.css">
<div class="content">
  <div class=" grid wide order-list">
    <div class="row">
      <div class="col l-8">
        <div class="warp-left">
          <h3 class="order-list-title">GIỎ HÀNG</h3>
          <hr>
          @foreach (Session::get('cart') as $item)
              
          <div class="product-list-order">
            <div class="warp-item-form-drive"></div>
            <div class="row">
              <div class="col l-9">
                <div class="media">
                  <div class="media-left">
                    <a href=""><img style="width: 180px; height: 180px;" src="../img/imgProduct/{{$item['img_product']}}" alt=""></a>
                  </div>
                  <div class="media-right">
                    @php
                      $number = $item['price_product'];
                      $formatted_money = number_format($number, 0, ',', '.'); // 1.000.000                     
                    @endphp
                    <h3 class="product-name"><a href="">{{$item ['name_product']}}</a></h3>
                    <span><b>Giá: </b>{{$formatted_money}}</span>
                    <div class="size-quantity">
                      <span class="size-title">Size</span>
                      <span class="quantity-title">Số lượng</span>
                      <span class="quantity-title">Màu sắc</span>
                      <form  action="#" method="get">
                        
                        <select name="size" id="sizeSelect" size="1" >
                          <option>1</option>
                          <option>2</option>              
                        </select>  

                        <select name="quantity" id="quantitySelect" size="1">
                          <option >1</option>
                          <option>2</option>                      
                        </select>

                        <select style="margin-left: 15px" name="quantity" id="quantitySelect" size="1">
                          <option >1</option>
                          <option>2</option>                      
                        </select>

                        <input type="submit" value="Refesh">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3">
                <div class="media2">
                  @php
                      $number = $item['price_product'] * $item['quantity'];
                      $formatted_money = number_format($number, 0, ',', '.'); // 1.000.000                     
                  @endphp
                  <span class="price-product">{{$formatted_money}} VND</span>
                  <span class="status">Còn hàng</span>
                  <div class="btn-like-add">
                    <form action="#" method="post">
                      
                      <button class="btn-like"><img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Heart.svg" alt=""></button>
                    </form>
                    <a class="btn-del" href="#  ">
                      <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Trash_bin.svg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          @endforeach         
        </div>
      </div>
      <div class="col l-4">
        <div class="warp-right">
          <div class="warp-order">
            <h3>ĐƠN HÀNG</h3>
            <hr>
            <form action="#" method="post">
              <div class="warp-item-form">                 
                <input type="text" id="name" name="name" placeholder="HỌ TÊN">
              </div>
              <div class="warp-item-form">                 
                <input type="text" id="name" name="name" placeholder="Số điện thoại">
              </div>
              <div class="warp-item-form">                 
                <input type="text" id="name" name="name" placeholder="Email">
              </div>
              <div class="warp-item-form">                 
                <input type="text" id="name" name="name" placeholder="Địa chỉ">
              </div>
              <div class="warp-item-form">                 
                <select name="" id="">
                  <option value="">Thanh toán Trực Tiếp Khi Giao Hàng</option>
                </select>
              </div>
              <div class="warp-item-form-drive"></div>
              
              <div class="warp-item-form">                 
                <span>Tổng Cộng:</span>
                <span class="total-order">2.923.000 VND</span>
              </div>
              <div class="warp-item-form">                 
                <input class="btn-submit" type="submit"  value="Thanh toán">
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
    
  
  