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
                    <a class="btn btn-success btn-sm" href="{{route('create-size')}}">
                    Thêm size
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
                            Mã size
                        </th>
                        <th style="width: 20%">
                            Size
                        </th>
                        <!-- <th style="width: 20%">
                        </th> -->
                    </tr>
                </thead>
                <tbody>
                @foreach ($sizes as $size)
                    <tr>  
                        <td>
                            {{$size->id}}
                        </td>
                        <td>                    
                            {{$size->name_size}}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{route('view-edit-size', $size->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <form class="btn btn-danger btn-sm" action="{{route('delete-size', $size->id)}}" method="post">
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