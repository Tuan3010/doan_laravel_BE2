@extends('layoutadmin')
@section('title','Danh sách người dùng')
@section('contentadmin')

<!-- Content main ('viết code ở đây') -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách người dùng</h3>

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
                        <th style="width: 10%">
                            ID
                        </th>
                        <th style="width: 18%">
                            Tên người dùng
                        </th>
                        <th style="width: 18%">
                            Email
                        </th>
                        <th style="width: 10%">
                            Role
                        </th>
                        <th style="width: 15%" >
                            Tên đăng nhập
                        </th>
                        <th style="width: 15%" >
                            Ngày tạo
                        </th>
                        <!-- <th style="width: 20%">
                        </th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        
                    <tr>  
                        <td>
                          {{$item->id}}
                        </td>                       
                        <td>                    
                            {{$item->name}}
                        </td>
                        <td>
                            {{$item->email}}
                        </td>
                        @if ($item->role == 1)
                        <td>
                            User
                        </td>
                        @else
                        <td>
                            Admin
                        </td>
                        @endif
                        <td >
                            {{$item->user_name}}
                        </td>
                        <td >
                            {{$item->created_at}}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{route('user.edit',$item->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <form action="{{route('user.destroy',$item->id)}}" method="post" style="display: inline-block;">
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