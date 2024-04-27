@extends('layoutadmin')
@section('title','Danh sách ảnh')
@section('contentadmin')

<!-- Content main ('viết code ở đây') -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Projects</h3>

            <div class="card-tools">
                    <a class="btn btn-success btn-sm" href="{{route('get-create-img')}}">
                    Thêm hình
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
                            id
                        </th>
                        <th style="width: 20%">
                            Tên file
                        </th>
                        <th style="width: 20%">
                            Mã sản phẩm
                        </th>
                        <th style="width: 20%">
                            Hình
                        </th>
                        <!-- <th style="width: 20%">
                        </th> -->
                    </tr>
                </thead>
                <tbody>
                @foreach ($images as $image)
                    <tr>  
                        <td>
                            {{$image->id}}
                        </td>
                        <td>                    
                            {{$image->name_img}}
                        </td>
                        <td>                    
                            {{$image->id_product}}
                        </td>
                        <td>                    
                            <img style="width: 15%;" src="../uploads/{{$image->name_img}}">
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{route('edit-img', $image->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <form class="btn btn-danger btn-sm" action="{{route('delete-img', $image->id)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger btn-sm" onclick=" return confirm('bạn có chắc xóa không?')"><i class="fas fa-trash">
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