@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="cart">
            <div class="cart-header">
                <h3>Coupon List</h3>
            </div>
            <div class="cart-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Coupon Name</th>
                        <th>Coupon Type</th>
                        <th>Discount</th>
                        <th>Date</th>
                        <th>Limit</th>
                        <td>Status</td>
                        <th>Action</th>
                    </tr>

                    @foreach ($coupons as $sl=>$coupon )
                    <tr>
                        <td>{{$sl+1}}</td>
                        <td>{{$coupon->coupon}}</td>
                        <td>{{$coupon->type == 1 ? 'Percentage' : 'Solid'}}</td>
                        <td>{{$coupon->type == 1 ? $coupon->amount.'%' : $coupon->amount}}</td>
                        <td>{{$coupon->date}}</td>
                        <td>{{$coupon->limit}}</td>
                        <td>
                            <input type="checkbox" data-id="{{$coupon->id}}" class="status" data-toggle="toggle" value="{{$coupon->status}}" {{$coupon->status == 1 ? 'checked' : ''}}>
                         </td>
                        <td>
                            <a href="{{$coupon->id}}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add Coupon</h3>
            </div>
            <div class="card-body">
                <form action="{{route('coupon.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for=""  class="form-label">Coupon Name</label>
                        <input type="text" name="coupon" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for=""  class="form-label">Type</label>
                        <select name="type" class="form-control" id="">
                            <option value="">Select Coupon Type</option>
                            <option value="1">Percentage (%)</option>
                            <option value="2">Solid</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""  class="form-label">Amount</label>
                        <input type="number" name="amount" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for=""  class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for=""  class="form-label">Limit</label>
                        <input type="number" name="limit" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Coupon</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer_script')
<script>
    $(".status").change(function(){
        // var status = $('input[class="status"]:checked').attr('value');

        if($(this).val() != 1){
            $(this).attr('value' , 1);
        }

        else{
            $(this).attr('value' , 0);
        }

        var coupon_id = $(this).attr('data-id');
        var status = $(this).val() ;




        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'/getcouponstatus',
            type: 'POST',
            data:{'coupon_id': coupon_id , 'status' : status},

            success:function(data){

            }
        });




    })
</script>
@endsection
