@extends('layoutadmin')
@section('contentadmin')

<!-- Content main ('viết code ở đây') -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Projects</h3>

            <div class="card-tools">
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
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                                AdminLTE v3
                            </a>
                        </td>
                        <td>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                </div>
                            </div>
                            <small>
                                57% Complete
                            </small>
                        </td>
                        <td class="project_progress">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-state">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                </li>
                            </ul>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                Add
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
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