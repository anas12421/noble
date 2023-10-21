@extends('front.master')
@section('content')
<div class="row mt-3">
    <div class="col-lg-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Order Cancel Request</h3>
                <h4 class="bg-warning d-inline-block text-white">Order ID : {{$order_info->order_id}}</h4>
            </div>
            <div class="card-body">
                @if (session('req'))
                    <div class="alert alert-success mb-2">{{session('req')}}</div>
                @endif
                <form action="{{route("cancel.reason" , $order_info->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="1" class="form-label">Cancel Reason</label>
                       <textarea name="reason" id="1" class="form-control" cols="30" rows="10"></textarea>

                       @error('reason')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                       @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Images</label>
                       <input type="file" name="image" class="form-control" id="">
                       <input type="hidden" name="order_id" value="{{$order_info->order_id}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Sent Request</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
