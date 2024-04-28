@extends('layoutadmin')
@section('contentadmin')
      <!-- Content main ('viết code ở đây') -->
      <form action="{{route('payment.update',$paymentItem->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Edit ...</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: block;">
            <div class="form-group">
              <label for="inputName">Tên phương thức thanh toán</label>
              <input type="text" id="name_payment" name="name_payment" class="form-control" value="{{$paymentItem->name_payment}}">
            </div>
            
            <div class="form-group">
              <input type="submit" value="Lưu thay đổi" class="btn btn-success float-right">
            </div>
          </div>

        </div>
      </form>
      <!-- End Content main  ('viết code ở trên') -->
@endsection
 
