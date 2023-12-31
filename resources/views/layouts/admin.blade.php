<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>NobleUI Responsive Bootstrap 4 Dashboard Template</title> --}}
    <title>
        @foreach (Request::segments() as $segment ) {{ucwords($segment)}}  @endforeach
    </title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('backend_assets') }}/assets/vendors/core/core.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet"
        href="{{ asset('backend_assets') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('backend_assets') }}/assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="{{ asset('backend_assets') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- Layout styles -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css" integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('backend_assets') }}/assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('backend_assets') }}/assets/favicon.png" />

    <style>
        .upload__box {
  padding: 40px;
}
.upload__inputfile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}
.upload__btn {
  display: block;
  font-weight: 600;
  color: #fff;
  text-align: center;
  min-width: 116px;
  padding: 5px;
  transition: all 0.3s ease;
  cursor: pointer;
  border: 2px solid;
  background-color: #4045ba;
  border-color: #4045ba;
  border-radius: 10px;
  line-height: 26px;
  font-size: 14px;
}
.upload__btn:hover {
  background-color: unset;
  color: #4045ba;
  transition: all 0.3s ease;
}
.upload__btn-box {
  margin-bottom: 10px;
}
.upload__img-wrap {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -10px;
}
.upload__img-box {
  width: 200px;
  padding: 0 10px;
  margin-bottom: 12px;
}
.upload__img-close {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 10px;
  right: 10px;
  text-align: center;
  line-height: 24px;
  z-index: 1;
  cursor: pointer;
}
.upload__img-close:after {
  content: "✖";
  font-size: 14px;
  color: white;
}

.img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding-bottom: 100%;
}
    </style>
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="{{route('dash')}}" class="sidebar-brand">
                    <img style="width: 70%" src="{{asset('frontend_assets/images/logo.svg')}}" alt="">
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="{{ route('dash') }}" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Backend</li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#uComponents" role="button"
                            aria-expanded="false" aria-controls="uComponents">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Users</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="uComponents">
                            <ul class="nav sub-menu">

                                <li class="nav-item">
                                    <a href="{{ route('user.list') }}" class="nav-link">User List</a>
                                </li>


                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('role.view')}}">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Role Management</span>
                            {{-- <i class="link-arrow" data-feather="chevron-down"></i> --}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#Components" role="button"
                            aria-expanded="false" aria-controls="uComponents">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Category</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="Components">
                            <ul class="nav sub-menu">

                                <li class="nav-item">
                                    <a href="{{ route('category') }}" class="nav-link">Add Category</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('category.trash') }}" class="nav-link">Trash Category</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('subcategory') }}" class="nav-link">Add Sub Category</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#brand" role="button" aria-expanded="false"
                            aria-controls="pro">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Brand</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="brand">
                            <ul class="nav sub-menu">

                                <li class="nav-item">
                                    <a href="{{ route('brand') }}" class="nav-link">Add Brand</a>
                                </li>


                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#pro" role="button" aria-expanded="false"
                            aria-controls="pro">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Product</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="pro">
                            <ul class="nav sub-menu">

                                <li class="nav-item">
                                    <a href="{{ route('product') }}" class="nav-link">Add Product</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('product.list') }}" class="nav-link">Product List</a>
                                </li>



                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#var" role="button" aria-expanded="false"
                            aria-controls="pro">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">variation</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="var">
                            <ul class="nav sub-menu">


                                <li class="nav-item">
                                    <a href="{{ route('variation') }}" class="nav-link">Variation</a>
                                </li>


                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#var" role="button" aria-expanded="false"
                            aria-controls="pro">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Tag</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="var">
                            <ul class="nav sub-menu">


                                <li class="nav-item">
                                    <a href="{{ route('tag') }}" class="nav-link">Tag List</a>
                                </li>


                            </ul>
                        </div>
                    </li>




                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#coupon" role="button" aria-expanded="false"
                            aria-controls="pro">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Coupon</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="coupon">
                            <ul class="nav sub-menu">


                                <li class="nav-item">
                                    <a href="{{ route('coupon') }}" class="nav-link">Add Coupon</a>
                                </li>


                            </ul>
                        </div>
                    </li>

                    <li class="nav-item nav-category">Frontend</li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu" role="button"
                            aria-expanded="false" aria-controls="menu">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Menu</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="menu">
                            <ul class="nav sub-menu">

                                <li class="nav-item">
                                    <a href="{{route('menu')}}" class="nav-link">Add Menu</a>
                                </li>



                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#banner" role="button"
                            aria-expanded="false" aria-controls="banner">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Banner</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="banner">
                            <ul class="nav sub-menu">

                                <li class="nav-item">
                                    <a href="{{route('banner')}}" class="nav-link">Add Banner</a>
                                </li>



                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('offer')}}">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Offer</span>
                            {{-- <i class="link-arrow" data-feather="chevron-down"></i> --}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('customer.list')}}">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Customer</span>
                            {{-- <i class="link-arrow" data-feather="chevron-down"></i> --}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('subscriber')}}">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Subscriber</span>
                            {{-- <i class="link-arrow" data-feather="chevron-down"></i> --}}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('footer')}}">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Footer</span>
                            {{-- <i class="link-arrow" data-feather="chevron-down"></i> --}}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('orders')}}">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Customer Order</span>
                            {{-- <i class="link-arrow" data-feather="chevron-down"></i> --}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cancel.order.request')}}">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Customer Order Cancel</span>
                            {{-- <i class="link-arrow" data-feather="chevron-down"></i> --}}
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#advancedUI" role="button"
                            aria-expanded="false" aria-controls="advancedUI">
                            <i class="link-icon" data-feather="anchor"></i>
                            <span class="link-title">Advanced UI</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="advancedUI">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/advanced-ui/sweet-alert.html" class="nav-link">Sweet Alert</a>
                                </li>
                            </ul>
                        </div>
                    </li>





                    <li class="nav-item nav-category">Pages</li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general-pages" role="button"
                            aria-expanded="false" aria-controls="general-pages">
                            <i class="link-icon" data-feather="book"></i>
                            <span class="link-title">Special pages</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="general-pages">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/general/blank-page.html" class="nav-link">Blank page</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/general/faq.html" class="nav-link">Faq</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/general/invoice.html" class="nav-link">Invoice</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/general/profile.html" class="nav-link">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/general/pricing.html" class="nav-link">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/general/timeline.html" class="nav-link">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#authPages" role="button"
                            aria-expanded="false" aria-controls="authPages">
                            <i class="link-icon" data-feather="unlock"></i>
                            <span class="link-title">Authentication</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="authPages">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/auth/login.html" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/auth/register.html" class="nav-link">Register</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#errorPages" role="button"
                            aria-expanded="false" aria-controls="errorPages">
                            <i class="link-icon" data-feather="cloud-off"></i>
                            <span class="link-title">Error</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="errorPages">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/error/404.html" class="nav-link">404</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/error/500.html" class="nav-link">500</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-category">Docs</li>
                    <li class="nav-item">
                        <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank"
                            class="nav-link">
                            <i class="link-icon" data-feather="hash"></i>
                            <span class="link-title">Documentation</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="settings-sidebar">
            <div class="sidebar-body">
                <a href="#" class="settings-sidebar-toggler">
                    <i data-feather="settings"></i>
                </a>
                <h6 class="text-muted">Sidebar:</h6>
                <div class="form-group border-bottom">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sidebarThemeSettings"
                                id="sidebarLight" value="sidebar-light" checked>
                            Light
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sidebarThemeSettings"
                                id="sidebarDark" value="sidebar-dark">
                            Dark
                        </label>
                    </div>
                </div>
                <div class="theme-wrapper">
                    <h6 class="text-muted mb-2">Light Theme:</h6>
                    <a class="theme-item active" href="../demo_1/dashboard-one.html">
                        <img src="{{ asset('backend_assets') }}/images/screenshots/light.jpg" alt="light theme">
                    </a>
                    <h6 class="text-muted mb-2">Dark Theme:</h6>
                    <a class="theme-item" href="../demo_2/dashboard-one.html">
                        <img src="{{ asset('backend_assets') }}/images/screenshots/dark.jpg" alt="light theme">
                    </a>
                </div>
            </div>
        </nav>
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i data-feather="search"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown nav-apps">
                            <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="appsDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">Web Apps</p>
                                    <a href="javascript:;" class="text-muted">Edit</a>
                                </div>
                                <div class="dropdown-body">
                                    <div class="d-flex align-items-center apps">
                                        <a href="pages/apps/chat.html"><i data-feather="message-square"
                                                class="icon-lg"></i>
                                            <p>Chat</p>
                                        </a>
                                        <a href="pages/apps/calendar.html"><i data-feather="calendar"
                                                class="icon-lg"></i>
                                            <p>Calendar</p>
                                        </a>
                                        <a href="pages/email/inbox.html"><i data-feather="mail" class="icon-lg"></i>
                                            <p>Email</p>
                                        </a>
                                        <a href="pages/general/profile.html"><i data-feather="instagram"
                                                class="icon-lg"></i>
                                            <p>Profile</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-messages">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="mail"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="messageDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">9 New Messages</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="dropdown-body">
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Leonardo Payne</p>
                                                <p class="sub-text text-muted">2 min ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project status</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Carl Henson</p>
                                                <p class="sub-text text-muted">30 min ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Client meeting</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Jensen Combs</p>
                                                <p class="sub-text text-muted">1 hrs ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project updates</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Amiah Burton</p>
                                                <p class="sub-text text-muted">2 hrs ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project deadline</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Yaretzi Mayo</p>
                                                <p class="sub-text text-muted">5 hr ago</p>
                                            </div>
                                            <p class="sub-text text-muted">New record</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-notifications">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>

                                @if (App\Models\OrderCancel::where('status' , 0)->count() != 0)

                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                                @endif
                            </a>
                            <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">{{App\Models\OrderCancel::where('status' , 0)->count()}} New Notifications</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="dropdown-body">

                                    @foreach (App\Models\OrderCancel::where('status' , 0)->get() as $cancel_order )

                                    <a href="{{route('cancel.details', $cancel_order->id)}}" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="user-plus"></i>
                                        </div>
                                        <div class="content">
                                            <p>Order Cancel Request</p>
                                            <p>Order ID : {{App\Models\Order::find($cancel_order->order_id)->order_id}} </p>
                                            <p class="sub-text text-muted">{{$cancel_order->created_at->diffForHumans()}}</p>
                                        </div>
                                    </a>
                                    @endforeach

                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="{{route('cancel.order.request')}}">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (Auth::user()->photo == null)
                                    <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                                @else
                                    <img src="{{ asset('uploads/user') }}/{{ Auth::user()->photo }}" alt="">
                                @endif
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        @if (Auth::user()->photo == null)
                                            <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                                        @else
                                            <img src="{{ asset('uploads/user') }}/{{ Auth::user()->photo }}"
                                                alt="">
                                        @endif
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0">{{ Auth::user()->name }}</p>
                                        <p class="email text-muted mb-3">{{ Auth::user()->email }}</p>
                                        @if (Auth::user()->role == 0)
                                            <p class="btn-primary">Visitor</p>
                                        @endif
                                        @if (Auth::user()->role == 1)
                                            <p class="btn-success">Super Admin</p>
                                        @endif

                                        @if (Auth::user()->role == 2)
                                            <p class="btn-warning">Admin</p>
                                        @endif

                                        @if (Auth::user()->role == 3)
                                            <p class="btn-info">Moderator</p>
                                        @endif

                                        @if (Auth::user()->role == 4)
                                            <p class="btn-dark">Editor</p>
                                        @endif

                                        @if (Auth::user()->role == 100)
                                            <p class="btn-danger">Developer</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="{{ route('user.update') }}" class="nav-link">
                                                <i data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="{{ route('logout') }}" class="nav-link"
                                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                    <i data-feather="log-out"></i>
                                                    <span>Log Out</span>
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->
            {{-- <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form> --}}
            <div class="page-content">
                <div>
                    <div>
                        <nav class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                        </nav>
                        @yield('content')
                    </div>
                </div>
            </div>

            <!-- partial:partials/_footer.html -->
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2021 <a href="https://www.nobleui.com"
                        target="_blank">NobleUI</a>. All rights reserved</p>
                <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i
                        class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
            </footer>
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('backend_assets') }}/assets/vendors/core/core.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('backend_assets') }}/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{ asset('backend_assets') }}/assets/vendors/jquery.flot/jquery.flot.js"></script>
    <script src="{{ asset('backend_assets') }}/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('backend_assets') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('backend_assets') }}/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('backend_assets') }}/assets/vendors/progressbar.js/progressbar.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('backend_assets') }}/assets/vendors/feather-icons/feather.min.js"></script>
    <script src="{{ asset('backend_assets') }}/assets/js/template.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js" integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <script src="{{ asset('backend_assets') }}/assets/js/dashboard.js"></script>
    <script src="{{ asset('backend_assets') }}/assets/js/datepicker.js"></script>
    <!-- end custom js for this page -->

    @yield('footer_script')
</body>

</html>
