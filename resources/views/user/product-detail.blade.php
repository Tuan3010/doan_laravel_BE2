@extends('layout')
@section('content')
    
<!-- Content -->
<link rel="stylesheet" href="../../css/style-product-detail.css">
<div class="content">
  <div class="grid wide product-detail">
    <div class="row">
      <div class="col l-7">
        <div class="warp-img-product">
          <div class="img-main">
            <img style="width: 100%;" src="../img/imgProduct/{{$productItem->img_product}}" alt="">
          </div>
          <div class="img-product-list">
            <div class="row">
              <div class="col l-3">
                <img style="width: 100%" src="https://ananas.vn/wp-content/uploads/Pro_AV00208_1.jpg" alt="">
              </div>
              <div class="col l-3">
                <img style="width: 100%" src="https://ananas.vn/wp-content/uploads/Pro_AV00208_1.jpg" alt="">
              </div>
              <div class="col l-3">
                <img style="width: 100%" src="https://ananas.vn/wp-content/uploads/Pro_AV00208_1.jpg" alt="">
              </div>
              <div class="col l-3">
                <img style="width: 100%" src="https://ananas.vn/wp-content/uploads/Pro_AV00208_1.jpg" alt="">
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
      <div class="col l-5">
        <div class="warp-right">
          <h3 class="warp-right-name-product">{{$productItem->name_product}}</h3>
          <span class="warp-right-price">{{$productItem->price_product}} VND</span>
          <div class="line"></div>   
          <form  action="{{route('store.cartandpay')}}" method="post" style="margin-top: 35px;">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$productItem->id}}">
            <input type="hidden" name="id_product" id="id_product" value="{{$productItem->id_product}}">
            <input type="hidden" name="name_product" id="name_product" value="{{$productItem->name_product}}">
            <input type="hidden" name="price_product" id="price_product" value="{{$productItem->price_product}}">
            <input type="hidden" name="img_product" id="img_product" value="{{$productItem->img_product}}">
            <span>Màu sắc</span>
            <select name="color" id="sizeSelect" size="1">
              <option>Xanh</option>
              <option>Đỏ</option>              
            </select>  
            <span>Số lượng</span>
            <div class="box-input" >
              <input style=" width: 50%;padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; font-size: 16px; padding-left: 22px" type="number" name="quantity" min="1" max="10" value="1">
            </div>
            <span>Size</span>
            <select name="size" id="quantitySelect" size="1">
              <option >1</option>
              <option>2</option>                      
            </select>
            <input class="btn-add-cart" type="submit" name="addCart" value="Thêm Vào Giỏ Hàng">
            <input class="btn-submit" type="submit" name="pay"  value="Thanh Toán">
          </form>
          <form  action="" method="post" style="position: relative;">
            <button class="btn-like" type="submit"><img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Heart_product_1.svg" alt=""></button>
          </form>
          <h5 class="des-product-title">Thông tin sản phẩm</h5>
          <div class="line"></div>
          <p class="des-product" >{{$productItem->des_product}}</p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
  