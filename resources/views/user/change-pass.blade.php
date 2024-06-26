@extends('layout')
@section('content')
    
<!-- Content -->
<link rel="stylesheet" href="css/style-search-order.css">
<div class="content">
  <div class="search-order">
    <h2 class="content-title-search-order">THAY ĐỔI MẬT KHẨU</h2>
     @if(session()->has('success'))
        <div class="alert-success">{{session('success')}}</div>
     @endif
    <form action="{{route('user.storechangepass')}}" method="post">
      @csrf
      <div class="warp-item">
        <input  name="pass_old" type="password" placeholder="Mật khẩu cũ ">
        
        @if($errors->has('oldpass'))
          <div class=" alert-danger">{{$errors->first('oldpass')}}</div>
        @endif

      </div>
      <div class="warp-item">
        <input style="display: inline-block ;width:10px ;" type="checkbox" onclick="myFunction()">Show Password
        <input  name="pass_new" type="password" placeholder="Mật khẩu mới" id="myInput">
        @if($errors->has('newpass'))
          <div class=" alert-danger">{{$errors->first('newpass')}}</div>
        @endif
        @if($errors->has('newpasslenght'))
          <div class=" alert-danger">{{$errors->first('newpasslenght')}}</div>
        @endif
      </div>
      <div class="warp-item">

        <input  name="pass_confirm" type="password" placeholder="Xác nhận mật khẩu">
        @if($errors->has('pass_confirm'))
          <div class=" alert-danger">{{$errors->first('pass_confirm')}}</div>
        @endif
        @if($errors->has('confirmpass'))
          <div class=" alert-danger">{{$errors->first('confirmpass')}}</div>
        @endif
      </div>
        <button type="submit">THAY ĐỔI</button>  
    </form>
  </div>
</div>
<script>
  function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
@endsection
