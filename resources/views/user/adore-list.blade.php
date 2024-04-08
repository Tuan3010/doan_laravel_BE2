
 @extends('layout')
 @section('content')
     
 <!-- content -->
 <link rel="stylesheet" href="css/style-adore.css">
 <div class="content">
   <div class=" grid wide adore-list">
     <h2 class="adore-list-title">DANH MỤC YÊU THÍCH CỦA BẠN</h2>
     <hr>
     <div class="product-list-adore">
       <div class="row">
         <div class="col l-8">
           <div class="media">
             <div class="media-left">
               <a href=""><img style="width: 180px; height: 180px;" src="https://ananas.vn/wp-content/uploads/Pro_AV00208_1-500x500.jpg" alt=""></a>
             </div>
             <div class="media-right">
               <h3 class="product-name"><a href="">Vintas public 2000s - Low top</a></h3>
               <span><b>Giá:</b>620.000đ</span>
             </div>
           </div>
         </div>
         <div class="col l-4">
           <div class="media2">
             <span class="price-product">620.000 VND</span>
             <span class="status">Còn hàng</span>
             <div class="btn-del-add">
               <a class="btn-del" href="#  ">
                 <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Trash_bin.svg" alt="">
               </a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>

 @endsection