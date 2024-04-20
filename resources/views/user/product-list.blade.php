@extends('layout')
@section('content') 
  <!-- Content -->
  <link rel="stylesheet" href="css/style-product-list.css">
  <div class="content">
    <div class="grid wide product-list">
      <div class="row">
        <div class="col l-3">
          <div class="warp-left">
            <ul class="left-cate-title-list">
              <li class="left-cate-title-item"><a href="">TẤT CẢ</a></li>
              <li class="left-cate-title-item"><a href="">NAM</a></li>
              <li class="left-cate-title-item"><a href="">NỮ</a></li>
            </ul>
            <hr>
            <div class="left-cate-main">
              <span class="left-cate-main-title">DÒNG SẢN PHẨM</span>
              <ul  class="left-cate-main-list">
                <li class="left-cate-main-item"><a href="">Basas</a></li>
                <li class="left-cate-main-item"><a href="">Vintas</a></li>
                <li class="left-cate-main-item"><a href="">Urbans</a></li>
              </ul>
              <div class="warp-item-form-drive"></div>
            </div>
            
          </div>
        </div>
        <div class="col l-9">
          <div class="warp-right">
            <div class="row">
              @foreach ($productList as $product)
                  
              <div class="col l-4">
                <div class="product-item">
                  <a href="{{route('user/product-detail',$product->id_product)}}"><img width="100%" src="img/imgProduct/{{$product->img_product}}" alt=""></a>
                  <h4><a href="{{route('user/product-detail',$product->id_product)}}">{{$product->name_product}}</a></h4>
                  <span>{{$product->price_product}}</span>
                </div>
              </div>

              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
  