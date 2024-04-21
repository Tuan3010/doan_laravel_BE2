@extends('layoutadmin')
@section('title','Cập nhật màu')
@section('contentadmin')

<!-- Content main ('viết code ở đây') -->
<form action="{{ route('update-color', ['id' => $color->id])}}" method="post">
  @csrf
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Thêm danh mục</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body" style="display: block;">
      <div class="form-group">
        <label for="inputName">Tên màu</label>
        <input name="name_color" type="text" id="name_color" class="form-control" value="{{$color->name_color}}">
        @if ($errors->has('name_color'))
        <span class="text-danger">{{ $errors->first('name_color') }}</span>
        @endif
      </div>
      <!-- <div class="form-group">
         <label for="inputDescription">Project Description</label>
         <textarea id="inputDescription" class="form-control" rows="4"></textarea>
       </div> -->
      <!-- <div class="form-group">
         <label for="inputStatus">Status</label>
         <select id="inputStatus" class="form-control custom-select">
           <option selected="" disabled="">Select one</option>
           <option>On Hold</option>
           <option>Canceled</option>
           <option>Success</option>
         </select>
       </div>
       <div class="form-group">
         <label for="inputClientCompany">Client Company</label>
         <input type="text" id="inputClientCompany" class="form-control">
       </div>
       <div class="form-group">
         <label for="inputProjectLeader">Project Leader</label>
         <input type="text" id="inputProjectLeader" class="form-control">
       </div> -->
      <div class="form-group">
        <input type="submit" value="Cập nhật" class="btn btn-success float-right">
      </div>
    </div>

  </div>
</form>
<!-- End Content main  ('viết code ở trên') -->
@endsection