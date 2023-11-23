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
                            <li><a href="product.html">Product Page</a></li>
                            <li>Cart</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- cart-area-s2 start -->
    <div class="cart-area-s2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-page-title">
                        <h2>Your Cart</h2>
                        <p>There are {{$carts->count()}} products in this list</p>
                    </div>
                </div>
            </div>
            <div class="cart-wrapper">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <form action="{{route('view.cart.update')}}" method="POST">
                            @csrf
                            <div class="cart-item">
                                <table class="table-responsive cart-wrap">
                                    <thead>
                                        <tr>
                                            <th class="images images-b">Product</th>
                                            <th class="ptice">Price</th>
                                            <th class="stock">Quantity</th>
                                            <th class="ptice total">Subtotal</th>
                                            <th class="remove remove-b">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php

                                            $sub = 0;
                                            // $cat_id = array();
                                            $string = '';
                                        @endphp

                                        @foreach ($carts as $cart)

                                        <tr class="wishlist-item">
                                            <td class="product-item-wish">
                                                <div class="check-box"><input type="checkbox"
                                                        class="myproject-checkbox">
                                                </div>
                                                <div class="images">
                                                    <span>
                                                        <img src="{{ asset('uploads/product/preview') }}/{{$cart->rel_to_product->preview}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="product">
                                                    <ul>
                                                        {{-- <li class="first-cart">{{$cart->rel_to_product->id}}</li> --}}
                                                        <li class="first-cart">{{$cart->rel_to_product->product_name}}</li>
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
                                            <td class="ptice cartmap">&#2547;{{$cart->rel_to_product->after_discount}}</td>
                                            <td class="td-quantity cartmap">
                                                <div class="quantity">
                                                    <input class="text-value quan" name="quantity[{{$cart->id}}]" type="text" value="{{$cart->quantity}}">
                                                    <div data-price='{{$cart->rel_to_product->after_discount}}' class="dec qtybutton">-</div>
                                                    <div data-price='{{$cart->rel_to_product->after_discount}}' class="inc qtybutton">+</div>
                                                </div>
                                            </td>
                                            <td class="ptice cartmap">&#2547;<span class="cartmap">{{$cart->rel_to_product->after_discount*$cart->quantity}}</span></td>
                                            <td class="action">
                                                <ul>
                                                    <li class="w-btn"><a data-bs-toggle="tooltip"
                                                            data-bs-html="true" title="" href="{{route('cart.remove',$cart->id)}}"
                                                            data-bs-original-title="Remove from Cart"
                                                            aria-label="Remove from Cart"><i
                                                                class="fi ti-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>

                                        @php
                                            $sub += $cart->rel_to_product->after_discount*$cart->quantity;
                                            $cat_id = array($cart->rel_to_product->category_id);
                                            $string = implode(',',$cat_id) ;
                                        @endphp
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>


                            <div class="cart-action">

                                <button type="submit" class="theme-btn-s2" ><i class="fi flaticon-refresh"></i> Update Cart</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 col-12">


                    @php
                     $final_discount = 0;
                     $total = $sub;

                     if ($type == 1) {
                        $final_discount = round($sub*$amount/100);
                        $total = $sub-$final_discount;


                     }
                     elseif ($type == 2) {
                        $final_discount = $amount;
                        $total = $sub-$final_discount;
                     }
                    @endphp

                        <form action="{{route('view.cart')}}" method="GET">

                            <div class="apply-area mb-3">
                                <input type="text" name="coupon" class="form-control" placeholder="Enter your coupon">
                                <button class="theme-btn-s2" type="submit">Apply</button>
                            </div>

                            @if ($msg)
                                <div class="alert alert-danger">{{$msg}}</div>
                            @endif
                        </form>





                        <div class="cart-total-wrap">
                            <h3>Cart Totals</h3>
                            <div class="sub-total">
                                <h4>Subtotal</h4>
                                <span>&#2547;{{$sub}}</span>
                            </div>
                            <div class="sub-total my-3">
                                <h4>Discount</h4>
                                <span>&#2547;{{$final_discount}}</span>
                            </div>
                            <div class="total mb-3">
                                <h4>Total</h4>
                                <span>&#2547;{{$total}}</span>

                                <input type="hidden" value="{{$coupon}}">
                            </div>
                            @php
                                session([
                                    'discount'=> $final_discount,
                                    'total'=> $total,
                                    'coupon'=> $coupon,
                                ])
                            @endphp
                            <a class="theme-btn-s2" href="{{route('checkout')}}">Proceed To CheckOut</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-prodact">

                <h2>You May be Interested in…</h2>
                {{-- {{$string}} --}}
                {{-- @php

                @endphp --}}
                <div class="row">
                    {{-- @foreach (App\Models\Product::where('category_id' ,$string)->get() as $cat) --}}
                    @foreach ($product as $cat)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item">
                            <div class="image">
                                <img style="width: 150px; height: 150px;" src="{{asset('uploads/product/preview')}}/{{$cat->preview}}" alt="">
                                @if ($cat->discount)

                                <div class="tag sale">-{{$cat->discount}}%</div>
                                @else
                                <div class="tag new">New</div>
                                @endif
                            </div>
                            <div class="text">
                                <h2><a href="product-single.html">{{$cat->product_name}}</a></h2>
                                <div class="rating-product">
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <span>130</span>
                                </div>
                                <div class="price">


                                    <span class="present-price">&#2547;{{$cat->after_discount}}</span>
                                    @if ($cat->discount)

                                    <del class="old-price">&#2547;{{$cat->price}}</del>
                                    @endif
                                </div>
                                <div class="shop-btn">
                                    <a class="theme-btn-s2" href="{{route('check',$cat->slug)}}">Shop Now</a>
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
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item">
                            <div class="image">
                                <img src="assets/images/interest-product/3.png" alt="">
                                <div class="tag new">New</div>
                            </div>
                            <div class="text">
                                <h2><a href="product-single.html">Stylish Pink Top</a></h2>
                                <div class="rating-product">
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <span>150</span>
                                </div>
                                <div class="price">
                                    <span class="present-price">$150.00</span>
                                    <del class="old-price">$200.00</del>
                                </div>
                                <div class="shop-btn">
                                    <a class="theme-btn-s2" href="product.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item">
                            <div class="image">
                                <img src="assets/images/interest-product/4.png" alt="">
                                <div class="tag sale">Sale</div>
                            </div>
                            <div class="text">
                                <h2><a href="product-single.html">Brown Com Boots</a></h2>
                                <div class="rating-product">
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <span>120</span>
                                </div>
                                <div class="price">
                                    <span class="present-price">$120.00</span>
                                    <del class="old-price">$150.00</del>
                                </div>
                                <div class="shop-btn">
                                    <a class="theme-btn-s2" href="product.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- cart-area end -->


    <!-- popup-quickview  -->
    <div id="popup-quickview" class="modal fade" tabindex="-1">
        <div class="modal-dialog quickview-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti-close"></i></button>
                <div class="modal-body d-flex">
                    <div class="product-details">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="product-single-img">
                                    <div class="modal-product">
                                        <div class="item">
                                            <img src="assets/images/modal.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-single-content">
                                    <h5>Wireless Headphones</h5>
                                    <h6>120.00 USD</h6>
                                    <ul class="rating">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis ultrices
                                        lectus lobortis, dolor et tempus porta, leo mi efficitur ante, in varius
                                        felis
                                        sem ut mauris. Proin volutpat lorem inorci sed vestibulum tempus. Lorem
                                        ipsum
                                        dolor sit amet, consectetur adipiscing elit. Aliquam
                                        hendrerit.
                                    </p>
                                    <div class="pro-single-btn">
                                        <div class="quantity cart-plus-minus">
                                            <input type="text" value="1">
                                            <div class="dec qtybutton">-</div>
                                            <div class="inc qtybutton"></div>
                                        </div>
                                        <a href="#" class="theme-btn">Add to cart</a>
                                    </div>
                                    <div class="social-share">
                                        <span>Share with : </span>
                                        <ul class="socialLinks">
                                            <li><a href='#'><i class="fa fa-facebook"></i></a></li>
                                            <li><a href='#'><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href='#'><i class="fa fa-twitter"></i></a></li>
                                            <li><a href='#'><i class="fa fa-instagram"></i></a></li>
                                            <li><a href='#'><i class="fa fa-youtube-play"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- popup-quickview -->
    </div>

</div>
<!-- end of page-wrapper -->
@endsection
@section('footer_script')
<script>
    $(".inc").click(function(){
        var td =document.getElementsByClassName('cartmap');
        var array=Array.from(td);
        array.map((item)=>{
            item.addEventListener('click',function(cart){
                if(cart.target.className == 'inc qtybutton'){
                    var price = cart.target.dataset.price;
                    var quantity =cart.target.parentElement.firstElementChild.value;
                    var sub = price*quantity;
                    var subtotal = item.nextElementSibling.innerHTML =sub;

                }

                if(cart.target.className == 'dec qtybutton'){
                    var price = cart.target.dataset.price;
                    var quantity =cart.target.parentElement.firstElementChild.value;
                    var sub = price*quantity;
                    var subtotal = item.nextElementSibling.innerHTML =sub;
                }
            })
        });
    });
</script>
@endsection
