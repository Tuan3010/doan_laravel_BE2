@extends('layoutadmin')
@section('title','Danh sách màu sắc')
@section('contentadmin')

<!-- Content main ('viết code ở đây') -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Projects</h3>

            <div class="card-tools">
                    <a class="btn btn-success btn-sm" href="{{route('create-color')}}">
                    Thêm màu
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
                            Mã màu
                        </th>
                        <th style="width: 20%">
                            Màu
                        </th>
                        <!-- <th style="width: 20%">
                        </th> -->
                    </tr>
                </thead>
                <tbody>
                @foreach ($colors as $color)
                    <tr>  
                        <td>
                            {{$color->id}}
                        </td>
                        <td>                    
                            {{$color->name_color}}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{route('view-edit-color', $color->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <form class="btn btn-danger btn-sm" action="{{route('delete-color', $color->id)}}" method="post">
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