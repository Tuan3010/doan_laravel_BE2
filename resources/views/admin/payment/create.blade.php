@extends('layoutadmin')
@section('contentadmin')
    {{-- Viết code ở đây --}}
    <form action="{{route('payment.store')}}" method="post">
        @csrf
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Create ...</h3>
     
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: block;">
            <div class="form-group">
              <label for="inputName">Tên phương thức thanh toán</label>
              <input type="text" id="name_payment" name="name_payment" class="form-control">
            </div>
            
            <div class="form-group">
              <input type="submit" value="Tạo mới" class="btn btn-success float-right">
            </div>
          </div>
     
        </div>
      </form>
@endsection