@extends('layoutadmin')
@section('title','Danh sách sản phẩm')
@section('contentadmin')

<!-- Content main ('viết code ở đây') -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Projects</h3>

            <div class="card-tools">
                    <a class="btn btn-success btn-sm" href="{{route('create-product')}}">
                    Thêm sản phẩm
                </a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 20%">
                            Mã sản phẩm
                        </th>
                        <th style="width: 20%">
                            Tên sản phẩm
                        </th>
                        <th style="width: 10%">
                            Giá
                        </th>
                        <th>
                            Thông tin sản phẩm
                        </th>
                        <th style="width: 15%" class="text-center">
                            Ảnh
                        </th>
                        <!-- <th style="width: 20%">
                        </th> -->
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>  
                        <td>
                            {{$product->id_product}}
                        </td>
                        <td>                    
                            {{$product->name_product}}
                        </td>
                        <td>
                            {{$product->price_product}}
                        </td>
                        <td>
                            {{$product->des_product}}
                        </td>
                        <td >
                            <img src="../../../../public/uploads/{{$product->img_product}}">
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{url('listProduct/' . $product->id_product)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <form class="btn btn-danger btn-sm" action="{{route('delete-product', $product->id_product)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger btn-sm" onclick=" return confirm('Confirm delete?')"><i class="fas fa-trash">
                                    </i> Xóa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- End Content main  ('viết code ở trên') -->
@endsection