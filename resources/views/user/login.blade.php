<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style-login.css">
<!------ Include the above in your HEAD tag ---------->
<div class="wrapper fadeInDown">
  <div id="formContent">
    <a href="{{ route('user/index') }}" style="text-decoration: none;">Home Page</a>
    <!-- Tabs Titles -->
    <div class="fadeIn first">
      <h3>Sign In</h3>
    </div>
    @if(session()->has('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <!-- Login Form -->
    <form action="{{route('check-login')}}" method="post">
      @csrf
      <input type="text" id="user_name" name="user_name" class="fadeIn second" placeholder="login">
      @if ($errors->has('user_name'))
      <span class="text-danger">{{ $errors->first('user_name') }}</span>
      @endif
      <input type="password" id="password" name="password" class="fadeIn third" placeholder="password">
      @if ($errors->has('password'))
      <span class="text-danger">{{ $errors->first('password') }}</span>
      @endif
      <!-- Xuất Lỗi -->


      <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
    </form>


  </div>
</div>