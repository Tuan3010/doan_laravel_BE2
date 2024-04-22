@extends('layoutadmin')
@section('title','Cập nhật sản phẩm')
@section('contentadmin')
      <!-- Content main ('viết code ở đây') -->
      <form action="{{ route('update-product', ['id' => $data['product']->id_product])}}" method="post" enctype="multipart/form-data">
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
        <label for="inputName" value="">Tên sản phẩm</label>
        <input name="name_product" type="text" id="inputName" class="form-control" value="{{$data['product']->name_product}}">
        @if ($errors->has('name_product'))
        <span class="text-danger">{{ $errors->first('name_product') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label for="inputName" id="price_product" name="price_product">Giá</label>
        <input name="price_product" type="text" id="inputName" class="form-control" value="{{$data['product']->price_product}}">
        @if ($errors->has('price_product'))
        <span class="text-danger">{{ $errors->first('price_product') }}</span>
        @endif
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col">
            <div class="p-3 border rounded bg-light">
              <h5 style="font-weight:bold">Danh Mục</h5>
              <php $demcategory=0; ?>
                @foreach($data['categories'] as $category)
                
                    <input type="checkbox" name="id_category[]" value="{{$category->id}}" id="id_category[]">
                    <label style="font-weight:400" for="">{{$category->name_category}}</label><br>
                
                    
                
                @endforeach
                @if ($errors->has('id_category'))
                <span class="text-danger">{{ $errors->first('id_category') }}</span>
                @endif
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded bg-light">
              <h5 style="font-weight:bold">Màu sắc</h5>
              <php $demcolor=0 ?>
                @foreach($data['colors'] as $color)
                <input type="checkbox" name="id_color[]" value="{{$color->id}}" id="id_color[]">
                <label style="font-weight:400" for="">{{$color->name_color}}</label><br>
                @endforeach
                @if ($errors->has('id_color'))
                <span class="text-danger">{{ $errors->first('id_color') }}</span>
                @endif
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded bg-light">
              <h5 style="font-weight:bold">Size</h5>
              <php $demsize=0 ?>
                @foreach($data['sizes'] as $size)
                  <input type="checkbox" name="id_size[]" value="{{$size->id}}" id="id_size[]">
                  <label style="font-weight:400" for="">{{$size->name_size}}</label><br>
                @endforeach
                @if ($errors->has('id_size'))
                  <span class="text-danger">{{$errors->first('id_size')}}</span>
                @endif
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputDescription">Mô tả</label>
        <textarea id="inputDescription" class="form-control" rows="4"  id="des_product" name="des_product">{{$data['product']->des_product}}</textarea>
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
        <input type="submit" value="Cập nhật" class="btn btn-success float-right">
      </div>
    </div>

  </div>
</form>
      <!-- End Content main  ('viết code ở trên') -->
@endsection
 
