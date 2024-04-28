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
              <li class="left-cate-title-item"><a href="{{route('user/product-list')}}">TẤT CẢ</a></li>
              <li class="left-cate-title-item"><a href="{{route('user/product-list',['idcate' => 6])}}">NAM</a></li>
              <li class="left-cate-title-item"><a href="{{route('user/product-list',['idcate' => 7])}}">NỮ</a></li>
            </ul>
            <hr>
            <div class="left-cate-main">
              <span class="left-cate-main-title">DÒNG SẢN PHẨM</span>
              <ul  class="left-cate-main-list">
                @foreach ($categories as $item)            
                  <li class="left-cate-main-item"><a href="{{route('user/product-list',['idcate' => $item->id])}}">{{$item->name_category}}</a></li>
                @endforeach
              </ul>
              <div class="warp-item-form-drive"></div>

              <span class="left-cate-main-title">GIÁ</span>
              <ul  class="left-cate-main-list">
   
                  <li class="left-cate-main-item"><a href="{{route('user/product-list',['price1' => 400000 ,'price2' => 499000])}}">400K - 499K</a></li>
                  <li class="left-cate-main-item"><a href="{{route('user/product-list',['price1' => 300000])}}">< 300k</a></li>
                  <li class="left-cate-main-item"><a href="{{route('user/product-list',['price1' => 500000 ,'price2' => 599000])}}">500K - 599K</a></li>
                  <li class="left-cate-main-item"><a href="{{route('user/product-list',['price1' => 600000])}}">> 600K</a></li>
                
              </ul>
              <div class="warp-item-form-drive"></div>


              <span class="left-cate-main-title">MÀU SẢN PHẨM</span>
              <ul  class="left-cate-main-list">
                @foreach ($colors as $item)            
                  <li class="left-cate-main-item"><a href="{{route('user/product-list',['idcolor' => $item->id])}}">{{$item->name_color}}</a></li>
                @endforeach
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
                  <a href="{{route('user/product-detail',$product->id_product)}}"><img width="100%" src="uploads/{{$product->img_product}}" alt=""></a>
                  <h4><a href="{{route('user/product-detail',$product->id_product)}}">{{$product->name_product}}</a></h4>
                  @php                   
                    $price_product = number_format($product->price_product, 0, ',', '.');
                  @endphp
                  <span>{{$price_product}} VND</span>
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
  