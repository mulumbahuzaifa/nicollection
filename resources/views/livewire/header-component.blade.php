<div>
    <header class="header style7">
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-left">
                    <div class="header-message">
                        Welcome to our online Perfume store!
                    </div>
                </div>
                <div class="top-bar-right">
                    {{-- <div class="header-language">
                        <div class="stelina-language stelina-dropdown">
                            <a href="#" class="active language-toggle" data-stelina="stelina-dropdown">
                                    <span>
                                        English (USD)
                                    </span>
                        </a>
                            <ul class="stelina-submenu">
                                <li class="switcher-option">
                                    <a href="#">
                                            <span>
                                                French (EUR)
                                            </span>
                                </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                            <span>
                                                Japanese (JPY)
                                            </span>
                                </a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}

                    <ul class="header-user-links">
                        <li>
                            <a href="#"> <i class="fa fa-phone-square fa-lg" aria-hidden="true"></i> (+256) 755-849-551 </a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main-header">
                <div class="row">
                    <div class="col-lg-3 col-sm-4 col-md-3 col-xs-7 col-ts-12 header-element">
                        <div class="logo">
                            <a href="/">
                            <img src="{{ asset('assets/images/logo.png') }}" width="120" alt="img">
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-8 col-md-6 col-xs-5 col-ts-12">
                        @livewire('header-search-component')
                    </div>
                    <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12 col-ts-12">
                        <div class="header-control">
                            <div class="block-minicart stelina-mini-cart block-header stelina-dropdown">
                                <a href="javascript:void(0);" class="shopcart-icon" data-stelina="stelina-dropdown">
                                Cart
                                    <span class="count">
                                        {{ Cart::instance('cart')->count() }}
                                    </span>
                                </a>
                                <div class="shopcart-description stelina-submenu">
                                    <div class="content-wrap">
                                        <h3 class="title">Shopping Cart</h3>
                                        @php
                                            $witem = Cart::instance('wishlist')->content()->pluck('id');
                                            $citem = Cart::instance('cart')->content()->pluck('id');
                                        @endphp
                                        <ul class="minicart-items">
                                        @if (Cart::instance('cart')->count() > 0)
                                            @foreach (Cart::instance('cart')->content() as $item)

                                            <li class="product-cart mini_cart_item">
                                                <a href="{{ route('shop-details', ['slug' => $item->model->slug]) }}" class="product-media">
                                                <img src="{{ asset('image/products') }}/{{ $item->model->image }}" alt="img">
                                                </a>
                                                <div class="product-details">
                                                    <h5 class="product-name">
                                                        <a href="{{ route('shop-details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a>
                                                    </h5>
                                                    <div class="variations">
                                                        <span class="attribute_color">
                                                                <a href="#">White</a>
                                                            </span> ,
                                                        <span class="attribute_size">
                                                                <a href="#">300ml</a>
                                                            </span>
                                                    </div>
                                                    <span class="product-price">
                                                            <span class="price">
                                                                <span>UGX {{ $item->model->regular_price }}</span>
                                                    </span>
                                                    </span>
                                                    <span class="product-quantity">
                                                            (x{{ $item->qty }})
                                                        </span>
                                                    <div class="product-remove">
                                                        <a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                            @else
                                            <h3 class="box-title">No items in Cart</h3>
                                            @endif
                                        </ul>
                                        <div class="subtotal">
                                            <span class="total-title">Subtotal: </span>
                                            <span class="total-price">
                                                    <span class="Price-amount">
                                                        UGX {{ Cart::instance('cart')->subtotal() }}
                                                    </span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <a class="button button-viewcart" href="{{ route('cart') }}">
                                            <span>Check Out</span>
                                        </a>
                                            <a href="{{route('shop')}}" class="button button-checkout">
                                            <span>Shop</span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-account block-header stelina-dropdown">

                                @if (Route::has('login'))
                                @auth
                                @if (Auth::user()->utype === 'ADM')
                                <ul class="list-inline">
                                    <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user-o fa-lg"></i><span> {{ Auth::user()->name }}</span> <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{ route('admin.dashboard') }}">Dashboad</a></li>
                                            <li><a href="{{ route('admin.products') }}">Products</a></li>
                                            <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                            <li><a href="{{ route('admin.contact') }}">Contacts</a></li>
                                            <li><a href="{{ route('admin.settings') }}">Settings</a></li>
                                            <li><a href="{{ route('admin.blogs') }}">Blogs</a></li>
                                            {{--
                                            <li><a href="{{ route('admin.homeslider') }}">Slider</a></li>
                                            <li><a href="{{ route('admin.coupons') }}">Coupons</a></li>
                                            <li><a href="{{ route('admin.orders') }}">Orders</a></li>
                                            --}}
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                                @csrf

                                            </form>
                                        </ul>
                                    </li>
                                </ul>
                                    @else
                                    <ul class="list-inline">
                                        <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user-o fa-lg"></i><span>  {{ Auth::user()->name }}</span> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                {{-- <li><a href="{{ route('user.orders') }}">Orders</a></li> --}}
                                                <li><a href="{{ route('user.dashboard') }}">Dashboad</a></li>

                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                                    @csrf

                                                </form>
                                            </ul>
                                        </li>
                                    </ul>
                                    @endif
                                    @else
                                    <a href="javascript:void(0);" data-stelina="stelina-dropdown">
                                        {{-- <img width="20" src="{{asset('assets/images/png/001-user.png')}}" alt=""> --}}
                                        <i class="fa fa-user-o fa-lg" aria-hidden="true"></i>
                                    </a>
                                @endauth
                            @endif
                                <div class="header-account stelina-submenu">
                                    <div class="header-user-form-tabs">
                                        @if (Route::has('login'))
                                            @auth
                                            @if (Auth::user()->utype === 'ADM')
                                            <ul>
                                                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i><span>My Account {{ Auth::user()->name }}</span> <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="{{ route('admin.products') }}">Products</a></li>
                                                        <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                                        {{-- <li><a href="{{ route('admin.blogs') }}">Blogs</a></li>
                                                        <li><a href="{{ route('admin.homeslider') }}">Slider</a></li>
                                                        <li><a href="{{ route('admin.contact') }}">Contacts</a></li>
                                                        <li><a href="{{ route('admin.coupons') }}">Coupons</a></li>
                                                        <li><a href="{{ route('admin.orders') }}">Orders</a></li>
                                                        <li><a href="{{ route('admin.settings') }}">Settings</a></li> --}}
                                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                                            @csrf

                                                        </form>
                                                    </ul>
                                                </li>
                                            </ul>
                                                @else
                                                <ul>
                                                    <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i><span>My Account {{ Auth::user()->name }}</span> <span class="caret"></span></a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            {{-- <li><a href="{{ route('user.orders') }}">Orders</a></li> --}}
                                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                                                @csrf

                                                            </form>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                @endif
                                                @else
                                                <ul class="tab-link">
                                                    <li class="active">
                                                        <a data-toggle="tab" aria-expanded="true" href="#header-tab-login">Login</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" aria-expanded="true" href="#header-tab-rigister">Register</a>
                                                    </li>
                                                </ul>
                                            @endauth
                                        @endif

                                        <div class="tab-container">
                                            <div id="header-tab-login" class="tab-panel active">
                                                <form method="POST" class="login form-login" action="{{ route('login') }}">
                                                    @csrf
                                                    <p class="form-row form-row-wide">
                                                        <input id="email" placeholder="Email" class="input-text" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                                                        {{-- <input type="email" placeholder="Email" class="input-text"> --}}
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <input id="password" placeholder="Password" class="input-text" type="password" name="password" required autocomplete="current-password" />
                                                        {{-- <input type="password" class="input-text" placeholder="Password"> --}}
                                                    </p>
                                                    <p class="form-row">
                                                        {{-- <label class="form-checkbox">
                                                        <input type="checkbox" class="input-checkbox">
                                                        <span>
                                                                    Remember me
                                                                </span>
                                                    </label> --}}
                                                    <label for="remember_me" class="flex items-center">
                                                        <x-checkbox id="remember_me" class="input-checkbox" name="remember" />
                                                        <span style="color: black; font-size:12px;">
                                                            Remember me
                                                        </span>
                                                    </label>
                                                        <input type="submit" class="button" value="Login">
                                                    </p>
                                                    <p class="lost_password">
                                                        @if (Route::has('password.request'))
                                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                            {{ __('Lost your password?') }}
                                                        </a>
                                                    @endif
                                                        {{-- <a href="#">Lost your password?</a> --}}
                                                    </p>
                                                </form>
                                            </div>
                                            <div id="header-tab-rigister" class="tab-panel">
                                                <form method="post" class="register form-register" action="{{ route('register') }}">
                                                    @csrf
                                                    <p class="form-row form-row-wide">
                                                        <x-input id="name" placeholder="Name" class="input-text" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                        {{-- <input type="email" placeholder="Email" class="input-text"> --}}
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <x-input id="email" placeholder="Email" class="input-text" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                                        {{-- <input type="email" placeholder="Email" cslass="input-text"> --}}
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <x-input id="password" placeholder="Password" class="input-text" type="password" name="password" required autocomplete="new-password" />
                                                        {{-- <input type="password" class="input-text" placeholder="Password"> --}}
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <x-input id="password_confirmation" placeholder="Comfirm Password" class="input-text" type="password" name="password_confirmation" required autocomplete="new-password" />
                                                        {{-- <input type="password" class="input-text" placeholder="Password"> --}}
                                                    </p>
                                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                    <div class="mt-4">
                                                        <x-label for="terms">
                                                            <div class="flex items-center">
                                                                <x-checkbox name="terms" id="terms" required />

                                                                <div class="ms-2">
                                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                                    ]) !!}
                                                                </div>
                                                            </div>
                                                        </x-label>
                                                    </div>
                                                @endif
                                                    <p class="form-row">
                                                        <input type="submit" class="button" value="Register">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav-container rows-space-20">
            <div class="container">
                <div class="header-nav-wapper main-menu-wapper">
                    <div class="vertical-wapper block-nav-categori">
                        <div class="block-title">
                            <span class="icon-bar">
                                <span></span>
                            <span></span>
                            <span></span>
                            </span>
                            <span class="text">All Categories</span>
                        </div>
                        <div class="block-content verticalmenu-content">
                            <ul class="stelina-nav-vertical vertical-menu stelina-clone-mobile-menu">
                                <li class="menu-item">
                                    <a href="{{route('shop')}}" class="stelina-menu-item-title" title="New Arrivals">New Arrivals</a>
                                </li>
                                <li class="menu-item">
                                    <a title="Hot Sale" href="{{route('shop')}}" class="stelina-menu-item-title">Hot Sale</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a title="Our Shop" href="{{route('shop')}}" class="stelina-menu-item-title">Our Store</a>
                                    <span class="toggle-submenu"></span>
                                    <ul role="menu" class=" submenu">
                                        @foreach ($categories as $category)
                                        <li class="menu-item">
                                            <a title="{{ $category->name }}" href="{{ route('product.category',['category_slug' =>$category->slug ]) }}" class="stelina-item-title">{{ $category->name }}</a>
                                        </li>
                                        @endforeach


                                    </ul>
                                </li>
                                {{-- <li class="menu-item">
                                    <a title="Accents" href="#" class="stelina-menu-item-title">Accents</a>
                                </li>
                                <li class="menu-item">
                                    <a title="Tables" href="#" class="stelina-menu-item-title">Tables</a>
                                </li>
                                <li class="menu-item">
                                    <a title="Dining" href="#" class="stelina-menu-item-title">Dining</a>
                                </li>
                                <li class="menu-item">
                                    <a title="Lighting" href="#" class="stelina-menu-item-title">Lighting</a>
                                </li>
                                <li class="menu-item">
                                    <a title="Office" href="#" class="stelina-menu-item-title">Office</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="header-nav">
                        <div class="container-wapper">
                            <ul class="stelina-clone-mobile-menu stelina-nav main-menu " id="menu-main-menu">
                                <li class="menu-item ">
                                    <a href="/" class="stelina-menu-item-title" title="Home">Home.</a>
                                    <span class="toggle-submenu"></span>
                                    {{-- <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="index.html">Home 01</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="home2.html">Home 02</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="home3.html">Home 03</a>
                                        </li>
                                    </ul> --}}
                                </li>
                                <li class="menu-item ">
                                    <a href="{{route('shop')}}" class="stelina-menu-item-title" title="Shop">Shop.</a>
                                    <span class="toggle-submenu"></span>
                                    {{-- <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="gridproducts.html">Grid Fullwidth</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="gridproducts_leftsidebar.html">Grid Left sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="gridproducts_bannerslider.html">Grid Bannerslider</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="listproducts.html">List</a>
                                        </li>
                                    </ul> --}}
                                </li>
                                {{-- <li class="menu-item ">
                                    <a href="#" class="stelina-menu-item-title" title="Pages">Pages</a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu mega-menu menu-page">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                                <div class="stelina-custommenu default">
                                                    <h2 class="widgettitle">Shop Pages</h2>
                                                    <ul class="menu">
                                                        <li class="menu-item">
                                                            <a href="shoppingcart.html">Shopping Cart</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="checkout.html">Checkout</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="contact.html">Contact us</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="404page.html">404</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="login.html">Login/Register</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                                <div class="stelina-custommenu default">
                                                    <h2 class="widgettitle">Product</h2>
                                                    <ul class="menu">
                                                        <li class="menu-item">
                                                            <a href="productdetails-fullwidth.html">Product Fullwidth</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="productdetails-leftsidebar.html">Product left
                                                            sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="productdetails-rightsidebar.html">Product right
                                                            sidebar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                                <li class="menu-item ">
                                    <a href="{{route('blog')}}" class="stelina-menu-item-title" title="Blogs">Blogs.</a>
                                    {{-- <span class="toggle-submenu"></span> --}}
                                    {{-- <ul class="submenu">
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#" class="stelina-menu-item-title" title="Blog Style">Blog Style</a>
                                            <span class="toggle-submenu"></span>
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="bloggrid.html">Grid</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="bloglist.html">List</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="bloglist-leftsidebar.html">List Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="stelina-menu-item-title" title="Post Layout">Post Layout</a>
                                            <span class="toggle-submenu"></span>
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="inblog_left-siderbar.html">Left Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="inblog_right-siderbar.html">Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul> --}}
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('about')}}" class="stelina-menu-item-title" title="About">About.</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('contact')}}" class="stelina-menu-item-title" title="About">Contact US.</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#" class="stelina-menu-item-title" title="My Account">My Account.</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="submenu">
                                        @if (Route::has('login'))
                                            @auth
                                            @if (Auth::user()->utype === 'ADM')
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#" title="My Account" ><i class="fa fa-user"></i><span>  {{ Auth::user()->name }}</span></a>
                                                <span class="toggle-submenu"></span>
                                                <ul class="submenu">
                                                    <li class="menu-item"><a href="{{ route('admin.dashboard') }}">Dashboad</a></li>
                                                    <li class="menu-item"><a href="{{ route('admin.products') }}">Products</a></li>
                                                    <li class="menu-item"><a href="{{ route('admin.categories') }}">Categories</a></li>
                                                    <li class="menu-item"><a href="{{ route('admin.contact') }}">Contacts</a></li>
                                                    <li class="menu-item"><a href="{{ route('admin.settings') }}">Settings</a></li>
                                                    <li class="menu-item"><a href="{{ route('admin.blogs') }}">Blogs</a></li>
                                                    <li class="menu-item">
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                                            @csrf

                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        @else
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#" title="My Account" ><i class="fa fa-user"></i><span>  {{ Auth::user()->name }}</span></a>
                                            <span class="toggle-submenu"></span>
                                            <ul class="submenu">
                                                {{-- <li class="menu-item">
                                                    <a href="#">Login</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Register</a>
                                                </li> --}}
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                                @csrf

                                            </form>
                                        </li>

                                        @endif
                                        @else
                                        <li class="menu-item">
                                            <a href="{{ route('login') }}">Login</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('register') }}">Register</a>
                                        </li>
                                    @endauth
                                @endif
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-device-mobile">
        <div class="wapper">
            <div class="item mobile-logo">
                <div class="logo">
                    <a href="/">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="img">
                </a>
                </div>
            </div>
            <div class="item item mobile-search-box has-sub">
                <a href="#">
                        <span class="icon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>
            </a>
                <div class="block-sub">
                    <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                    <div class="header-searchform-box">
                        @livewire('header-search-component')
                        {{-- <form class="header-searchform">
                            <div class="searchform-wrap">
                                <input type="text" class="search-input" placeholder="Enter keywords to search...">
                                <input type="submit" class="submit button" value="Search">
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="item mobile-settings-box has-sub">
                <a href="#">
                        <span class="icon">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </span>
                    </div>
            </a> --}}
                <div class="block-sub">
                    {{-- <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a> --}}
                    {{-- <div class="block-sub-item">
                        <h5 class="block-item-title">Currency</h5>
                        <form class="currency-form stelina-language">
                            <ul class="stelina-language-wrap">
                                <li class="active">
                                    <a href="#">
                                            <span>
                                                English (USD)
                                            </span>
                                </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <span>
                                                French (EUR)
                                            </span>
                                </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <span>
                                                Japanese (JPY)
                                            </span>
                                </a>
                                </li>
                            </ul>
                        </form>
                    </div> --}}
                </div>

            <div class="item menu-bar">
                <a class=" mobile-navigation  menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
            </div>
        </div>
    </div>
</div>
