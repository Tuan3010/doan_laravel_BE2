@extends('layoutadmin')
@section('title','Thêm sản phẩm')
@section('contentadmin')

<!-- Content main ('viết code ở đây') -->
<form action="{{ route('update-image', ['id' => $data['image']->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Cập Nhật</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body" style="display: block;">
        <div class="form-group">
            <label for="inputName">Sản phẩm</label>
            <select  class="form-control" name="id_product" id="id_product">
                @foreach($data['products'] as $product)
                <option {{($data['image']->id_product == $product->id_product) ? 'selected' : ''}} value="{{$product->id_product}}">{{$product->name_product}}</option>
                @endforeach
            </select>
            @if ($errors->has('name_category'))
            <span class="text-danger">{{ $errors->first('name_category') }}</span>
            @endif
        </div>
        <div class="form-group">
          <label for="formFile" class="form-label">Ảnh</label>
          <input class="form-control-file" type="file" id="file_upload" name="file_upload">
          @if ($errors->has('file_upload'))
          <span class="text-danger">{{ $errors->first('file_upload') }}</span>
          @endif
        </div>
        <div class="form-group">
          <input type="submit" value="Cập nhật" class="btn btn-success float-right">
        </div>
      

    </div>
</form>
<!-- End Content main  ('viết code ở trên') -->
@endsection