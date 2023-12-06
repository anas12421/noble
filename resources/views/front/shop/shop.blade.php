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
                            <li>Shop</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- product-area-start -->
    <div class="shop-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="shop-filter-wrap">
                        <div class="filter-item">
                            <div class="shop-filter-item">
                                <div class="shop-filter-search">
                                    <form>
                                        <div>
                                            <input id="search_input2" type="text" class="form-control" placeholder="Search..">
                                            <button class="search_btn2" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- category --}}
                        <div class="filter-item">
                            <div class="shop-filter-item">
                                <h2>Category</h2>
                                <ul>
                                    @foreach ($categories as $category)
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                {{ $category->category_name }}
                                                <span>({{ App\Models\Product::where('category_id', $category->id)->count() }})</span>
                                                <input type="radio" name="category_id" value="{{ $category->id }}">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        {{-- range --}}
                        <div class="filter-item">
                            <div class="shop-filter-item">
                                <h2>Filter by price</h2>
                                <div class="shopWidgetWraper">
                                    <div class="priceFilterSlider">
                                        <form action="#" method="get" class="clearfix">
                                            <!-- <div id="sliderRange"></div>
                                                                            <div class="pfsWrap">
                                                                                <label>Price:</label>
                                                                                <span id="amount"></span>
                                                                            </div> -->
                                            <div class="d-flex">
                                                <div class="col-lg-6 pe-2">
                                                    <label for="" class="form-label">Min</label>
                                                    <input type="text" class="form-control" placeholder="Min"
                                                        value="0">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="" class="form-label">Max</label>
                                                    <input type="text" class="form-control" placeholder="Max"
                                                        value="100000">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-4">
                                                <button class="form-control bg-light">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>






                        {{-- color --}}
                        <div class="filter-item">
                            <div class="shop-filter-item">
                                <h2>Color</h2>
                                <ul>
                                    @foreach ($colors as $color)
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                {{ $color->color_name }}
                                                <span>({{ App\Models\Inventory::where('color_id', $color->id)->count() }})</span>
                                                <input type="radio" name="color_id" value="{{ $color->id }}">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{-- size --}}
                        <div class="filter-item">
                            <div class="shop-filter-item">
                                <h2>Size</h2>
                                <ul>
                                    @foreach ($sizes as $size)
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                {{ $size->size_name }}
                                                <span>({{ App\Models\Inventory::where('size_id', $size->id)->count() }}))</span>
                                                <input type="radio" name="size_id" value="{{ $size->id }}">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>





                        {{-- products --}}
                        <div class="filter-item">
                            <div class="shop-filter-item new-product">
                                <h2>New Products</h2>
                                <ul>
                                    <li>
                                        <div class="product-card">
                                            <div class="card-image">
                                                <div class="image">
                                                    <img src="assets/images/new-product/1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h3><a href="product.html">Stylish Pink Coat</a></h3>
                                                <div class="rating-product">
                                                    <i class="fi flaticon-star"></i>
                                                    <i class="fi flaticon-star"></i>
                                                    <i class="fi flaticon-star"></i>
                                                    <i class="fi flaticon-star"></i>
                                                    <i class="fi flaticon-star"></i>
                                                    <span>30</span>
                                                </div>
                                                <div class="price">
                                                    <span class="present-price">$120.00</span>
                                                    <del class="old-price">$200.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-card">
                                            <div class="card-image">
                                                <div class="image">
                                                    <img src="assets/images/new-product/2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h3><a href="product.html">Blue Bag</a></h3>
                                                <div class="rating-product">
                                                    <i class="fi flaticon-star"></i>
                                                    <i class="fi flaticon-star"></i>
                                                    <i class="fi flaticon-star"></i>
                                                    <i class="fi flaticon-star"></i>
                                                    <i class="fi flaticon-star"></i>
                                                    <span>30</span>
                                                </div>
                                                <div class="price">
                                                    <span class="present-price">$120.00</span>
                                                    <del class="old-price">$200.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-card">
                                            <div class="card-image">
                                                <div class="image">
                                                    <img src="assets/images/new-product/3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h3><a href="product.html">Kids Blue Shoes</a></h3>
                                                <div class="rating-product">
                                                    <i class="fi flaticon-star"></i>
                                                    <i class="fi flaticon-star"></i>
                                                    <i class="fi flaticon-star"></i>
                                                    <i class="fi flaticon-star"></i>
                                                    <i class="fi flaticon-star"></i>
                                                    <span>30</span>
                                                </div>
                                                <div class="price">
                                                    <span class="present-price">$120.00</span>
                                                    <del class="old-price">$200.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>




                        {{-- tags --}}
                        <div class="filter-item">
                            <div class="shop-filter-item tag-widget">
                                <h2>Popular Tags</h2>
                                <ul>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Kids</a></li>
                                    <li><a href="#">Theme</a></li>
                                    <li><a href="#">Stylish</a></li>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="shop-section-top-inner">
                        <div class="shoping-product">
                            <p>We found <span>{{ $product->count() }} items</span> for you!</p>
                        </div>
                        <div class="short-by">
                            <ul>
                                <li>
                                    Sort by:
                                </li>
                                <li>
                                    <select name="sort" class="sort">
                                        <option value="">Default Sorting</option>
                                        <option value="1">Price Low To High</option>
                                        <option value="2">Price High To Low</option>
                                        <option value="3">Name (A-Z)</option>
                                        <option value="4">Name (Z-A)</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="row align-items-center">
                            @forelse ($product as $products)
                                @php
                                    $avg = '';

                                    $t_star = App\Models\OrderProduct::where('product_id', $products->id)
                                        ->whereNotNull('review')
                                        ->sum('star');
                                    $t_review = App\Models\OrderProduct::where('product_id', $products->id)
                                        ->whereNotNull('review')
                                        ->get();

                                    if ($t_review->count() == 0) {
                                        $avg = 0;
                                    } else {
                                        $avg = round($t_star / $t_review->count());
                                    }
                                @endphp
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img height="150"
                                                src="{{ asset('uploads/product/preview') }}/{{ $products->preview }}"
                                                alt="">
                                            @if ($products->discount)
                                                <div class="tag sale">-{{ $products->discount }}%</div>
                                            @else
                                                <div class="tag new">New</div>
                                            @endif
                                        </div>
                                        <div class="text">
                                            <h2><a
                                                    href="{{ route('check', $products->slug) }}">{{ $products->product_name }}</a>
                                            </h2>
                                            <div class="rating-product">
                                                @for ($i = 1; $i <= $avg; $i++)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                                @for ($i = $avg; $i <= 4; $i++)
                                                    <i class="fa-regular fa-star"></i>
                                                @endfor
                                                <span>{{ App\Models\OrderProduct::where('product_id', $products->id)->whereNotNull('review')->count() }}</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">&#2547;{{ $products->after_discount }}</span>
                                                @if ($products->discount)
                                                    <del class="old-price">&#2547;{{ $products->price }}</del>
                                                @endif
                                            </div>
                                            <div class="shop-btn">
                                                <a class="theme-btn-s2" href="{{ route('check', $products->slug) }}">Shop
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @empty
                                <h3>No Product Found</h3>
                            @endforelse
                            {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-area-end -->
@endsection

@section('footer_script')
    <script>
        $('.search-btn').click(function(){
            var search_input = $('#search_input').val()
            var category_id = $("input[type='radio'][name='category_id']:checked").val();
            var link = "{{route('shop')}}"+"?search_input="+search_input+"&category_id="+category_id;
            window.location.href = link;
        })
        $('.search_btn2').click(function(){
            var search_input = $('#search_input2').val()
            var link = "{{route('shop')}}"+"?search_input="+search_input;
            window.location.href = link;
        })
    </script>
@endsection
