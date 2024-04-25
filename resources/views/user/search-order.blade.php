@extends('layout')
@section('content')
    
<!-- Content -->
<link rel="stylesheet" href="css/style-search-order.css">
<div class="content">
  <div class="search-order">
    <h2 class="content-title-search-order">TRA CỨU ĐƠN HÀNG</h2>
    @if(session()->has('error'))
      <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    <form action="{{route('user/search-search-order')}}" method="get">
      {{-- @csrf --}}
      <div class="warp-item">
        <input type="text" value="" name="code_order" placeholder="Mã đơn hàng" style="margin: 10px 0">
        <input type="text" value="" name="phone" placeholder="Số điện thoại">
      </div>
        <button type="submit">TRA CỨU ĐƠN HÀNG</button>  
    </form>
  </div>
</div>
@endsection
