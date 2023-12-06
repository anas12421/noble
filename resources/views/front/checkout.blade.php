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
                            <li><a href="cart.html">Cart</a></li>
                            <li>Checkout</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- wpo-checkout-area start-->
    <div class="wpo-checkout-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-page-title">
                        <h2>Your Checkout</h2>
                        <p>There are {{ $carts->count() }} products in this list</p>
                    </div>
                </div>
            </div>
            <form action="{{ route('order.store') }}" method="POST">
                @csrf

                <div class="checkout-wrap">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="caupon-wrap s3">
                                <div class="biling-item">
                                    <div class="coupon coupon-3">
                                        <h2>Billing Address</h2>
                                    </div>
                                    <div class="billing-adress">
                                        <div class="contact-form form-style">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <input type="text" placeholder="First Name*" id="fname1"
                                                        name="fname" value="{{ Auth::guard('customer')->user()->fname }}"
                                                        {{ old('fname') }}>

                                                    @error('fname')
                                                        <div class="alert alert-danger mt-2">First Name Feild Required</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <input type="text" placeholder="Last Name*" id="fname2"
                                                        name="lname"value="{{ Auth::guard('customer')->user()->lname }}"
                                                        {{ old('lname') }}>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <select name="country_id" class="country" id="Country"
                                                        class="form-control" {{ old('country') }}>
                                                        <option value="">Select Country</option>

                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->name }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                    @error('country_id')
                                                        <div class="alert alert-danger mt-2">Country Feild Required</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <select name="city_id" class="city" id="City"
                                                        class="form-control"> {{ old('city') }}
                                                        <option value="">Select City</option>
                                                    </select>

                                                    @error('city_id')
                                                        <div class="alert alert-danger mt-2">City Feild Required</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12 mt-2">
                                                    <input type="number" placeholder="Postcode / ZIP*" id="Post2"
                                                        name="zip" value="{{ Auth::guard('customer')->user()->zip }}"
                                                        {{ old('zip') }}>

                                                    @error('zip')
                                                        <div class="alert alert-danger mt-2">Zip Feild Required</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12 mt-2">
                                                    <input type="text" placeholder="Company Name*" id="Company"
                                                        name="company" {{ old('company') }}>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <input type="text" placeholder="Email Address*" id="email4"
                                                        name="email" value="{{ Auth::guard('customer')->user()->email }}"
                                                        {{ old('email') }}>
                                                    @error('email')
                                                        <div class="alert alert-danger mt-2">Email Feild Required</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <input type="text" placeholder="Phone*" id="number" name="phone"
                                                        value="{{ Auth::guard('customer')->user()->phone }}"
                                                        {{ old('phone') }}>
                                                    @error('phone')
                                                        <div class="alert alert-danger mt-2">Phone Feild Required</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <input type="text" placeholder="Address*" id="Adress"
                                                        name="address" class="text-capitalize"
                                                        value="{{ Auth::guard('customer')->user()->address }}"
                                                        {{ old('address') }}>
                                                    @error('address')
                                                        <div class="alert alert-danger mt-2">Address Feild Required</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <div class="note-area">
                                                        <textarea name="note" placeholder="Additional Information"> {{ old('note') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="biling-item-3">
                                        <input id="toggle4" value="1" name="ship_check" type="checkbox">
                                        <label class="fontsize" for="toggle4">Ship to a Different Address?</label>
                                        <div class="billing-adress" id="open4">
                                            <div class="contact-form form-style">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <input type="text" placeholder="First Name*" id="fname6"
                                                            name="ship_fname">

                                                        @error('ship_fname')
                                                            <div class="alert alert-danger mt-2">First Name Feild Required
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <input type="text" placeholder="Last Name*" id="fname7"
                                                            name="ship_lname">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <select style="width: 100% !important" name="ship_country_id"
                                                            class="country2" id="Country2" class="form-control w-100">
                                                            <option value="">Select Country</option>

                                                            @foreach ($countries as $country)
                                                                <option value="{{ $country->id }}">{{ $country->name }}
                                                                </option>
                                                            @endforeach

                                                        </select>
                                                        @error('ship_country_id')
                                                            <div class="alert alert-danger mt-2">Please Select County</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <select style="width: 100% !important" name="ship_city_id"
                                                            class="city2" id="City2" class="form-control w-100">
                                                            <option value="">Select Country</option>
                                                        </select>

                                                        @error('ship_city_id')
                                                            <div class="alert alert-danger mt-2">Please Select County</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12 mt-2">
                                                        <input type="text" placeholder="Postcode / ZIP*"
                                                            id="Post1" name="ship_zip">
                                                        @error('ship_zip')
                                                            <div class="alert alert-danger mt-2">Zip Feild Requiredy</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12 mt-2">
                                                        <input type="text" placeholder="Company Name*" id="Company1"
                                                            name="ship_company">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <input type="text" placeholder="Email Address*" id="email5"
                                                            name="ship_email">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <input type="text" placeholder="Phone*" id="number"
                                                            name="ship_phone">
                                                        @error('ship_phone')
                                                            <div class="alert alert-danger mt-2">Phone Feild Requiredy</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <input type="text" class="text-capitalize"
                                                            placeholder="Address*" id="Adress1" name="ship_address">
                                                        @error('ship_zip')
                                                            <div class="alert alert-danger mt-2">Address Feild Requiredy</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="cout-order-area">
                                <h3>Your Order</h3>
                                <div class="oreder-item">
                                    <div class="title">
                                        <h2>Products <span>Subtotal</span></h2>
                                    </div>

                                    @php

                                        $sub = 0;
                                    @endphp
                                    @foreach ($carts as $cart)
                                        <div class="oreder-product mt-2"
                                            title="{{ $cart->rel_to_product->product_name }}">
                                            <div class="images text-center">
                                                <span>
                                                    <img style="width: 70%"
                                                        src="{{ asset('uploads/product/preview') }}/{{ $cart->rel_to_product->preview }}"
                                                        alt="">
                                                </span>
                                            </div>
                                            <div class="product">
                                                <ul>
                                                    <li class="first-cart">
                                                        {{ substr($cart->rel_to_product->product_name, 0, 15) }}({{ $cart->rel_to_product->after_discount }}x{{ $cart->quantity }})
                                                    </li>
                                                    <li>
                                                        <div class="rating-product">
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <span>15</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span>&#2547;{{ $cart->rel_to_product->after_discount * $cart->quantity }}</span>
                                        </div>

                                        @php
                                            $sub += $cart->rel_to_product->after_discount * $cart->quantity;
                                        @endphp
                                    @endforeach

                                    <!-- Shipping -->
                                    <div class="mt-3 mb-3">
                                        <div class="title2 border-0">
                                            <h5>Discount : &#2547;{{ session('discount') }}</h5>
                                        </div>
                                        @error('charge')
                                            <div class="alert alert-danger my-2">Please Select Delivery Charge</div>
                                        @enderror
                                        <div class="title border-0">
                                            <h2>Delivery Charge</h2>
                                        </div>
                                        <ul>
                                            <li class="free">
                                                <input id="Free" type="radio"
                                                    data-charge='{{ session('total') }}' name="charge" class="dcharge"
                                                    value="70">
                                                <label for="Free">Inside City: <span>&#2547;70</span></label>
                                            </li>
                                            <li class="free">
                                                <input id="Local" type="radio"
                                                    data-charge="{{ session('total') }}" name="charge" class="dcharge"
                                                    value="120">
                                                <label for="Local">Outside City: <span>&#2547;120</span></label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="title s2">
                                        <h2>Total: &#2547;<span id="total">{{ session('total') }}</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="caupon-wrap s5">
                                <div class="payment-area">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="payment-option" id="open5">
                                                @error('payment_method')
                                                    <div class="alert alert-danger mt-2">Please Select Payment Method</div>
                                                @enderror
                                                <h3>Payment</h3>
                                                <div class="payment-select">
                                                    <ul>
                                                        <li class="">
                                                            <input id="remove" type="radio" name="payment_method"
                                                                value="1">
                                                            <label for="remove">Cash on Delivery</label>
                                                        </li>
                                                        <li class="">
                                                            <input id="add" type="radio" name="payment_method"
                                                                value="2">
                                                            <label for="add">Pay With SSLCOMMERZ</label>
                                                        </li>
                                                        <li class="">
                                                            <input id="getway" type="radio" name="payment_method"
                                                                value="3">
                                                            <label for="getway">Pay With STRIPE</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="open6" class="payment-name active">
                                                    <div class="contact-form form-style">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-12">
                                                                <div class="submit-btn-area text-center">
                                                                    <button class="theme-btn" type="submit">Place
                                                                        Order</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="customer_id" value="{{ Auth::guard('customer')->id() }}">
                            <input type="hidden" name="discount" value="{{ session('discount') }}">
                            <input type="hidden" name="total" value="{{ session('total') }}">
                            <input type="hidden" name="coupon" value="{{ session('coupon') }}">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- wpo-checkout-area end-->
@endsection

@section('footer_script')
    <script>
        $(document).ready(function() {
            $('#Country').select2();
            $('#City').select2();
            $('#Country2').select2();
            $('#City2').select2();
        });
    </script>

    <script>
        $('.dcharge').click(function() {
            var charge = $(this).val();
            var total = $(this).attr('data-charge');
            var total = parseInt(total) + parseInt(charge);

            $('#total').html(total);
        })
    </script>



    <script>
        $('.country').change(function() {
            let country_id = $(this).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/getcity',
                type: 'POST',
                data: {
                    'country_id': country_id
                },

                success: function(data) {
                    $('.city').html(data);
                    // alert(data)
                }
            });

        })
    </script>


    <script>
        $('.country2').change(function() {
            let country_id = $(this).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/getcity',
                type: 'POST',
                data: {
                    'country_id': country_id
                },

                success: function(data) {
                    $('.city2').html(data);
                    // alert(data)
                }
            });

        })
    </script>
@endsection
