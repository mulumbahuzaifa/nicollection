<div>
    <div>
        <div class="fullwidth-template">
            <div class="home-slider-banner">
                <div class="container">
                    <div class="row10">
                        <div class="col-lg-8 silider-wrapp">
                            <div class="home-slider">
                                <div class="slider-owl owl-slick equal-container nav-center" data-slick='{"autoplay":true, "autoplaySpeed":9000, "arrows":false, "dots":true, "infinite":true, "speed":1000, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                                    <div class="slider-item style7">
                                        <div class="slider-inner equal-element">
                                            <div class="slider-infor">
                                                <h5 class="title-small">
                                                    New Collection <br>Alert
                                                </h5>
                                                <h3 class="title-big">
                                                    Scent Flavors Just<br/>For You
                                                </h3>
                                                <div class="price">
                                                    New Price:
                                                    <span class="number-price">
														<br>UGX.20,000
													</span>
                                                </div>
                                                <a href="{{route('shop')}}" class="button btn-shop-the-look bgroud-style">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item style8">
                                        <div class="slider-inner equal-element">
                                            <div class="slider-infor">
                                                <h5 class="title-small">
                                                    Do Not Miss
                                                </h5>
                                                <h3 class="title-big">
                                                    Up to 25% Off <br/>order now
                                                </h3>
                                                <div class="price">
                                                    Save Price:
                                                    <span class="number-price">
														<br>UGX.5000
													</span>
                                                </div>
                                                <a href="{{route('shop')}}" class="button btn-shop-product">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item style9">
                                        <div class="slider-inner equal-element">
                                            <div class="slider-infor">
                                                <h5 class="title-small">
                                                    Nicollection's<br>Finest Collection
                                                </h5>
                                                <h3 class="title-big">
                                                    A range of <br/>Exotic perfumes
                                                </h3>
                                                <div class="price">
                                                    New Price:
                                                    <span class="number-price">
														<br>UGX.45,000
													</span>
                                                </div>
                                                <a href="{{route('shop')}}" class="button btn-chekout">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 banner-wrapp">
                            <div class="banner">
                                <div class="item-banner style7">
                                    <div class="inner">
                                        <div class="banner-content">
                                            <h3 class="title">Pick Your <br/>Items</h3>
                                            <div class="description">
                                                Enjoy our e-shop experience
                                            </div>
                                            <a href="{{route('shop')}}" class="button btn-lets-do-it">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="banner">
                                <div class="item-banner style8">
                                    <div class="inner">
                                        <div class="banner-content">
                                            <h3 class="title">Best Of<br/>Products</h3>
                                            <div class="description">
                                                Rare Collectors Items
                                            </div>
                                            <span class="price">UGX.50000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stelina-product layout1 produc-featured rows-space-65">
                <div class="container">
                    <h3 class="custommenu-title-blog">
                        Deals Of The Month
                    </h3>
                    @php
                        $witem = Cart::instance('wishlist')->content()->pluck('id');
                        $citem = Cart::instance('cart')->content()->pluck('id');
                    @endphp
                     @if (Session::has('message'))
                     <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                     @endif
                    <div class="owl-products owl-slick equal-container nav-center" wire:ignore data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":false, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":4}},{"breakpoint":"1200","settings":{"slidesToShow":3}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'>
                        @foreach ($featured_products as $featured_product)
                        <div class="product-item style-5"  wire:key="{{ $featured_product->id }}">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
                                        <span class="onnew">
                                        <span class="text">
                                            new
                                        </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#">
                                        <img src="{{ asset('image/products') }}/{{ $featured_product->image }}" alt="{{ $featured_product->name }}">
                                    </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    @if ($witem->contains($featured_product->id))
                                                    <a href="#" wire:click.prevent="removeFromWishlist({{ $featured_product->id }})" style="color: red">Add to Wishlist</a>
                                                    @else
                                                    <a href="#" wire:click.prevent="addToWishlist({{ $featured_product->id }},'{{ $featured_product->name }}',{{ $featured_product->regular_price }})">Add to Wishlist</a>
                                                    @endif
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                @if ($citem->contains($featured_product->id))
                                                <button type="button" class="single_add_to_cart_button button" style="background-color: rgb(247, 6, 6); padding: 4px;"  wire:click.prevent="removeFromCart({{ $featured_product->id }})">Remove From Cart</button>
                                                @else
                                                <button type="button" class="single_add_to_cart_button button" wire:click.prevent="store({{ $featured_product->id }},'{{ $featured_product->name }}',{{ $featured_product->regular_price }})">Add to Cart</button>
                                                @endif
                                                {{-- <button class="single_add_to_cart_button button">Add to cart</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-count-down">
                                        <div class="stelina-countdown" data-y="2021" data-m="10" data-w="4" data-d="10" data-h="20" data-i="20" data-s="60"></div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="{{ route('shop-details', ['slug' => $featured_product->slug]) }}">{{ $featured_product->name }}</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                            @if ($featured_product->sale_price)
                                            <del>
                                                    UGx{{ $featured_product->sale_price }}
                                            </del>
                                            @endif
                                            <ins>
                                                UGx{{ $featured_product->regular_price }}
                                        </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="banner-wrapp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="banner">
                                <div class="item-banner style4">
                                    <div class="inner">
                                        <div class="banner-content">
                                            <h4 class="stelina-subtitle">

                                            </h4>
                                            <h3 class="title">From Nicollection</h3>
                                            <div class="description">
                                                Hand picked choices from our experts
                                            </div>
                                            <a href="{{route('shop')}}" class="button btn-shop-now">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="banner">
                                <div class="item-banner style5">
                                    <div class="inner">
                                        <div class="banner-content">
                                            <h3 class="title">Maybe You’ve <br/>Earned it</h3>
                                            <span class="code">
												Use code:
												<span>
													NICO FUME
												</span> Get 5% Off for all items!
                                            </span>
                                            <a href="{{route('shop')}}" class="button btn-shop-now">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-wrapp rows-space-65">
                <div class="container">
                    <div class="banner">
                        <div class="item-banner style17">
                            <div class="inner">
                                <div class="banner-content">
                                    <h3 class="title">Collection Arrived</h3>
                                    <div class="description">
                                        Upgrade your scent game<br/>And grab the latest from our exclusive collection
                                    </div>
                                    <div class="banner-price">
                                        Price from:
                                        <span class="number-price">UGX.15,000</span>
                                    </div>
                                    <a href="{{route('shop')}}" class="button btn-shop-now">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stelina-tabs  default rows-space-40">
                <div class="container">
                    <div class="tab-head">
                        <ul class="tab-link">
                            <li class="active">
                                <a data-toggle="tab" aria-expanded="true" href="#bestseller">Bestseller</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" aria-expanded="true" href="#new_arrivals">New Arrivals </a>
                            </li>
                            {{-- <li class="">
                                <a data-toggle="tab" aria-expanded="true" href="#top-rated">Top Rated</a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="tab-container">
                        <div id="bestseller" class="tab-panel active">
                            <div class="stelina-product">
                                <ul class="row list-products auto-clear equal-container product-grid">
                                    @foreach ($products as $product)
                                    <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div class="product-inner equal-element">
                                            <div class="product-top">
                                                <div class="flash sell">
                                                    <span class="onnew">
														<span class="text">
															sell
														</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-thumb">
                                                <div class="thumb-inner">
                                                    <a href="#">
                                                    <img src="{{ asset('image/products') }}/{{ $product->image }}" alt="{{ $product->name }}">
                                                </a>
                                                    <div class="thumb-group">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <div class="yith-wcwl-add-button">
                                                                @if ($witem->contains($product->id))
                                                                <a href="#" wire:click.prevent="removeFromWishlist({{ $product->id }})" style="color: red">Add to Wishlist</a>
                                                                @else
                                                                <a href="#" wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})">Add to Wishlist</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <a href="#" class="button quick-wiew-button">Quick View</a>
                                                        <div class="loop-form-add-to-cart">
                                                              @if ($citem->contains($product->id))
                                                            <button type="button" class="single_add_to_cart_button button" style="background-color: rgb(247, 6, 6); padding: 4px;"  wire:click.prevent="removeFromCart({{ $product->id }})">Remove From Cart</button>
                                                            @else
                                                            <button type="button" class="single_add_to_cart_button button" wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})">Add to Cart</button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name product_title">
                                                    <a href="{{ route('shop-details', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                                </h5>
                                                <div class="group-info">
                                                    <div class="stars-rating">
                                                        <div class="star-rating">
                                                            <span class="star-3"></span>
                                                        </div>
                                                        <div class="count-star">
                                                            (3)
                                                        </div>
                                                    </div>
                                                    <div class="price">
                                                        @if ($product->sale_price)
                                                        <del>
                                                                UGx{{ $product->sale_price }}
                                                        </del>
                                                        @endif
                                                        <ins>
                                                            UGx{{ $product->regular_price }}
                                                        </ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div id="new_arrivals" class="tab-panel">
                            <div class="stelina-product">
                                <ul class="row list-products auto-clear equal-container product-grid">
                                    @foreach ($l_products as $l_product)

                                    <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div class="product-inner equal-element">
                                            <div class="product-top">
                                                <div class="flash">
                                                    <span class="onnew">
														<span class="text">
															new
														</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-thumb">
                                                <div class="thumb-inner">
                                                    <a href="#">
                                                    <img src="{{ asset('image/products') }}/{{ $l_product->image }}" alt="img">
                                                </a>
                                                    <div class="thumb-group">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <div class="yith-wcwl-add-button">
                                                                @if ($witem->contains($l_product->id))
                                                                <a href="#" wire:click.prevent="removeFromWishlist({{ $l_product->id }})" style="color: red">Add to Wishlist</a>
                                                                @else
                                                                <a href="#" wire:click.prevent="addToWishlist({{ $l_product->id }},'{{ $l_product->name }}',{{ $l_product->regular_price }})">Add to Wishlist</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <a href="#" class="button quick-wiew-button">Quick View</a>
                                                        <div class="loop-form-add-to-cart">
                                                            @if ($citem->contains($l_product->id))
                                                            <button type="button" class="single_add_to_cart_button button" style="background-color: rgb(247, 6, 6); padding: 4px;"  wire:click.prevent="removeFromCart({{ $l_product->id }})">Remove From Cart</button>
                                                            @else
                                                            <button type="button" class="single_add_to_cart_button button" wire:click.prevent="store({{ $l_product->id }},'{{ $l_product->name }}',{{ $l_product->regular_price }})">Add to Cart</button>
                                                            @endif
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name product_title">
                                                    <a href="{{ route('shop-details', ['slug' => $l_product->slug]) }}">{{ $l_product->name }}</a>
                                                </h5>
                                                <div class="group-info">
                                                    <div class="stars-rating">
                                                        <div class="star-rating">
                                                            <span class="star-3"></span>
                                                        </div>
                                                        <div class="count-star">
                                                            (3)
                                                        </div>
                                                    </div>
                                                    <div class="price">
                                                        @if ($l_product->sale_price)
                                                        <del>
                                                                UGx{{ $l_product->sale_price }}
                                                        </del>
                                                        @endif
                                                        <ins>
                                                            UGx{{ $l_product->regular_price }}
                                                    </ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        {{-- <div id="top-rated" class="tab-panel">
                            <div class="stelina-product">
                                <ul class="row list-products auto-clear equal-container product-grid">
                                    <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div class="product-inner equal-element">
                                            <div class="product-top">
                                                <div class="flash sell">
                                                    <span class="onnew">
														<span class="text">
															sell
														</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-thumb">
                                                <div class="thumb-inner">
                                                    <a href="#">
                                                    <img src="assets/images/product-item-10.jpg" alt="img">
                                                </a>
                                                    <div class="thumb-group">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <div class="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="button quick-wiew-button">Quick View</a>
                                                        <div class="loop-form-add-to-cart">
                                                            <button class="single_add_to_cart_button button">Add to cart
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name product_title">
                                                    <a href="#">Diesel</a>
                                                </h5>
                                                <div class="group-info">
                                                    <div class="stars-rating">
                                                        <div class="star-rating">
                                                            <span class="star-3"></span>
                                                        </div>
                                                        <div class="count-star">
                                                            (3)
                                                        </div>
                                                    </div>
                                                    <div class="price">
                                                        <del>
                                                        UGX 45,500
                                                    </del>
                                                        <ins>
                                                        UGX 35,000
                                                    </ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="stelina-iconbox-wrapp default">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="stelina-iconbox  default">
                                <div class="iconbox-inner">
                                    <div class="icon-item">
                                        <img src="{{asset('assets/images/png/006-fast-delivery.png')}}" alt="">
                                        {{-- <span class="icon flaticon-rocket-ship"></span> --}}
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            On Time Delivery
                                        </h4>
                                        <div class="text">
                                            Swift and Timely <br/>delivery for purchases
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="stelina-iconbox  default">
                                <div class="iconbox-inner">
                                    <div class="icon-item">
                                        <img src="{{asset('assets/images/png/007-money-back.png')}}" alt="">
                                        {{-- <span class="icon flaticon-return"></span> --}}
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            Guarantee
                                        </h4>
                                        <div class="text">
                                            Assured refund incase of reported<br> damages,no questions asked!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="stelina-iconbox  default">
                                <div class="iconbox-inner">
                                    <div class="icon-item">
                                        <img src="{{asset('assets/images/png/008-online-chat.png')}}" alt="">
                                        {{-- <span class="icon flaticon-padlock"></span> --}}
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            Online Support 24/7
                                        </h4>
                                        <div class="text">
                                            We’re here to support to you. <br/>Enjoy your shopping experience!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stelina-blog-wraap default">
                <div class="container">
                    <h3 class="custommenu-title-blog">
                        Our Latest News
                    </h3>
                    <div class="stelina-blog default">
                        <div class="owl-slick equal-container nav-center" data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":3}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"768","settings":{"slidesToShow":2}},{"breakpoint":"481","settings":{"slidesToShow":1}}]'>
                            @foreach ($l_blogs as $blog)
                            <div class="stelina-blog-item equal-element layout1">
                                <div class="post-thumb">
                                    <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">
                                    <img src="{{ asset('image/blogs') }}/{{ $blog->image }}" alt="{{ $blog->title }}">
                                </a>
                                    <div class="category-blog">
                                        <ul class="list-category">
                                            <li class="category-item">
                                                <a href="#">{{  $blog->category }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-item-share">
                                        <a href="#" class="icon">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                    </a>
                                        <div class="box-content">
                                            <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                            <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                            <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                            <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                            <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="post-date">
                                            {{ $blog->created_at }}
                                        </div>
                                        <span class="view">
											<i class="icon fa fa-eye" aria-hidden="true"></i>
											631
										</span>
                                        <span class="comment">
											<i class="icon fa fa-commenting" aria-hidden="true"></i>
											84
										</span>
                                    </div>
                                    <h2 class="blog-title">
                                        <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">{{  $blog->title }} </a>
                                    </h2>
                                    <div class="main-info-post">
                                        <p class="des">
                                            {{ str_limit(strip_tags($blog->description),150,'...')  }}
                                        </p>
                                        <a class="readmore"href="{{ route('blog.details', ['slug' => $blog->slug]) }}">Read more</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="instagram-wrapp">
        <div>
            <h3 class="custommenu-title-blog">
                {{-- <i class="flaticon-instagram" aria-hidden="true"></i>  --}}
                <img src="{{asset('assets/images/png/009-instagram.png')}}" alt="">
                Instagram Feed
            </h3>
            <div class="stelina-instagram">
                <div class="instagram owl-slick equal-container" data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":5}},{"breakpoint":"1200","settings":{"slidesToShow":4}},{"breakpoint":"992","settings":{"slidesToShow":3}},{"breakpoint":"768","settings":{"slidesToShow":2}},{"breakpoint":"481","settings":{"slidesToShow":2}}]'>
                    <div class="item-instagram">
                        <a href="https://www.instagram.com/_nicollection_16?igsh=MWpzOGpkY25qamM3Yw%3D%3D&utm_source=qr ">
                        <img src="assets/images/item-instagram-1.jpg" alt="img">
                    </a>
                    <span class="text">
                            {{-- <img width="10" src="{{asset('assets/images/png/009-instagram.png')}}" alt=""> --}}
                        <i class="icon fa fa-instagram" aria-hidden="true"></i>
			        </span>
                    </div>
                    <div class="item-instagram">
                        <a href="https://www.instagram.com/_nicollection_16?igsh=MWpzOGpkY25qamM3Yw%3D%3D&utm_source=qr ">
                        <img src="assets/images/item-instagram-2.jpg" alt="img">
                    </a>
                        <span class="text">
                            <i class="icon fa fa-instagram" aria-hidden="true"></i>

			        </span>
                    </div>
                    <div class="item-instagram">
                        <a href="https://www.instagram.com/_nicollection_16?igsh=MWpzOGpkY25qamM3Yw%3D%3D&utm_source=qr ">
                        <img src="assets/images/item-instagram-3.jpg" alt="img">
                    </a>
                        <span class="text">
                            <i class="icon fa fa-instagram" aria-hidden="true"></i>

			        </span>
                    </div>
                    <div class="item-instagram">
                        <a href="https://www.instagram.com/_nicollection_16?igsh=MWpzOGpkY25qamM3Yw%3D%3D&utm_source=qr ">
                        <img src="assets/images/item-instagram-4.jpg" alt="img">
                    </a>
                        <span class="text">
                            <i class="icon fa fa-instagram" aria-hidden="true"></i>

			        </span>
                    </div>
                    <div class="item-instagram">
                        <a href="https://www.instagram.com/_nicollection_16?igsh=MWpzOGpkY25qamM3Yw%3D%3D&utm_source=qr ">
                        <img src="assets/images/item-instagram-5.jpg" alt="img">
                    </a>
                        <span class="text">
                            <i class="icon fa fa-instagram" aria-hidden="true"></i>

			        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
