@extends('layoutadmin')
@section('title','Update Category')
@section('contentadmin')

<!-- Content main ('viết code ở đây') -->
<form action="{{ route('patch-updatecategory', ['id' => $category->id])}}" method="post">
  @csrf
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Category</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body" style="display: block;">
      <div class="form-group">
        <label for="inputName">Category Name</label>
        <input name="name_category" type="text" id="inputName" class="form-control" value="{{$category->name_category}}">
        @if ($errors->has('name_category'))
        <span class="text-danger">{{ $errors->first('name_category') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label for="inputName">Type</label>
        <input name="type" type="type" id="inputName" class="form-control" value="{{$category->id}}">
        @if ($errors->has('type'))
        <span class="text-danger">{{ $errors->first('type') }}</span>
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