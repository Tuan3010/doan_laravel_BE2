@extends('layout')
@section('content')
    
<!-- Content -->
<link rel="stylesheet" href="css/style-product-detail.css">
<div class="content">
  <div class="grid wide product-detail">
    <div class="row">
      <div class="col l-7">
        <div class="warp-img-product">
          <div class="img-main">
            <img style="width: 100%;" src="https://ananas.vn/wp-content/uploads/Pro_AV00208_1.jpg" alt="">
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
          <h3 class="warp-right-name-product">VINTAS PUBLIC 2000S - LOW TOP</h3>
          <span class="warp-right-price">620.000 VND</span>
          <div class="line"></div>   
          <form action="#" method="post" style="margin-top: 35px;">
            <span>Màu sắc</span>
            <select name="size" id="sizeSelect" size="1">
              <option>1</option>
              <option>2</option>              
            </select>  
            <span>Size</span>
            <select name="quantity" id="quantitySelect" size="1">
              <option >1</option>
              <option>2</option>                      
            </select>
            <span>Số lượng</span>
            <select name="quantity" id="quantitySelect" size="1">
              <option >1</option>
              <option>2</option>                      
            </select>
            <input class="btn-add-cart" type="submit" value="Thêm Vào Giỏ Hàng">
            <input class="btn-submit" type="submit" value="Thanh Toán">
          </form>
          <form  action="" method="post" style="position: relative;">
            <button class="btn-like" type="submit"><img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Heart_product_1.svg" alt=""></button>
          </form>
          <h5 class="des-product-title">Thông tin sản phẩm</h5>
          <div class="line"></div>
          <p class="des-product" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus amet suscipit distinctio itaque quibusdam nemo, doloremque earum rerum sit facilis in, iure nihil hic sed quia, illo veritatis neque modi! Ad officiis eaque in laboriosam tempora minus iure asperiores sequi alias harum porro nihil possimus, cum blanditiis ipsam dicta vitae cupiditate reiciendis optio fuga similique distinctio eveniet aliquam. Maxime rem magni deserunt officiis. Voluptatum, porro ad, rerum eum sint saepe ipsum deleniti temporibus ipsam earum magni commodi quae quibusdam reiciendis. Possimus, ipsa. Dolores dignissimos, enim iste nobis provident, magnam architecto ullam vero, eos possimus non sed aspernatur soluta obcaecati debitis!</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
  