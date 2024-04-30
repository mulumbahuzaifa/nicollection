<div>
    <div class="main-content main-content-product left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items breadcrumb">
                            <li class="trail-item trail-begin">
                                <a href="/">Home</a>
                            </li>
                            <li class="trail-item trail-end active">
                            SHOP
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content-area shop-grid-content no-banner col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="site-main">
                        <h3 class="custom_blog_title">
                            OUR COLLECTION
                        </h3>
                        <div class="shop-top-control">
                            {{-- <form class="select-item select-form">
                                <span class="title">Filter Products</span>
                                <select title="sort" data-placeholder="12 Products/Page" class="chosen-select">
                                <option value="1">12 Products/Page</option>
                                <option value="2">9 Products/Page</option>
                                <option value="3">10 Products/Page</option>
                                <option value="4">8 Products/Page</option>
                                <option value="5">6 Products/Page</option>
                            </select> --}}
                            </form>
                            <form class="filter-choice select-form">
                                <span class="title">Sort by</span>
                                <select title="sort-by" data-placeholder="Price: Low to High" class="chosen-select">
                                <option value="1">Price: Low to High</option>
                                <option value="2">Sort by popularity</option>
                                <option value="3">Sort by average rating</option>
                                <option value="4">Sort by newness</option>
                                <option value="5">Sort by price: low to high</option>
                            </select>
                            </form>
                            {{-- <div class="grid-view-mode">
                                <div class="inner">
                                    <a href="listproducts.html" class="modes-mode mode-list">
                                    <span></span>
                                    <span></span>
                                </a>
                                    <a href="gridproducts.html" class="modes-mode mode-grid  active">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                </div>
                            </div> --}}
                        </div>
                        @if ($products->count() > 0)

                        <ul class="row list-products auto-clear equal-container product-grid">
                            @foreach ($products as $product)
                            {{-- @php
                                $witem = Cart::instance('wishlist')->content()->pluck('id');
                                $citem = Cart::instance('cart')->content()->pluck('id');
                            @endphp --}}
                            <li class="product-item  col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-1">
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
                                            <img src="{{ asset('image/products') }}/{{ $product->image }}" alt="{{ $product->name }}">
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
                                                    Ugx{{ $product->regular_price }}
                                            </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            {{--
                            <li class="product-item product-type-variable col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-1">
                                <div class="product-inner equal-element">
                                    <div class="product-top">
                                    </div>
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#">
                                            <img src="assets/images/product-item-2.jpg" alt="img">
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
                                            <a href="#">Glorious</a>
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
                                                UGX.30,000
                                            </del>
                                                <ins>
                                                UGX.15,OOO
                                            </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}

                        </ul>
                        @else
                        <div>
                            <p style="padding-top: 30px;">No Products</p>
                        </div>
                        @endif
                        <div class="pagination clearfix style3">
                            <div class="nav-link">
                                {{ $products->links('pagination::bootstrap-4') }}

                                {{-- <a href="#" class="page-numbers"><i class="icon fa fa-angle-left"
                                                                aria-hidden="true"></i></a>
                                <a href="#" class="page-numbers">1</a>
                                <a href="#" class="page-numbers">2</a>
                                <a href="#" class="page-numbers current">3</a>
                                <a href="#" class="page-numbers"><i class="icon fa fa-angle-right"
                                                                aria-hidden="true"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="wrapper-sidebar shop-sidebar">
                        <div class="widget woof_Widget">
                            <div class="widget widget-categories">
                                <h3 class="widgettitle">Categories</h3>
                                <ul class="list-categories">
                                    @foreach ($categories as $category)
                                    <li>
                                        <input type="checkbox" id="{{ $category->id }}">
                                        <label for="{{ $category->id }}" class="label-text">
                                            {{ $category->name }}
                                    </label>
                                    </li>
                                    @endforeach


                                </ul>
                            </div>
                            <div class="widget widget_filter_price">
                                <h4 class="widgettitle">
                                    Price
                                </h4>
                                <div class="price-slider-wrapper">

                                    <div data-label-reasult="Range:" data-min="0" data-max="100000" data-unit="UGx" class="slider-range-price " data-value-min="0" data-value-max="50000">
                                    </div>
                                    <div class="price-slider-amount">
                                        <span class="from">UGx100</span>
                                        <span class="to">UGx50000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-brand">
                                <h3 class="widgettitle">Brand</h3>
                                <ul class="list-brand">
                                    <li>
                                        <input id="cb7" type="checkbox">
                                        <label for="cb7" class="label-text">Hugo</label>
                                    </li>
                                    <li>
                                        <input id="cb8" type="checkbox">
                                        <label for="cb8" class="label-text">Versace</label>
                                    </li>
                                    <li>
                                        <input id="cb9" type="checkbox">
                                        <label for="cb9" class="label-text">CoCo Channel</label>
                                    </li>
                                    <li>
                                        <input id="cb10" type="checkbox">
                                        <label for="cb10" class="label-text">Adams</label>
                                    </li>
                                    <li>
                                        <input id="cb11" type="checkbox">
                                        <label for="cb11" class="label-text">Gucci</label>
                                    </li>
                                    <li>
                                        <input id="cb12" type="checkbox">
                                        <label for="cb12" class="label-text">Fendi</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget_filter_size">
                                <h4 class="widgettitle">Size</h4>
                                <ul class="list-brand">
                                    <li>
                                        <input id="cb13" type="checkbox">
                                        <label for="cb13" class="label-text">14.0 mm</label>
                                    </li>
                                    <li>
                                        <input id="cb14" type="checkbox">
                                        <label for="cb14" class="label-text">14.4 mm</label>
                                    </li>
                                    <li>
                                        <input id="cb15" type="checkbox">
                                        <label for="cb15" class="label-text">14.8 mm</label>
                                    </li>
                                    <li>
                                        <input id="cb16" type="checkbox">
                                        <label for="cb16" class="label-text">15.2 mm</label>
                                    </li>
                                    <li>
                                        <input id="cb17" type="checkbox">
                                        <label for="cb17" class="label-text">15.6 mm</label>
                                    </li>
                                    <li>
                                        <input id="cb18" type="checkbox">
                                        <label for="cb18" class="label-text">16.0 mm</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-color">
                                <h4 class="widgettitle">
                                    Color
                                </h4>
                                <div class="list-color">
                                    <a href="#" class="color1"></a>
                                    <a href="#" class="color2 "></a>
                                    <a href="#" class="color3 active"></a>
                                    <a href="#" class="color4"></a>
                                    <a href="#" class="color5"></a>
                                    <a href="#" class="color6"></a>
                                    <a href="#" class="color7"></a>
                                </div>
                            </div>
                            <div class="widget widget-tags">
                                <h3 class="widgettitle">
                                    Popular Tags
                                </h3>
                                <ul class="tagcloud">
                                    <li class="tag-cloud-link">
                                        <a href="#">Masculine</a>
                                    </li>
                                    <li class="tag-cloud-link">
                                        <a href="#">New</a>
                                    </li>
                                    <li class="tag-cloud-link">
                                        <a href="#">Red</a>
                                    </li>
                                    <li class="tag-cloud-link active">
                                        <a href="#">Feminine</a>
                                    </li>
                                    <li class="tag-cloud-link">
                                        <a href="#">Hot</a>
                                    </li>
                                    <li class="tag-cloud-link">
                                        <a href="#">Sport</a>
                                    </li>
                                    <li class="tag-cloud-link">
                                        <a href="#">Charming</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget newsletter-widget">
                            <div class="newsletter-form-wrap ">
                                <h3 class="title">Subscribe to Our Newsletter</h3>
                                <div class="subtitle">
                                    More special Deals, Events & Promotions
                                </div>
                                <input type="email" class="email" placeholder="Your email letter">
                                <button type="submit" class="button submit-newsletter">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
       /*=======================
		  Slider Range JS
		=========================*/
        var min_price = {!! json_encode($min_price) !!};
        var max_price = {!! json_encode($max_price) !!};
        $(document).ready(function(){



	$('#price-range-submit').hide();

	$("#min_price,#max_price").on('change', function () {

	  $('#price-range-submit').show();

	  var min_price_range = parseInt($("#min_price").val());

	  var max_price_range = parseInt($("#max_price").val());

	  if (min_price_range > max_price_range) {
		$('#max_price').val(min_price_range);
	  }

	  $("#slider-range").slider({
		values: [min_price_range, max_price_range]
	  });

	});


	$("#min_price,#max_price").on("paste keyup", function () {

	  $('#price-range-submit').show();

	  var min_price_range = parseInt($("#min_price").val());

	  var max_price_range = parseInt($("#max_price").val());

	  if(min_price_range == max_price_range){

			max_price_range = min_price_range + 100;

			$("#min_price").val(min_price_range);
			$("#max_price").val(max_price_range);
	  }

	  $("#slider-range").slider({
		values: [min_price_range, max_price_range]
	  });

	});


	$(function () {
	  $("#slider-range").slider({
		range: true,
		orientation: "horizontal",
		min: 0,
		max: 1000000,
		values: [1, 1000000],
		step: 100,

		slide: function (event, ui) {
		  if (ui.values[0] == ui.values[1]) {
			  return false;
		  }


		  $("#min_price").val(ui.values[0]);
		  $("#max_price").val(ui.values[1]);
          $("#amount").val(
            "UGx" + ui.values[0] + " - UGx" + ui.values[1]
        );
        @this.set('min_price', ui.values[0]);
        @this.set('max_price', ui.values[1]);
		}
	  });

	  $("#min_price").val($("#slider-range").slider("values", 0));
	  $("#max_price").val($("#slider-range").slider("values", 1));
      $("#amount").val(
                "UGx" +
                    $("#slider-range").slider("values", 0) +
                    " - UGx" +
                    $("#slider-range").slider("values", 1)
            );

	});

	$("#slider-range,#price-range-submit").click(function () {

	  var min_price = $('#min_price').val();
	  var max_price = $('#max_price').val();

	  $("#searchResults").text("Here List of products will be shown which are cost between " + min_price  +" "+ "and" + " "+ max_price + ".");
	});

});

</script>

@endpush
