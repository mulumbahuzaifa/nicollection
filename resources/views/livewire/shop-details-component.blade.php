<div>
    <div class="main-content main-content-details single left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items breadcrumb">
                            <li class="trail-item trail-begin">
                                <a href="/">Home</a>
                            </li>
                            <li class="trail-item">
                                <a href="{{ route('product.category',['category_slug' =>$product->category->slug]) }}">{{ $product->category->name }}</a>
                            </li>
                            <li class="trail-item trail-end active">
                                {{ $product->name }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content-area content-details col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="site-main">
                        <div class="details-product">
                            <div class="details-thumd">
                                <div class="image-preview-container image-thick-box image_preview_container">
                                    <img id="img_zoom" data-zoom-image="{{ asset('image/products') }}/{{ $product->image }}" src="{{ asset('image/products') }}/{{ $product->image }}" alt="img">
                                    <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="product-preview image-small product_preview">
                                    <div id="thumbnails" class="thumbnails_carousel owl-carousel" data-nav="true" data-autoplay="false" data-dots="false" data-loop="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":3},"600":{"items":3},"1000":{"items":3}}'>
                                        <a href="#" data-image="{{ asset('image/products') }}/{{ $product->image }}" data-zoom-image="{{ asset('image/products') }}/{{ $product->image }}" class="active">
                                            <img src="{{ asset('image/products') }}/{{ $product->image }}" data-large-image="{{ asset('image/products') }}/{{ $product->image }}" alt="img">
                                        </a>
                                        <a href="#" data-image="assets/images/details-item-2.jpg" data-zoom-image="assets/images/details-item-2.jpg">
                                            <img src="assets/images/details-item-2.jpg" data-large-image="assets/images/details-item-2.jpg" alt="img">
                                        </a>
                                        <a href="#" data-image="assets/images/details-item-3.jpg" data-zoom-image="assets/images/details-item-3.jpg">
                                            <img src="assets/images/details-item-3.jpg" data-large-image="assets/images/details-item-3.jpg" alt="img">
                                        </a>
                                        <a href="#" data-image="assets/images/details-item-4.jpg" data-zoom-image="assets/images/details-item-4.jpg">
                                            <img src="assets/images/details-item-4.jpg" data-large-image="assets/images/details-item-4.jpg" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="details-infor">
                                <h1 class="product-title">
                                    {{ $product->name }}
                                </h1>
                                <div class="stars-rating">
                                    <div class="star-rating">
                                        <span class="star-5"></span>
                                    </div>
                                    <div class="count-star">
                                        (7)
                                    </div>
                                </div>
                                <div class="availability">
                                    availability:
                                    <a href="#">{{ $product->stock_status }}</a>
                                </div>
                                <div class="price">
                                    <span>UGx{{ $product->regular_price }}</span>
                                </div>
                                <div class="product-details-description">
                                    <ul>
                                        <li>Cool</li>
                                        <li>Calm</li>
                                        <li>Collected</li>
                                    </ul>
                                </div>
                                <div class="variations">
                                    <div class="attribute attribute_color">
                                        <div class="color-text text-attribute">
                                            Color:
                                        </div>
                                        <div class="list-color list-item">
                                            <a href="#" class="color1"></a>
                                            <a href="#" class="color2"></a>
                                            <a href="#" class="color3 active"></a>
                                            <a href="#" class="color4"></a>
                                        </div>
                                    </div>
                                    {{-- <div class="attribute attribute_size">
                                        <div class="size-text text-attribute">
                                            Pots Size:
                                        </div>
                                        <div class="list-size list-item">
                                            <a href="#" class="">xs</a>
                                            <a href="#" class="">s</a>
                                            <a href="#" class="active">m</a>
                                            <a href="#" class="">l</a>
                                            <a href="#" class="">xl</a>
                                            <a href="#" class="">xxl</a>
                                        </div>
                                    </div> --}}
                                </div>
                                @php
                                    $witem = Cart::instance('wishlist')->content()->pluck('id');
                                    $citem = Cart::instance('cart')->content()->pluck('id');
                                @endphp
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button">
                                            {{-- <a href="#">Add to Wishlist</a> --}}
                                            @if ($witem->contains($product->id))
                                            <button type="button"  style="background: rgb(210, 123, 0)" data-toggle="tooltip" class="btn btn-default wishlist" wire:click.prevent="removeFromWishlist({{ $product->id }})" title="Remove from Wishlist"><i class="fa fa-heart-o"></i>Remove from Wishlist</button>
                                            @else
                                            <button type="button"  data-toggle="tooltip" class="btn btn-default wishlist" wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})" title="Add to Wish List"><i class="fa fa-heart-o"></i>Add to Wishlist</button>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="size-chart-wrapp">
                                        <div class="btn-size-chart">
                                            <a id="size_chart" href="assets/images/size-chart.jpg" class="fancybox">View Size Chart</a>
                                        </div>
                                    </div>
                                    <div class="quantity-add-to-cart">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        @if ($citem->contains($product->id))
                                        <button type="button" id="button-cart" data-loading-text="Loading..." class="single_add_to_cart_button button" style="background: rgb(210, 123, 0)"  wire:click.prevent="removeFromCart({{ $product->id }})">Remove From Cart</button>
                                        <a href="#" class="add-to-cart " ></a>
                                        @else
                                        <button type="button" id="button-cart" data-loading-text="Loading..." class="single_add_to_cart_button button" style="background: rgb(216, 216, 216); color:black;" wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})">Add to Cart</button>
                                        @endif
                                        {{-- <button class="single_add_to_cart_button button">Add to cart</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-details-product">
                            <ul class="tab-link">
                                <li class="active">
                                    <a data-toggle="tab" aria-expanded="true" href="#product-descriptions">Descriptions </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" aria-expanded="true" href="#information">Information </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" aria-expanded="true" href="#reviews">Reviews</a>
                                </li>
                            </ul>
                            <div class="tab-container">
                                <div id="product-descriptions" class="tab-panel active">
                                    <p>
                                        {{ $product->description }}
                                    </p>
                                    {{-- <p>
                                        give you a confident look
                                    </p> --}}
                                </div>
                                <div id="information" class="tab-panel">
                                    {{-- <table class="table table-bordered">
                                        <tr>
                                            <td>Size</td>
                                            <td> XS / S / M / L </td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>White/ Black/ Teal/ Brown</td>
                                        </tr>
                                        <tr>
                                            <td>Properties</td>
                                            <td>Colorful Dress</td>
                                        </tr>
                                    </table> --}}
                                    <p>{{ $product->short_description }}</p>
                                </div>
                                <div id="reviews" class="tab-panel">
                                    <div class="reviews-tab">
                                        <div class="comments">
                                            <h2 class="reviews-title">
                                                1 review for
                                                <span>Glorious Eau</span>
                                            </h2>
                                            <ol class="commentlist">
                                                <li class="conment">
                                                    <div class="conment-container">
                                                        <a href="#" class="avatar">
                                        					<img src="assets/images/avartar.png" alt="img">
                                        				</a>
                                                        <div class="comment-text">
                                                            <div class="stars-rating">
                                                                <div class="star-rating">
                                                                    <span class="star-5"></span>
                                                                </div>
                                                                <div class="count-star">
                                                                    (1)
                                                                </div>
                                                            </div>
                                                            <p class="meta">
                                                                <strong class="author">Oluwa</strong>
                                                                <span>-</span>
                                                                <span class="time">June 7, 2024</span>
                                                            </p>
                                                            <div class="description">
                                                                <p>Highly recoomend the hugo.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="review_form_wrapper">
                                            <div class="review_form">
                                                <div class="comment-respond">
                                                    <span class="comment-reply-title">Add a review </span>
                                                    <form class="comment-form-review">
                                                        <p class="comment-notes">
                                                            <span class="email-notes">Your email address will not be published.</span> Required fields are marked
                                                            <span class="required">*</span>
                                                        </p>
                                                        <div class="comment-form-rating">
                                                            <label>Your rating</label>
                                                            <p class="stars">
                                                                <span>
                                        							<a class="star-1" href="#"></a>
                                        							<a class="star-2" href="#"></a>
                                        							<a class="star-3" href="#"></a>
                                        							<a class="star-4" href="#"></a>
                                        							<a class="star-5" href="#"></a>
                                        						</span>
                                                            </p>
                                                        </div>
                                                        <p class="comment-form-comment">
                                                            <label>
                                        						Your review
                                        						<span class="required">*</span>
                                        					</label>
                                                            <textarea title="review" id="comment" name="comment" cols="45" rows="8"></textarea>
                                                        </p>
                                                        <p class="comment-form-author">
                                                            <label>
                                        						Name
                                        						<span class="">*</span>
                                        					</label>
                                                            <input title="author" id="author" name="author" type="text" value="">
                                                        </p>
                                                        <p class="comment-form-email">
                                                            <label>
                                        						Email
                                        						<span class="">*</span>
                                        					</label>
                                                            <input title="email" id="email" name="email" type="email" value="">
                                                        </p>
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="clear: left;"></div>
                        <div class="related products product-grid">
                            <h2 class="product-grid-title">You may also like</h2>
                            <div class="owl-products owl-slick equal-container nav-center" data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":2}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'>
                                @foreach ($popular_products as $popular_product)

                                <div class="product-item style-1">
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
                                                <a href="{{ route('shop-details', ['slug'=>$popular_product->slug]) }}">
													<img src="{{ asset('image/products') }}/{{ $popular_product->image }}" alt="{{ $popular_product->name }}">
												</a>
                                                <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            @if ($witem->contains($popular_product->id))
                                                            <a href="#" style="color: rgb(210, 123, 0)" wire:click.prevent="removeFromWishlist({{ $popular_product->id }})">Remove From Wishlist</a>
                                                            @else
                                                            <a href="#" wire:click.prevent="addToWishlist({{ $popular_product->id }},'{{ $popular_product->name }}',{{ $popular_product->regular_price }})">Add to Wishlist</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Quick View</a>
                                                    <div class="loop-form-add-to-cart">
                                                        @if ($citem->contains($popular_product->id))
                                                        <button type="button" id="button-cart" data-loading-text="Loading..." class="single_add_to_cart_button button" style="color: rgb(210, 123, 0)"  wire:click.prevent="removeFromCart({{ $popular_product->id }})">Remove From Cart</button>
                                                        <a href="#" class="add-to-cart " ></a>
                                                        @else
                                                        <button type="button" id="button-cart" data-loading-text="Loading..." class="single_add_to_cart_button button"  wire:click.prevent="store({{ $popular_product->id }},'{{ $popular_product->name }}',{{ $popular_product->regular_price }})">Add to Cart</button>
                                                        @endif
                                                        {{-- <button class="single_add_to_cart_button button">Add to cart
														</button> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="{{ route('shop-details', ['slug'=>$popular_product->slug]) }}">{{ $popular_product->name }}</a>
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
                                                    @if ( $popular_product->sale_price )
                                                    <del>
                                                        UGx{{ $popular_product->sale_price }}
                                                    </del>
                                                    @endif

                                                    <ins>
                                                        UGx{{ $popular_product->regular_price }}
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
                </div>
                <div class="sidebar sidebar-details col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="wrapper-sidebar">
                        <div class="widget widget-categories">
                            <h3 class="widgettitle">Categories</h3>
                            <ul class="list-categories">
                                <li>
                                    <input type="checkbox" id="cb1">
                                    <label for="cb1" class="label-text">
										For Her
									</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="cb2">
                                    <label for="cb2" class="label-text">
										For Him
									</label>
                                </li>

                            </ul>
                        </div>
                        <div class="widget widget-related-products">
                            <h3 class="widgettitle">Related Products</h3>
                            <div class="slider-related-products owl-slick nav-top-right equal-container" data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1 }},{"breakpoint":"992","settings":{"slidesToShow":2}}]'>
                                @foreach ($related_products as $related_product)
                                {{-- @php
                                    $witem = Cart::instance('wishlist')->content()->pluck('id');
                                    $citem = Cart::instance('cart')->content()->pluck('id');
                                @endphp --}}
                                <div class="product-item style-1">
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
                                                <a href="{{ route('shop-details', ['slug'=>$related_product->slug]) }}">
													<img src="{{ asset('image/products') }}/{{ $related_product->image }}" alt="{{ $related_product->name }}">
												</a>
                                                <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            {{-- <a href="#">Add to Wishlist</a> --}}
                                                            @if ($witem->contains($related_product->id))
                                                            {{-- <button type="button"  style="color: rgb(210, 123, 0)" data-toggle="tooltip" class="btn btn-default wishlist" wire:click.prevent="removeFromWishlist({{ $product->id }})" title="Remove from Wishlist"><i class="fa fa-heart-o"></i></button> --}}
                                                            <a href="#" style="color: rgb(210, 123, 0)" wire:click.prevent="removeFromWishlist({{ $related_product->id }})">Remove From Wishlist</a>

                                                            @else
                                                            <a href="#" wire:click.prevent="addToWishlist({{ $related_product->id }},'{{ $related_product->name }}',{{ $related_product->regular_price }})">Add to Wishlist</a>

                                                            {{-- <button type="button"  data-toggle="tooltip" class="btn btn-default wishlist" wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})" title="Add to Wish List"><i class="fa fa-heart-o"></i></button> --}}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Quick View</a>
                                                    <div class="loop-form-add-to-cart">
                                                        @if ($citem->contains($product->id))
                                                        <button type="button" id="button-cart" data-loading-text="Loading..." class="single_add_to_cart_button button" style="color: rgb(210, 123, 0)"  wire:click.prevent="removeFromCart({{ $related_product->id }})">Remove From Cart</button>
                                                        <a href="#" class="add-to-cart " ></a>
                                                        @else
                                                        <button type="button" id="button-cart" data-loading-text="Loading..." class="single_add_to_cart_button button"  wire:click.prevent="store({{ $related_product->id }},'{{ $related_product->name }}',{{ $related_product->regular_price }})">Add to Cart</button>
                                                        @endif
                                                        {{-- <button class="single_add_to_cart_button button">Add to cart
														</button> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="{{ route('shop-details', ['slug'=>$related_product->slug]) }}">{{ $related_product->name }}</a>
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
                                                    @if ( $related_product->sale_price )
                                                        <del>
                                                            UGx{{ $related_product->sale_price }}
                                                        </del>
                                                    @endif

                                                    <ins>
														UGx{{ $related_product->regular_price }}
													</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                        </div>
                        <div class="widget widget-testimonials">
                            <h3 class="widgettitle">Testimonials</h3>
                            <div class="slider-related-products owl-slick nav-top-right" data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"991","settings":{"slidesToShow":1 }}]'>
                                <div class="testimonials-item">
                                    <div class="Testimonial-inner">
                                        <div class="comment">
                                        Nicollection got me hooked on that one
                                        </div>
                                        <div class="author">
                                            <div class="avt">
                                                <img src="assets/images/member1.png" alt="img">
                                            </div>
                                            <h3 class="name">
                                                kevin
                                                {{-- <span class="position">
													CEO/Founder Apple
												</span> --}}
                                            </h3>

                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials-item">
                                    <div class="Testimonial-inner">
                                        <div class="comment">
                                            Donec ligula mauris, posuere sed tincidunt a, facilisis id enim. Class aptent taciti sociosqu ad litora torquent per conubia.
                                        </div>
                                        <div class="author">
                                            <div class="avt">
                                                <img src="assets/images/member2.png" alt="img">
                                            </div>
                                            <h3 class="name">
                                                Tom Milikin
                                                <span class="position">
													CEO/Founder Apple
												</span>
                                            </h3>

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
</div>
