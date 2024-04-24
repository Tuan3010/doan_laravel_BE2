@extends('layout')
@section('content')
    
<!-- Content -->
<link rel="stylesheet" href="css/style-result-search-order.css">
<div class="content">
  <div class="grid wide result-search-order">
    {{-- <h1 class="result-search-order-title">Thông tin đơn hàng <a href="#">#TSL03456</a></h1>
    <span class="result-search-order-slogan">Cảm ơn vì đã đặt hàng bên shop , shop iu cảm ơn khách iu gất nhiều  </span>
    <div class="line"></div> --}}
    <div class="img-orderd-wrap">
      <img class="img-orderd" src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/cart/title_success.jpg" alt="">
      
    </div>
    <span class="result-search-order-slogan">Cảm ơn vì đã đặt hàng bên shop , shop iu cảm ơn khách iu gất nhiều  </span>
    <p class="info-ordered">Mã đơn hàng của khách iu là 
      <span style="display: inline; color: var(--primary-color); font-size: 24px; font-weight:700">{{$codebill}}</span> 
      ,khách iu nhớ lưu lại mã đơn hàng để check lại khi cần nhoa.Và nhớ check email để xem lại thông 
      tin đơn hàng của khách iu nhá.Gọi cho shop khi cần có thông tin cần chao đổi lè : 
      <strong style="color: var(--primary-color);">0987 654 321</strong></p>
      <div class="line"></div>
      <div class="img-icon-wrap">
        <img style="width: 50%; margin-left: 18%;" src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_dat_hang_thanh_cong.svg" alt="">
      </div>
      <div class="btn-comeback-wrap">
        <a href="{{route('user/product-list')}}" class="btn-comeback">
          QUAY LẠI MUA HÀNG
        </a>
      </div>
  </div>
</div>
@endsection
  