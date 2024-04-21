@extends('layoutadmin')
@section('title','Danh sách danh mục')
@section('contentadmin')

<!-- Content main ('viết code ở đây') -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Projects</h3>

            <div class="card-tools">
                <a class="btn btn-success btn-sm" href="{{route('createCategory')}}">
                    </i>
                    Thêm danh mục
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
                            Tên danh mục
                        </th>
                        <th style="width: 30%">
                            Type
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>
                            <a>
                                <!-- id -->
                                {{$category->id}}
                            </a>
                        </td>

                        <td>
                            <a>
                                <!-- Tên category -->
                                {{$category->name_category}}
                            </a>
                        </td>
                        <td>
                            <a>
                                <!-- Tên product -->
                                {{$category->type}}
                            </a>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{url('listCategory/' . $category->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <form class="btn btn-danger btn-sm" action="{{url('listCategory/' . $category->id)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger btn-sm" onclick=" return confirm('Confirm delete?')"><i class="fas fa-trash">
                                    </i> Xóa</button>
                            </form>

                            <!-- <a class="btn btn-danger btn-sm" href=" {{url('listCategory/' . $category->id)}} " onclick=" return confirm('Bạn có chắc xóa?')">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a> -->
                        </td>
                        @endforeach
                        <!-- <td>
                            <a>
                                AdminLTE v3
                            </a>
                            <br>
                            <small>
                                Created 01.01.2019
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                </li>
                            </ul>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                </div>
                            </div>
                            <small>
                                57% Complete
                            </small>
                        </td> -->
                        <!-- <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td> -->

                    </tr>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- End Content main  ('viết code ở trên') -->
@endsection