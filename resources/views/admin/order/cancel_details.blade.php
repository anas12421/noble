@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8 m-auto">
        <div class="cart">
            <div class="cart-header">
                <h3>Details For Order ID : {{App\Models\Order::find($cancel_details->order_id)->order_id}}</h3>
            </div>
            <div class="cart-header">
                <form action="">
                    <textarea disabled class="form-control my-3" cols="30" rows="10">{{$cancel_details->reason}}</textarea>
                    <img src="{{asset('uploads/cancelorder')}}/{{$cancel_details->image}}" width="200" alt="">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
