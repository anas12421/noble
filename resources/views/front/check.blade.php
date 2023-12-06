@extends('front.master')

@section('content')
    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <h2 class="d-none">Hide</h2>
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="product.html">Product</a></li>
                            <li>Product Single</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- product-single-section  start-->
    <div class="product-single-section section-padding">
        <div class="container">
            <div class="product-details">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="product-single-img">
                            <div class="product-active owl-carousel">
                                @foreach ($gal_img as $gal)
                                    <div class="item">
                                        <img height="600" src="{{ asset('uploads/product/gallery') }}/{{ $gal->gallery }}"
                                            alt="">
                                    </div>
                                @endforeach

                            </div>
                            <div class="product-thumbnil-active  owl-carousel">
                                @foreach ($gal_img as $gal)
                                    <div class="item">
                                        <img height="150" src="{{ asset('uploads/product/gallery') }}/{{ $gal->gallery }}"
                                            alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-single-content">
                            <h2 style="text-align: left">{{ $product_info->product_name }}</h2>
                            <div class="price">
                                <span class="present-price">&#2547;{{ $product_info->after_discount }}</span>

                                @if ($product_info->discount)
                                    <del class="old-price">&#2547;{{ $product_info->price }}</del>
                                @endif
                            </div>

                            @php
                                $avg = '';

                                if ($reviews->count() == 0) {
                                    $avg = 0;
                                } else {
                                    $avg = round($total_star / $reviews->count());
                                }
                            @endphp
                            <div class="rating-product">
                                @for ($i = 1; $i <= $avg; $i++)
                                    <i class="fa fa-star"></i>
                                @endfor
                                @for ($i = $avg; $i <= 4; $i++)
                                    <i class="fa-regular fa-star"></i>
                                @endfor
                                <span>{{ $reviews->count() }}</span>
                            </div>
                            <p>{!! $product_info->short_desp !!}
                            </p>












                            <form action="{{ route('cart') }}" method="POST">
                                @csrf
                                <div class="product-filter-item color">
                                    <input type="hidden" name="product_id" value="{{ $product_info->id }}">
                                </div>
                                <div class="product-filter-item color">
                                    <div class="color-name">
                                        <span>Color :</span>
                                        <ul>
                                            @foreach ($available_colors as $color)
                                                @if ($color->rel_to_color->color_name == 'NA')
                                                    <li class="color1"><input class="color_id" name="color_id" checked
                                                            id="color{{ $color->color_id }}" type="radio" name="color"
                                                            value="{{ $color->color_id }}">
                                                        <label for="color{{ $color->color_id }}"
                                                            class="bg-dark text-white">NA</label>
                                                    </li>
                                                @else
                                                    <li title="{{ $color->rel_to_color->color_name }}" class="color1">
                                                        <input class="color_id" id="color{{ $color->color_id }}"
                                                            type="radio" name="color_id" value="{{ $color->color_id }}">
                                                        <label for="color{{ $color->color_id }}"
                                                            style="background: {{ $color->rel_to_color->color_code }}"></label>
                                                    </li>
                                                @endif
                                            @endforeach

                                        </ul>
                                    </div>
                                    @error('color_id')
                                        <strong class="text-danger">Color Is Reqired</strong>
                                    @enderror
                                </div>
                                <div class="product-filter-item color filter-size">
                                    <div class="color-name">
                                        <span>Sizes:</span>
                                        <ul class="size_available">
                                            @foreach ($available_sizes as $size)
                                                <li title="{{ $size->rel_to_size->size_name }}" style="overflow: hidden"
                                                    class="color"><input class="size_id" id="size{{ $size->size_id }}"
                                                        type="radio" name="size_id" value="{{ $size->size_id }}">
                                                    <label
                                                        for="size{{ $size->size_id }}">{{ $size->rel_to_size->size_name }}</label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @error('size_id')
                                        <strong class="text-danger">Size Is Reqired</strong>
                                    @enderror
                                </div>
                                <div class="pro-single-btn">
                                    <div class="quantity cart-plus-minus">
                                        <input name="quantity" class="text-value" type="text" value="1">
                                    </div>


                                    @auth('customer')
                                        <button type="submit" name="btn" value="1" class="theme-btn-s2 border-0">Add
                                            to cart</button>
                                    @else
                                        <a href="{{ route('customer.login') }}" class="theme-btn-s2">Add to cart</a>
                                    @endauth

                                    @auth('customer')
                                        <button type="submit" name="btn" value="2" class="wl-btn"><i
                                                class="fi flaticon-heart"></i></button>
                                    @else
                                        <a href="{{ route('customer.login') }}" class="wl-btn"><i
                                                class="fi flaticon-heart"></i></a>
                                    @endauth
                                </div>

                                {{-- <input type="hidden" value="{{$product_info->id}}" name="product_id"> --}}
                            </form>












                            <ul class="important-text">
                                <li><span>SKU:</span>FTE569P</li>
                                <li><span>Categories: </span>{{ $product_info->rel_to_cat->category_name }}</li>

                                @php
                                    $after_explode = explode(',', $product_info->tags);
                                @endphp
                                <li><span>Tags:</span>
                                    @foreach ($after_explode as $tags)
                                        <a href="" class="badge bg-danger">{{ $tags }}</a>
                                    @endforeach
                                </li>
                                <li class="mt-2" id="quan"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tab-area">
                <ul class="nav nav-mb-3 main-tab" id="tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="descripton-tab" data-bs-toggle="pill"
                            data-bs-target="#descripton" type="button" role="tab" aria-controls="descripton"
                            aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Ratings-tab" data-bs-toggle="pill" data-bs-target="#Ratings"
                            type="button" role="tab" aria-controls="Ratings" aria-selected="false">Reviews
                            ({{ $reviews->count() }})</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Information-tab" data-bs-toggle="pill"
                            data-bs-target="#Information" type="button" role="tab" aria-controls="Information"
                            aria-selected="false">Additional info</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="descripton" role="tabpanel"
                        aria-labelledby="descripton-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="Descriptions-item">
                                        {!! $product_info->long_desp !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Ratings" role="tabpanel" aria-labelledby="Ratings-tab">
                        <div class="container">
                            <div class="rating-section">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="comments-area">
                                            <div class="comments-section">
                                                <h3 class="comments-title">{{ $reviews->count() }} reviews for
                                                    {{ $product_info->product_name }}</h3>
                                                <ol class="comments">
                                                    @foreach ($reviews as $review)
                                                        <li class="comment">
                                                            <div>
                                                                <div class="comment-theme">
                                                                    <div class="comment-image">
                                                                        @if ($review->rel_to_customer->photo == null)
                                                                            <img style="width: 70px" class="m-auto"
                                                                                src="{{ $review->rel_to_customer->fname . ' ' . $review->rel_to_customer->lname->toBase64() }}">
                                                                        @else
                                                                            <img style="width: 70px" class="m-auto"
                                                                                src="{{ asset('uploads/customer') }}/{{ $review->rel_to_customer->photo }} "
                                                                                alt="">
                                                                            <img style="width: 70px" class="m-auto"
                                                                                src="{{ $review->rel_to_customer->photo }} "
                                                                                alt="">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="comment-main-area">
                                                                    <div class="comment-wrapper">
                                                                        <div class="comments-meta">
                                                                            <h4>{{ $review->rel_to_customer->fname . ' ' . $review->rel_to_customer->lname }}
                                                                            </h4>
                                                                            <div class="rating-product">
                                                                                @for ($i = 1; $i <= $review->star; $i++)
                                                                                    <i class="fa fa-star"></i>
                                                                                @endfor
                                                                                @for ($i = $review->star; $i <= 4; $i++)
                                                                                    <i class="fa-regular fa-star"></i>
                                                                                @endfor

                                                                            </div>
                                                                            <span
                                                                                class="comments-date">{{ $review->updated_at->format('M') . ' ' . $review->updated_at->format('d') . ', ' . $review->updated_at->format('Y') . ' at ' . $review->updated_at->format('h:i:s') }}</span>
                                                                        </div>
                                                                        <div class="comment-area">
                                                                            <p>{{ $review->review }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ol>
                                            </div> <!-- end comments-section -->



                                            @auth('customer')
                                                @if (App\Models\OrderProduct::where('customer_id', Auth::guard('customer')->id())->where('product_id', $product_info->id)->exists())
                                                    @if (App\Models\OrderProduct::where('customer_id', Auth::guard('customer')->id())->where('product_id', $product_info->id)->whereNotNull('review')->first() == false)
                                                        <div class="col col-lg-10 col-12 review-form-wrapper">
                                                            <div class="review-form">
                                                                <h4>Add a review</h4>
                                                                <form action="{{ route('review.store') }}" method="POST"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="give-rat-sec">
                                                                        <div class="give-rating">

                                                                            <label>
                                                                                <input type="radio" name="stars"
                                                                                    value="1">
                                                                                <span class="icon">★</span>
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio" name="stars"
                                                                                    value="2">
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio" name="stars"
                                                                                    value="3">
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio" name="stars"
                                                                                    value="4">
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio" name="stars"
                                                                                    value="5">
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    @error('stars')
                                                                        <strong>{{ $message }}</strong>
                                                                    @enderror
                                                                    <div>
                                                                        <textarea required name="review" class="form-control" placeholder="Write Comment..."></textarea>
                                                                        @error('review')
                                                                            <strong>{{ $message }}</strong>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="name-input">
                                                                        <input
                                                                            value="{{ Auth::guard('customer')->user()->fname . ' ' . Auth::guard('customer')->user()->lname }}"
                                                                            type="text" class="form-control"
                                                                            placeholder="Name" required>
                                                                    </div>
                                                                    <div class="name-email">
                                                                        <input
                                                                            value="{{ Auth::guard('customer')->user()->email }}"
                                                                            disabled type="email" class="form-control"
                                                                            placeholder="Email" required>
                                                                    </div>
                                                                    <input type="hidden" name="product_id"
                                                                        value="{{ $product_info->id }}" id="">
                                                                    <div class="rating-wrapper">
                                                                        <div class="submit">
                                                                            <button type="submit" class="theme-btn-s2">Post
                                                                                review</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="alert alert-info">
                                                            <h3>You Already Review This Product</h3>
                                                        </div>
                                                    @endif
                                                @else
                                                    <div class="alert alert-warning">
                                                        <h3>You Didn't Purchase This Product Yet</h3>
                                                    </div>
                                                @endif
                                            @endauth
                                        </div> <!-- end comments-area -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Information" role="tabpanel" aria-labelledby="Information-tab">
                        <div class="container">
                            <div class="Additional-wrap">
                                <div class="row">
                                    <div class="col-12">
                                        {!! $product_info->addi_desp !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-product">
        </div>
    </div>
    <!-- product-single-section  end-->
@endsection
@section('footer_script')
    <script>
        $(".color_id").click(function() {
            var color_id = $(this).val();
            var product_id = '{{ $product_info->id }}';
            // alert(product_id);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/getsize',
                type: 'POST',
                data: {
                    'color_id': color_id,
                    'product_id': product_id
                },

                success: function(data) {
                    $(".size_available").html(data);
                    $(".size_id").click(function() {
                        var size_id = $(this).val();
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            }
                        });

                        $.ajax({
                            url: '/getquantity',
                            type: 'POST',
                            data: {
                                'color_id': color_id,
                                'product_id': product_id,
                                'size_id': size_id
                            },

                            success: function(data) {
                                $("#quan").html(data);

                            }
                        });

                    });
                }

            });

        })
    </script>
@endsection
