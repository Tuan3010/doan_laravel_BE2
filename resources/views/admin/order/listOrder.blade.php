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
                        <th style="width: 8%">
                            CODE_BILL
                        </th>
                        <th style="width: 10%">
                            NAME
                        </th>
                        <th style="width: 8%">
                            PHONE
                        </th>                                         
                        <th style="width: 15%">
                            EMAIL
                        </th>                                         
                        <th style="width: 20%">
                            ADDRESS
                        </th>                                         
                        <th style="width: 13%" class="text-center">
                            ACTION
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
                            <form  action="{{route('order.show',$item->code_order)}}" method="get" style="display: inline-block;">
                                @csrf
                                <input type="hidden" name="code_order" value="{{$item->code_order}}">
                                <input type="hidden" name="name_buyer" value="{{$item->name_buyer}}">
                                <input type="hidden" name="address" value="{{$item->address}}">
                                <input type="hidden" name="phone" value="{{$item->phone}}">
                                <input type="hidden" name="email" value="{{$item->email}}">
                                <input type="hidden" name="id_payment" value="{{$item->id_payment}}">
                                <input type="hidden" name="date" value="{{$item->created_at}}">
                                <button class="btn btn-info btn-sm ">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    View
                                </button>
                            </form>
                            @if ($item->status == "0")
                                <form style="display: inline-block;" action="{{route('order.confirm')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="code_order" value="{{$item->code_order}}">
                                    <input type="hidden" name="name_buyer" value="{{$item->name_buyer}}">
                                    <input type="hidden" name="address" value="{{$item->address}}">
                                    <input type="hidden" name="phone" value="{{$item->phone}}">
                                    <input type="hidden" name="email" value="{{$item->email}}">
                                    <input type="hidden" name="id_payment" value="{{$item->id_payment}}">
                                    <input type="hidden" name="code_order" value="{{$item->code_order}}">
                                    <button class="btn btn-warning btn-sm" >                                                                               
                                            unconfimred
                                    </button>
                                </form>
                            @else
                                <a href="#" class="btn btn-success btn-sm text-white">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    confirmed</a>
                            @endif 
                            <form action="{{route('order.destroy',$item->id)}}" method="post" onclick=" return confirm('Confirm delete?')" style="display: inline-block;">
                                @method('DELETE')
                                @csrf
                                <input type="hidden" name="code_order" value="{{$item->code_order}}">
                                <button class="btn btn-danger btn-sm" > 
                                        <i class='fas fa-trash-alt'></i>                                                                              
                                        delete
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