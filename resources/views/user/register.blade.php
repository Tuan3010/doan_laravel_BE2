

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
    <form action="" method="post">
      <input type="text" id="username" name="username" class="fadeIn second"  placeholder="Name">
      <input type="password" id="password" name="password" class="fadeIn third" placeholder="Email">
      <input type="text" id="password" name="password" class="fadeIn third" placeholder="UserName">
      <input type="text" id="password" name="password" class="fadeIn third" placeholder="Password">
      <!-- Xuất Lỗi -->
      
     
      <input type="submit" name="submit" class="fadeIn fourth" value="Sign Up">     
    </form>
    

  </div>
</div>