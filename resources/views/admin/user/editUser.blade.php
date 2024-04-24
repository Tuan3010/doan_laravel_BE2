@extends('layoutadmin')
@section('title','Edit User')
@section('contentadmin')

<!-- Content main ('viết code ở đây') -->
<form action="{{route('user.update',$user->id)}}" method="post">
  @csrf
  @method('PATCH')
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Edit User</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body" style="display: block;">
      <div class="form-group">
        <label for="inputName">Tên người dùng</label>
        <input name="name" type="text" id="inputName" class="form-control" value="{{$user->name}}">
      </div>
      <div class="form-group">
        <label for="inputEmail">Email</label>
        <input name="email" type="text" id="inputEmail" class="form-control" value="{{$user->email}}">
      </div>
      <div class="form-group">
        <label for="Role" style="display: block">Role</label>
        <input {{($user->role == 1) ? 'checked' : ''}}  name="role" type="radio" id="user_role" class="" value="1">
        <label style="font-weight:400; margin-right: 20px" for="user_role">User</label>
        
        <input {{($user->role == 0) ? 'checked' : ''}} name="role" type="radio" id="admin_role" class="" value="0">
        <label  style="font-weight:400" for="admin_role">Admin</label> 
      </div>
      <div class="form-group">
        <label for="inputUsername">Tên đăng nhập</label>
        <input name="user_name" type="text" id="inputUsername" class="form-control" value="{{$user->user_name}}">
      </div>
      
      <div class="form-group">
        <input type="submit" value="Cập nhật" class="btn btn-success float-right">
      </div>
       
    </div>

  </div>
</form>
<!-- End Content main  ('viết code ở trên') -->
@endsection