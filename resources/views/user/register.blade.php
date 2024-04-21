

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
      <h3>Sign Up</h3>
    </div>
    <!-- Login Form -->
    <form action="{{route('register.store')}}" method="post">
      @csrf
      @if(session()->has('error'))
          <div class="alert alert-danger">{{session('error')}}</div>
      @endif
      @if(session()->has('success'))
          <div class="alert alert-success">{{session('success')}}</div>
      @endif
      <input type="text" id="name" name="name" class="fadeIn second"  placeholder="Name">
      <!-- Xuất Lỗi -->
      @if ($errors->has('name'))
        <div class="text-danger">{{ $errors->first('name') }}</div>
      @endif

      <input type="text" id="email" name="email" class="fadeIn third" placeholder="Email">
      <!-- Xuất Lỗi -->
      @if ($errors->has('email'))
        <div class="text-danger">{{ $errors->first('email') }}</div>
      @endif

      <input type="text" id="username" name="username" class="fadeIn third" placeholder="UserName">
      <!-- Xuất Lỗi -->
      @if ($errors->has('username'))
        <div class="text-danger">{{ $errors->first('username') }}</div>
      @endif

      <input type="text" id="password" name="password" class="fadeIn third" placeholder="Password">
      <!-- Xuất Lỗi -->
      @if ($errors->has('password'))
        <div class="text-danger">{{ $errors->first('password') }}</div>
      @endif
      
     
      <input type="submit" name="submit" class="fadeIn fourth" value="Sign Up">     
    </form>
    

  </div>
</div>