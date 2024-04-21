@extends('layoutadmin')
@section('title','Thêm sản phẩm')
@section('contentadmin')

<!-- Content main ('viết code ở đây') -->
<form action="{{route('post-create-product')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Thêm sản phẩm</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body" style="display: block;">
      <div class="form-group">
        <label for="inputName" value="">Mã sản phẩm</label>
        <input name="id_product" type="text" id="id_product" class="form-control">
        @if ($errors->has('id_product'))
        <span class="text-danger">{{ $errors->first('id_product') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label for="inputName" value="">Tên sản phẩm</label>
        <input name="name_product" type="text" id="inputName" class="form-control">
        @if ($errors->has('name_product'))
        <span class="text-danger">{{ $errors->first('name_product') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label for="inputName" id="price_product" name="price_product">Giá</label>
        <input name="price_product" type="text" id="inputName" class="form-control">
        @if ($errors->has('price_product'))
        <span class="text-danger">{{ $errors->first('price_product') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label for="inputStatus">Danh mục</label>
        <select class="form-control custom-select" id="id_category" name="id_category">
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name_category}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="inputDescription">Mô tả</label>
        <textarea id="inputDescription" class="form-control" rows="4"  id="des_product" name="des_product"></textarea>
        @if ($errors->has('des_product'))
        <span class="text-danger">{{ $errors->first('des_product') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label for="formFile" class="form-label">Ảnh</label>
        <input class="form-control-file" type="file" id="file_upload" name ="file_upload">
        @if ($errors->has('file_upload'))
        <span class="text-danger">{{ $errors->first('file_upload') }}</span>
        @endif
      </div>
      <div class="form-group">
        <input type="submit" value="Thêm sản phẩm" class="btn btn-success float-right">
      </div>
    </div>

  </div>
</form>
<!-- End Content main  ('viết code ở trên') -->
@endsection