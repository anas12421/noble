@extends('front.master')
@section('content')
<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="{{asset('frontend_assets')}}')}}/images/preloader.png" alt="">
            </div>
        </div>
    </div>
    <!-- end preloader -->



    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <h2 class="d-none">Hide</h2>
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="product.html">Product Page</a></li>
                            <li>Wishlist</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- cart-area start -->
    <div class="cart-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-page-title">
                        <h2>Your Wishlist</h2>
                        <p>There are 4 products in this list</p>
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="cart-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <form action="https://wpocean.com/html/tf/themart/cart">
                                <table class="table-responsive cart-wrap">
                                    <thead>
                                        <tr>
                                            <th class="images images-b">Product</th>
                                            <th class="ptice">Price</th>
                                            <th class="stock">Stock Status</th>
                                            <th class="remove remove-b">Action</th>
                                            <th class="remove remove-b">Remove</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($wishs as $wish )

                                        <tr class="wishlist-item">
                                            <td class="product-item-wish">
                                                <div class="check-box"><input type="checkbox"
                                                        class="myproject-checkbox">
                                                </div>
                                                <div class="images">
                                                    <span>
                                                        <img src="{{asset('uploads/product/preview')}}/{{$wish->rel_to_product->preview}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="product">
                                                    <ul>
                                                        <li class="first-cart">{{$wish->rel_to_product->product_name}}</li>
                                                        <li>
                                                            <div class="rating-product">
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <span>130</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            {{-- @php
                                                $p_id  = $wish->product_id;
                                                $id = App\Models\Inventory::where('product_id' , $p_id)->get();
                                            @endphp --}}
                                            <input type="hidden" name="product_id" value="{{$wish->product_id}}" id="">
                                            <input type="hidden" name="" value="{{App\Models\Inventory::where('product_id' , $wish->product_id)->first()->quantity}}" id="">
                                            <td class="ptice">&#2547; {{$wish->rel_to_product->after_discount}}</td>
                                            <td class="stock"><span class="in-stock {{App\Models\Inventory::where('product_id' , $wish->product_id)->first()->quantity == 0 ? 'out-stock' : ''}}"> {{App\Models\Inventory::where('product_id' , $wish->product_id)->first()->quantity == 0 ? 'Out' : 'In'}} Stock</span></td>
                                            <td class="add-wish">
                                                <a class="theme-btn-s2" href="cart.html">Shop Now</a>
                                            </td>
                                            <td class="action">
                                                <ul>
                                                    <li class="w-btn"><a data-bs-toggle="tooltip"
                                                            data-bs-html="true" title="" href="#"
                                                            data-bs-original-title="Remove"
                                                            aria-label="Remove"><i
                                                                class="fi flaticon-remove"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>


                                        @endforeach

                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-area end -->
@endsection
