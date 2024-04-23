<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Tên mặc định(admin)')</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
  
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>   
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>         
        
      </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Name user</a>
          </div>
        </div>
        

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              
            <li class="nav-header">QUẢN LÝ CHUNG</li>
            <li class="nav-item">
              <a href="{{route('list-product')}}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Quản lý sản phẩm
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('list-color')}}" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Quản lý màu sắc
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listCategory')}}" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Quản lý danh mục
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Quản lý hình ảnh
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('list-size')}}" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Quản lý size
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('order.index')}}" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Quản lý đơn hàng
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/kanban.html" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Quản lý bài viết
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/kanban.html" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Quản lý người dùng
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
      @endif
      <!-- Content main ('viết code ở đây') -->
      @yield('contentadmin')
      <!-- End Content main  ('viết code ở trên') -->
      
    </div>
    
    <!-- Footer -->
    <footer class="main-footer">
      <strong>Đồ án  &copy; Back-end 2 <a href="https://adminlte.io">Quản lí shop bán giày</a>.</strong>
      <div class="float-right d-none d-sm-inline-block">
        <b>Nhóm </b> G
      </div>
    </footer>
  </div>
  <!-- Js -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="../dist/js/adminlte.js"></script>
 
</body>
</html>
