@extends('front.master')
@section('content')
@include('brade')

    <!-- start of themart-interestproduct-section -->
    <section class="themart-interestproduct-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <h2>Recently Viewed Product </h2>
                    </div>
                </div>
            </div>
            <div class="product-wrap">
                <div class="row">

                    @foreach ($recents as $product )

                    @php
                    $avg = '';

                    $t_star = App\Models\OrderProduct::where('product_id', $product->id)
                        ->whereNotNull('review')
                        ->sum('star');
                    $t_review = App\Models\OrderProduct::where('product_id', $product->id)
                        ->whereNotNull('review')
                        ->get();

                    if ($t_review->count() == 0) {
                        $avg = 0;
                    } else {
                        $avg = round($t_star / $t_review->count());
                    }
                @endphp

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item h-7">
                            <div class="image">
                                <img height="170" src="{{asset('uploads/product/preview')}}/{{$product->preview}}" alt="">
                                <div class="tag new">New</div>
                            </div>
                            <div class="text">
                                <h2><a href="{{route('check', $product->slug)}}">{{$product->product_name}}</a></h2>
                                <div class="rating-product">
                                    @for ($i = 1; $i <= $avg; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                        @for ($i = $avg; $i <= 4; $i++)
                                            <i class="fa-regular fa-star"></i>
                                        @endfor
                                        <span>{{ App\Models\OrderProduct::where('product_id', $product->id)->whereNotNull('review')->count() }}</span>
                                </div>
                                <div class="price">
                                    <span class="present-price">&#2547;{{ $product->after_discount }}</span>
                                        @if ($product->discount)
                                            <del class="old-price">&#2547;{{ $product->price }}</del>
                                        @endif
                                </div>
                                <div class="shop-btn">
                                    <a class="theme-btn-s2" href="{{route('check', $product->slug)}}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                    {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item">
                            <div class="image">
                                <img src="assets/images/interest-product/2.png" alt="">
                                <div class="tag sale">Sale</div>
                            </div>
                            <div class="text">
                                <h2><a href="product-single.html">Blue Bag with Lock</a></h2>
                                <div class="rating-product">
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <span>120</span>
                                </div>
                                <div class="price">
                                    <span class="present-price">$160.00</span>
                                    <del class="old-price">$190.00</del>
                                </div>
                                <div class="shop-btn">
                                    <a class="theme-btn-s2" href="product.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="more-btn">
                        <a class="theme-btn-s2" href="product.html">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of themart-interestproduct-section -->
@endsection
