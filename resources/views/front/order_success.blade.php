@extends('front.master')

@section('content')
@include('brade')
    <!-- end page-title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Your Order Id: {{session('success')}}</h3>
                </div>
                <div class="card-body text-center">
                    <img src="{{asset('frontend_assets/images/order.gif')}}" style="width: 50%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
