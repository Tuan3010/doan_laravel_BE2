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

          {{-- Hiển thị giỏ hàng session --}}
          @if (Session::exists('cart'))
          @for ($i = 0; $i < count($cartArr); $i++)
          <div class="product-list-order">
            <div class="warp-item-form-drive"></div>
            <div class="row">
              <div class="col l-9">
                <div class="media">
                  <div class="media-left">
                    <a href=""><img style="width: 180px; height: 180px;" src="../img/imgProduct/{{$cartArr[$i]['img_product']}}" alt=""></a>
                  </div>
                  <div class="media-right">
                    @php
                      $number = $cartArr[$i]['price_product'] * $cartArr[$i]['quantity'];
                      $formatted_money = number_format($number, 0, ',', '.'); // 1.000.000
                      $totalMoney += $number;                     
                    @endphp
                    <h3 class="product-name"><a href="">{{$cartArr[$i]['name_product']}}</a></h3>
                    <span><b>Giá: </b>{{$formatted_money}}</span>
                    <div class="size-quantity">
                      <span class="size-title">Size</span>
                      <span class="quantity-title">Số lượng</span>
                      <span class="quantity-title">Màu sắc</span>
                      <form  action="{{route('user.updatecart')}}" method="post" style="display: flex">
                        @csrf
                        <input type="hidden" name="id_product" value="{{$cartArr[$i]['id_product']}}">
                        <select name="size" id="sizeSelect" size="1" style="margin-right: 10px">
                          @foreach ($cartArr[$i]['sizes'] as $size)
                              <option {{($cartArr[$i]['size'] == $size->name_size) ? 'selected' : ''}}
                              value="{{$size->name_size}}">{{$size->name_size}}
                              </option>
                          @endforeach       
                        </select>  

                        <div class="box-input" >
                          <input style=" width: 100%;padding: 10px; border: 1px solid #ccc; font-size: 15px" 
                          type="number" name="quantity" min="1" max="10" value="{{$cartArr[$i]['quantity']}}">
                        </div>

                        <select style="margin-left: 10px" name="color" id="quantitySelect" size="1">
                          @foreach ($cartArr[$i]['colors'] as $color)
                              <option {{($cartArr[$i]['color'] == $color->name_color) ? 'selected' : ''}}
                              value="{{$color->name_color}}">{{$color->name_color}}
                              </option>
                          @endforeach                       
                        </select>

                        <input class="btn-refesh" type="submit" value="Refesh">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3">
                <div class="media2">
                  @php
                      $number = $cartArr[$i]['price_product'] * $cartArr[$i]['quantity'];
                      $formatted_money = number_format($number, 0, ',', '.'); // 1.000.000                     
                  @endphp
                  <span class="price-product">{{$formatted_money}} VND</span>
                  <span class="status">Còn hàng</span>
                  <div class="btn-like-add">
                    <form action="#" method="post">                     
                      <button class="btn-like"><img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Heart.svg" alt=""></button>
                    </form>
                    <form action="{{route('user.deleteorder')}}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="{{$i}}">
                      <button class="btn-del" >
                        <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Trash_bin.svg" alt="">
                      </button>
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endfor              
          @endif
          {{-- Hiển thị giỏ hàng user --}}
          @auth
          @foreach ($cartUser as $item)
              
          <div class="product-list-order">
            <div class="warp-item-form-drive"></div>
            <div class="row">
              <div class="col l-9">
                <div class="media">
                  <div class="media-left">
                    <a href=""><img style="width: 180px; height: 180px;" src="../uploads/{{$item['img_product']}}" alt=""></a>
                  </div>
                  <div class="media-right">
                    @php
                      $number = $item['price'];
                      $formatted_money = number_format($number, 0, ',', '.'); // 1.000.000                     
                    @endphp
                    <h3 class="product-name"><a href="">{{$item['name_product']}}</a></h3>
                    <span><b>Giá: </b>{{$formatted_money}}</span>
                    <div class="size-quantity">
                      <span class="size-title">Size</span>
                      <span class="quantity-title">Số lượng</span>
                      <span class="quantity-title">Màu sắc</span>
                      <form  action="{{route('user.updatecart')}}" method="post" style="display: flex">
                        @csrf
                        <input type="hidden" name="id_product" value="{{$item['id_product']}}">
                        <select name="size" id="sizeSelect" size="1" style="margin-right: 10px">
                          @foreach ($item['sizes'] as $size)
                              <option {{($item['size'] == $size->name_size) ? 'selected' : ''}}
                              value="{{$size->name_size}}">{{$size->name_size}}
                              </option>
                          @endforeach       
                        </select>  

                        <div class="box-input" >
                          <input style=" width: 100%;padding: 10px; border: 1px solid #ccc; font-size: 15px" 
                          type="number" name="quantity" min="1" max="10" value="{{$item['quantity']}}">
                        </div>

                        <select style="margin-left: 10px" name="color" id="quantitySelect" size="1">
                          @foreach ($item['colors'] as $color)
                              <option {{($item['color'] == $color->name_color) ? 'selected' : ''}}
                              value="{{$color->name_color}}">{{$color->name_color}}
                              </option>
                          @endforeach                       
                        </select>

                        <input class="btn-refesh" type="submit" value="Refesh">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3">
                <div class="media2">
                  @php
                      $number = $item['price'] * $item['quantity'];
                      $formatted_money = number_format($number, 0, ',', '.'); // 1.000.000
                      $totalMoney += $number; 
                   
                  @endphp
                  <span class="price-product">{{$formatted_money}} VND</span>
                  <span class="status">Còn hàng</span>
                  <div class="btn-like-add">
                    <form action="#" method="post">                     
                      <button class="btn-like"><img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Heart.svg" alt=""></button>
                    </form>
                    <form action="{{route('user.deleteorder')}}" method="post">
                      @csrf
                      <input type="hidden" name="id_product" value="{{$item['id_product']}}">
                      <input type="hidden" name="color" value="{{$item['color']}}">
                      <input type="hidden" name="size" value="{{$item['size']}}">
                      <input type="hidden" name="quantity" value="{{$item['quantity']}}">
                      <button class="btn-del" >
                        <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Trash_bin.svg" alt="">
                      </button>
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          @endforeach
          @endauth
         <br> 
         <div class="btndel-btnreturn">
          <form action="{{route('user.deleteorderall')}}" method="post">
            @csrf
            <button class="btn-bottom" href="">Xóa Hết</button>
          </form>
          <a class="btn-bottom" href="{{route('user/product-list')}}">Quay Lại Mua Hàng</a>
          </div>       
        </div>
      </div>
      <div class="col l-4">
        <div class="warp-right">
          <div class="warp-order">
            <h3>ĐƠN HÀNG</h3>
            <hr>
            <form action="{{route('store.payment')}}" method="post">
              @csrf
              <div class="warp-item-form">                 
                <input type="text" id="name" name="name_buyer" placeholder="HỌ TÊN">
                <!-- Xuất Lỗi -->
                @if ($errors->has('name_buyer'))
                <div class="text-danger">{{ $errors->first('name_buyer') }}</div>
                @endif
              </div>
              <div class="warp-item-form">                 
                <input type="text" id="phone" name="phone" placeholder="Số điện thoại">
                <!-- Xuất Lỗi -->
                @if ($errors->has('phone'))
                <div class="text-danger">{{ $errors->first('phone') }}</div>
                @endif
              </div>
              <div class="warp-item-form">                 
                <input type="text" id="email" name="email" placeholder="Email">
                <!-- Xuất Lỗi -->
                @if ($errors->has('email'))
                <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif
              </div>
              <div class="warp-item-form">                 
                <input type="text" id="address" name="address" placeholder="Địa chỉ">
                <!-- Xuất Lỗi -->
                @if ($errors->has('address'))
                <div class="text-danger">{{ $errors->first('address') }}</div>
                @endif
              </div>
              <div class="warp-item-form">                 
                <select name="payment" id="payment">
                  <option value="1">Thanh toán Trực Tiếp Khi Giao Hàng</option>
                </select>
              </div>
              <div class="warp-item-form-drive"></div>
              
              <div class="warp-item-form">
                @php                   
                    $formatted_totalmoney = number_format($totalMoney, 0, ',', '.');
                @endphp                 
                <span>Tổng Cộng:</span>
                <span class="total-order">{{$formatted_totalmoney}} VND</span>
              </div>
              <input type="hidden" id="total" name="total" value="{{$totalMoney}}">
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

<script>
  function dataToPayment(){
    let color = document.getElementById("");
  }
</script>
@endsection
    
  
  