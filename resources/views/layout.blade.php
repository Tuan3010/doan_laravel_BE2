<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style-grid.css">
  <link rel="stylesheet" href="css/style-layout.css">
</head>
<body>
  <!-- Header -->
  <div class="header">
    <div class="header-nav1">
      <ul class="header-nav1-list">
        <li class="nav1-list__item"><a href="{{route('user/order')}}"><img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_gio_hang.svg" alt="">Giỏ hàng</a></li>
        <li class="nav1-list__item"><a href="{{route('user/login')}}"><img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images//svg/icon_dang_nhap.svg" alt=""> Đăng nhập</a></li>
        <li class="nav1-list__item"><a href="{{route('user/adore-list')}}"><img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_heart_header.svg" alt=""> Yêu thích</a></li>
        <li class="nav1-list__item"><a href="{{route('user/search-order')}}"><img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_tra_cuu_don_hang.svg" alt=""> Tra cứu đơn hàng</a></li>
      </ul>
    </div>
    <div class="header-nav2">
      <div class="header-nav2-logo">
        <a href="{{route('user/index')}}"><img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Logo_Ananas_Header.svg" alt=""></a>
      </div>
      <div class="header-nav2-cate">
        <ul class="header-nav2-list">
          <li class="nav2-list__item"><a href="{{route('user/product-list')}}">Sản phẩm</a></li>
          <li class="nav2-list__item"><a href="">Quần </a></li>
          <li class="nav2-list__item"><a href="">Áo</a></li>
          <li class="nav2-list__item"><a href="">Giày</a></li>
          <li class="nav2-list__item "><a href=""><img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/DiscoverYOU.svg" alt=""></a></li>
        </ul>
      </div>
      <!-- Nav2 -->
      <div class="header-nav2-search">
        <form action="" method="get">
          <div class="nav2-search-wrap">
            <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_tim_kiem.svg" alt="">
            <input type="text" placeholder="Tìm kiếm">
          </div>
        </form>
      </div>
    </div>
    <!-- Hotnews -->
    <div class="hot-news">
      <div class="hot-new-container">
        <button class="btn-pre"></button>
        <div class="hot-new-main">
          <a href="">FREE SHIP VỚI HÓA ĐƠN TỪ 900K !</a>
        </div>
        <button class="btn-after"></button>
      </div>
    </div>
  </div>
  {{-- Content --}}
  @yield('content')
  {{-- EndContent --}}
  <!-- Footer -->
  <div class="footer">
    <div class="cotainer">
      <div class="row">
        <div class="col l-3">
          <div class="footer-img">
            <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Store.svg" alt="">
          </div>
        </div>
        <div class="col l-9">
          <div class="footer-info">
            <div class="row">
              <div class="col l-3">
                <div class="footer-info-each-item">
                  <h3 class="footer-info-title">SẢN PHẨM</h3>
                  <ul class="footer-info-list">
                    <li class="footer-info-item"><a href="">Giày Nam</a></li>
                    <li class="footer-info-item"><a href="">Giày Nữ</a></li>
                    <li class="footer-info-item"><a href="">Thời trang và phụ kiện</a></li>
                    <li class="footer-info-item"><a href="">Sale off</a></li>
                  </ul>
                </div>
              </div>
              <div class="col l-3">
                <div class="footer-info-each-item">
                  <h3 class="footer-info-title">Về nhóm G</h3>
                  <ul class="footer-info-list">
                    <li class="footer-info-item"><a href="">Nguyễn Duy Tuấn</a></li>
                    <li class="footer-info-item"><a href="">Nguyễn Quốc Lượng</a></li>
                    <li class="footer-info-item"><a href="">Nguyễn Quốc Sang</a></li>
                    <li class="footer-info-item"><a href="">Sale off</a></li>
                  </ul>
                </div>
              </div>
              <div class="col l-3">
                <div class="footer-info-each-item">
                  <h3 class="footer-info-title">Hỗ Trợ</h3>
                  <ul class="footer-info-list">
                    <li class="footer-info-item"><a href="">Google</a></li>
                    <li class="footer-info-item"><a href="">Chat GPT</a></li>
                    <li class="footer-info-item"><a href="">Thầy Nhầm</a></li>
                    
                  </ul>
                </div>
              </div>
              <div class="col l-3">
                <div class="footer-info-each-item">
                  <h3 class="footer-info-title">Liên hệ</h3>
                  <ul class="footer-info-list">
                    <li class="footer-info-item"><a href="">Email</a></li>
                    <li class="footer-info-item"><a href="">Hotline</a></li>
                    <li class="footer-info-item"><a href="">0965 801 255</a></li>                  
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-logo">
              <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Logo_Ananas_Footer.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>