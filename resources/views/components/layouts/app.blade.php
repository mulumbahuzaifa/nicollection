<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nicollection- Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.png')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/js/fancybox/source/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.scrollbar.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/mobile-menu.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    @livewireStyles
</head>

<body class="home">
    @livewire('header-component')

    {{ $slot }}

    <footer class="footer style7">
        <div class="container">
            <div class="container-wapper">
                <div class="row">
                    <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-sm hidden-md hidden-lg">
                        <div class="stelina-newsletter style1">
                            <div class="newsletter-head">
                                <h3 class="title">Newsletter</h3>
                            </div>
                            <div class="newsletter-form-wrap">
                                <div class="list">
                                Enter your email<br/>and join our exclusive email list
                                </div>
                                <input type="email" class="input-text email email-newsletter" placeholder="Your email letter">
                                <button class="button btn-submit submit-newsletter">SUBSCRIBE</button>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="stelina-custommenu default">
                            <h2 class="widgettitle">Quick Menu</h2>
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="{{route('shop')}}">Visit Our Shop</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('blog')}}">Blogs</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('about')}}">About Us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('contact')}}">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs">
                        <div class="stelina-newsletter style1">
                            <div class="newsletter-head">
                                <h3 class="title">Newsletter</h3>
                            </div>
                            <div class="newsletter-form-wrap">
                                <div class="list">
                                    Enter your email<br/>and join our exclusive email list
                                </div>
                                <input type="email" class="input-text email email-newsletter" placeholder="Your email letter">
                                <button class="button btn-submit submit-newsletter">SUBSCRIBE</button>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="stelina-custommenu default">
                            <h2 class="widgettitle">Socials</h2>
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="www.twitter.com/@Nicollection16">X</a>
                                </li>
                                <li class="menu-item">
                                    <a href="https://www.instagram.com/_nicollection_16?igsh=MWpzOGpkY25qamM3Yw%3D%3D&utm_source=qr ">Instagram</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Whats app</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-end">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="stelina-socials">
                                <ul class="socials">
                                    {{-- <li>
                                        <a href="#" class="social-item" target="_blank">
                                        <i class="icon fa fa-facebook"></i>
                                    </a>
                                    </li> --}}
                                    <li>
                                        <a href="www.twitter.com/@Nicollection16" class="social-item" target="_blank">
                                        <i class="icon fa fa-twitter"></i>
                                    </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/_nicollection_16?igsh=MWpzOGpkY25qamM3Yw%3D%3D&utm_source=qr " class="social-item" target="_blank">
                                        <i class="icon fa fa-instagram"></i>
                                    </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="coppyright">
                                Copyright © 2024
                                <a href="#">Nicollection</a> . All rights reserved
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-device-mobile">
        <div class="wapper">
            <div class="footer-device-mobile-item device-home">
                <a href="/">
					<span class="icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</span>
                Home
            </a>
            </div>
            <div class="footer-device-mobile-item device-home device-wishlist">
                <a href="#">
					<span class="icon">
						<i class="fa fa-heart" aria-hidden="true"></i>
					</span>
                Wishlist
            </a>
            </div>
            <div class="footer-device-mobile-item device-home device-cart">
                <a href="#">
					<span class="icon">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						<span class="count-icon">
							0
						</span>
					</span>
                <span class="text">Cart</span>
            </a>
            </div>
            {{-- <div class="footer-device-mobile-item device-home device-user">
                <a href="login.html">
					<span class="icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                Account
            </a>
            </div> --}}
        </div>
    </div>
    <a href="#" class="backtotop">
        <i class="fa fa-angle-double-up"></i>
    </a>
    <script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.plugin-countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/mobile-menu.js')}}"></script>
    <script src="{{asset('assets/js/chosen.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.js')}}"></script>
    <script src="{{asset('assets/js/jquery.elevateZoom.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.actual.min.js')}}"></script>
    <script src="{{asset('assets/js/fancybox/source/jquery.fancybox.js')}}"></script>
    <script src="{{asset('assets/js/lightbox.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.thumbs.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend-plugin.js')}}"></script>
    @livewireScripts
</body>

</html>
