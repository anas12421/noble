@extends('front.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="wpo-page-title">
                <h2 class="d-none">Hide</h2>
                <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="#">Order Success</a></li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
                </div> <!-- end container -->
                </div>
        </div>

    </div>
    <!-- start wpo-page-title -->
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
