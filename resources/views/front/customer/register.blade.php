<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpocean.com/html/tf/themart/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 08:56:41 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend_assets') }}/images/favicon.png">
    <title>
        @foreach (Request::segments() as $segment)
            {{ ucwords($segment) }}
        @endforeach
    </title>
    <link href="{{ asset('frontend_assets') }}/css/themify-icons.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/flaticon_ecommerce.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/owl.theme.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/slick.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/slick-theme.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/swiper.min.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/owl.transitions.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/jquery.fancybox.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/odometer-theme-default.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/sass/style.css" rel="stylesheet">
</head>

<body>

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
                    <img src="{{ asset('frontend_assets') }}/images/preloader.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->

        <div class="wpo-login-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <form class="wpo-accountWrapper" action="{{ route('customer.store') }}" method="POST">
                            @csrf

                            <div class="wpo-accountInfo">
                                <div class="wpo-accountInfoHeader">
                                    <a href="index.html"><img src="{{ asset('frontend_assets') }}/images/logo-2.svg"
                                            alt=""></a>
                                    <a class="wpo-accountBtn" href="{{ route('customer.login') }}">
                                        <span class="">Log in</span>
                                    </a>
                                </div>
                                <div class="image">
                                    <img src="{{ asset('frontend_assets') }}/images/login.svg" alt="">
                                </div>
                                <div class="back-home">
                                    <a class="wpo-accountBtn" href="{{ route('home') }}">
                                        <span class="">Back To Home</span>
                                    </a>
                                </div>
                            </div>
                            <div class="wpo-accountForm form-style">
                                <div class="fromTitle">
                                    <h2>Signup</h2>
                                    <p>Sign into your pages account</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        @if (session('register'))
                                            <div class="alert alert-success">{{ session('register') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <label for="name">First Name</label>
                                        <input type="text" id="name" name="fname"
                                            placeholder="Your name here.." value="{{ old('fname') }}">
                                        @error('fname')
                                            <div class="alert alert-danger">First Name Feild is Required</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <label for="name">Last Name</label>
                                        <input type="text" id="name" name="lname"
                                            placeholder="Your name here.." value="{{ old('lname') }}">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <label>Email</label>
                                        <input type="text" id="email" value="{{ old('email') }}" name="email"
                                            placeholder="Your email here..">
                                        @error('email')
                                            <div class="alert alert-danger">Email Feild is Required</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="pwd2" type="password" placeholder="Your password here.."
                                                value="{{ old('password') }}" name="password">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default reveal3" type="button"><i
                                                        class="ti-eye"></i></button>
                                            </span>
                                        </div>
                                        @error('password')
                                            <div class="alert alert-danger">Password Feild is Required</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="pwd3" type="password" placeholder="Your password here.."
                                                value="" name="password_confrimation">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default reveal2" type="button"><i
                                                        class="ti-eye"></i></button>
                                            </span>
                                        </div>
                                        @error('password_confrimation')
                                            <div class="alert alert-danger">Confrim Password Feild is Required</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-4 mb-4">
                                        <div class="captcha">
                                            <span>{!! captcha_img() !!}</span>
                                            <button type="button" class="btn btn-danger" class="reload"
                                                id="reload">
                                                &#x21bb;
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <input id="captcha" type="text" class="form-control"
                                            placeholder="Enter Captcha" name="captcha">
                                    </div>
                                    @error('captcha')
                                        <div class="alert alert-danger">Captcha is Required</div>
                                    @enderror
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <button type="submit" class="wpo-accountBtn">Signup</button>
                                    </div>

                                </div>

                                <p class="subText">Sign into your pages account <a
                                        href="{{ route('customer.login') }}">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('frontend_assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="{{ asset('frontend_assets') }}/js/modernizr.custom.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/jquery.dlmenu.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="{{ asset('frontend_assets') }}/js/script.js"></script>
    <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: '/reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
</body>


<!-- Mirrored from wpocean.com/html/tf/themart/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 08:56:41 GMT -->

</html>
