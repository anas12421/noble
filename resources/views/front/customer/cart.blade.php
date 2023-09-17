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
                                            <td class="ptice">&#2547;{{$cart->rel_to_product->after_discount}}</td>
                                            <td class="td-quantity">
                                                <div class="quantity cart-plus-minus">
                                                    <input class="text-value" name="quantity[{{$cart->id}}]" type="text" value="{{$cart->quantity}}">
                                                    <div class="dec qtybutton">-</div>
                                                    <div class="inc qtybutton">+</div>
                                                </div>
                                            </td>
                                            <td class="ptice">&#2547;{{$cart->rel_to_product->after_discount*$cart->quantity}}</td>
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
                        <div class="apply-area mb-3">
                            <input type="text" class="form-control" placeholder="Enter your coupon">
                            <button class="theme-btn-s2" type="submit">Apply</button>
                        </div>
                        <div class="cart-total-wrap">
                            <h3>Cart Totals</h3>
                            <div class="sub-total">
                                <h4>Subtotal</h4>
                                <span>$300.00</span>
                            </div>
                            <div class="sub-total my-3">
                                <h4>Discount</h4>
                                <span>00.00</span>
                            </div>
                            <div class="total mb-3">
                                <h4>Total</h4>
                                <span>$300.00</span>
                            </div>
                            <a class="theme-btn-s2" href="checkout.html">Proceed To CheckOut</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-prodact">
                <h2>You May be Interested in…</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item">
                            <div class="image">
                                <img src="assets/images/interest-product/1.png" alt="">
                                <div class="tag new">New</div>
                            </div>
                            <div class="text">
                                <h2><a href="product-single.html">Wireless Headphones</a></h2>
                                <div class="rating-product">
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <span>130</span>
                                </div>
                                <div class="price">
                                    <span class="present-price">$120.00</span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-area end -->

    <!-- start of wpo-site-footer-section -->
    <footer class="wpo-site-footer">
        <div class="wpo-upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="widget about-widget">
                            <div class="logo widget-title">
                                <img src="assets/images/logo-2.svg" alt="blog">
                            </div>
                            <p>Elit commodo nec urna erat morbi at hac turpis aliquam.
                                In tristique elit nibh turpis. Lacus volutpat ipsum convallis tellus pellentesque
                                etiam.</p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-instagram"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="widget link-widget">
                            <div class="widget-title">
                                <h3>Contact Us</h3>
                            </div>
                            <div class="contact-ft">
                                <ul>
                                    <li><i class="fi flaticon-mail"></i>themart@gmail.com</li>
                                    <li><i class="fi flaticon-phone"></i>(208) 555-0112 <br>(704) 555-0127</li>
                                    <li><i class="fi flaticon-pin"></i>4517 Washington Ave. Manchter,
                                        Kentucky 495</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-3 col-lg-2 col-md-6 col-sm-12 col-12">
                        <div class="widget link-widget">
                            <div class="widget-title">
                                <h3>Popular</h3>
                            </div>
                            <ul>
                                <li><a href="product.html">Men</a></li>
                                <li><a href="product.html">Women</a></li>
                                <li><a href="product.html">Kids</a></li>
                                <li><a href="product.html">Shoe</a></li>
                                <li><a href="product.html">Jewelry</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="widget instagram">
                            <div class="widget-title">
                                <h3>Instagram</h3>
                            </div>
                            <ul class="d-flex">
                                <li><a href="project-single.html"><img src="assets/images/instragram/1.jpg"
                                            alt=""></a></li>
                                <li><a href="project-single.html"><img src="assets/images/instragram/2.jpg"
                                            alt=""></a></li>
                                <li><a href="project-single.html"><img src="assets/images/instragram/4.jpg"
                                            alt=""></a></li>
                                <li><a href="project-single.html"><img src="assets/images/instragram/3.jpg"
                                            alt=""></a></li>
                                <li><a href="project-single.html"><img src="assets/images/instragram/4.jpg"
                                            alt=""></a></li>
                                <li><a href="project-single.html"><img src="assets/images/instragram/1.jpg"
                                            alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
        <div class="wpo-lower-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <p class="copyright"> Copyright &copy; 2023 Themart by <a href="index.html">wpOceans</a>.
                            All
                            Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of wpo-site-footer-section -->

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
