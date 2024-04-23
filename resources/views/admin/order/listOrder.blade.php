@extends('layoutadmin')
@section('contentadmin')
    {{-- Viết code ở đây --}}
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
                        <th style="width: 1%">
                            ID
                        </th>
                        <th style="width: 10%">
                            CODE_BILL
                        </th>
                        <th style="width: 13%">
                            NAME
                        </th>
                        <th style="width: 10%">
                            PHONE
                        </th>                                         
                        <th style="width: 15%">
                            EMAIL
                        </th>                                         
                        <th style="width: 20%">
                            ADDRESS
                        </th>                                         
                        <th style="width: 10%">
                            <a style="padding: 7px 26px; float:right" class="btn btn-primary btn-sm" href="">
                                <i class="fas fa-folder">
                                </i>
                                Add
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $item)                                          
                    <tr>
                        
                        <td>
                            <a>
                                {{$item->id}}
                            </a>
                            <br>
                            <small>
                               
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    {{$item->code_order}}
                                </li>
                            </ul>
                        </td>                       
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    {{$item->name_buyer}}
                                </li>
                            </ul>
                        </td>                       
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    {{$item->phone}}
                                </li>
                            </ul>
                        </td>                       
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    {{$item->email}}
                                </li>
                            </ul>
                        </td>                       
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    {{$item->address}}
                                </li>
                            </ul>
                        </td>                       
                        
                        <td class="project-actions text-right">
                                      
                            <a class="btn btn-info btn-sm" href="">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form style="display: inline-block;" action="" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm" >
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </button>
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
@endsection