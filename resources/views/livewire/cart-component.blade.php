<div>
    <div class="site-content">
        <main class="site-main  main-container no-sidebar">
            <div class="container">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="">
								<span>
									Home
								</span>
                        </a>
                        </li>
                        <li class="trail-item trail-end active">
                            <span>
								Shopping Cart
							</span>
                        </li>
                    </ul>
                </div>
                @php
                    $witem = Cart::instance('wishlist')->content()->pluck('id');
                    $citem = Cart::instance('cart')->content()->pluck('id');
                @endphp
                <div class="row">
                    @if (Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Success : </strong>{{ Session::get('success_message') }}
                        </div>
                    @endif
                    @if (Cart::instance('cart')->count() > 0)

                    <div class="main-content-cart main-content col-sm-12">
                        <h3 class="custom_blog_title">
                            Shopping Cart
                        </h3>

                        <div class="page-main-content">
                            <div class="shoppingcart-content">
                                <form action="shoppingcart.html" class="cart-form">
                                    <table class="shop_table">
                                        <thead>
                                            <tr>
                                                <th class="product-remove"></th>
                                                <th class="product-thumbnail"></th>
                                                <th class="product-name"></th>
                                                <th class="product-price"></th>
                                                <th class="product-quantity"></th>
                                                <th class="product-subtotal"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Cart::instance('cart')->content() as $item)

                                            <tr class="cart_item">
                                                <td class="product-remove">
                                                    <a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')" class="remove"></a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="{{ route('shop-details', ['slug' => $item->model->slug]) }}">
                                                <img src="{{ asset('image/products') }}/{{ $item->model->image }}" alt="img"
                                                     class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                                </a>
                                                </td>
                                                <td class="product-name" data-title="Product">
                                                    <a href="{{ route('shop-details', ['slug' => $item->model->slug]) }}" class="title">{{ $item->model->name }}</a>
                                                    <span class="attributes-select attributes-color">UGx{{ $item->model->regular_price }} ,</span>
                                                    {{-- <span class="attributes-select attributes-color">Black,</span>
                                                    <span class="attributes-select attributes-size">XXL</span> --}}
                                                </td>
                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')">-</a>
                                                            <input type="text" data-step="{{ $item->qty }}" data-min="0" value="{{ $item->qty }}" title="Qty" class="input-qty qty" size="4">
                                                            <a href="#" class="btn-number qtyplus quantity-plus" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')">+</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price" data-title="Price">
                                                    <span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">
                                                            UGx{{ $item->subtotal }}
														</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td class="actions">
                                                    <div class="coupon">
                                                        <label class="coupon_code">Coupon Code:</label>
                                                        <input type="text" class="input-text" placeholder="Promotion code here">
                                                        <a href="#" class="button"></a>
                                                    </div>
                                                    <div class="order-total">
                                                        <ul>
                                                            <li>
                                                                <div class="order-total">
                                                                    <span class="title">Sub Total:</span>
                                                                    <span class="total-price" style="width: 150px;">Ugx{{ Cart::subtotal() }}</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="order-total">
                                                                    <span class="title">Tax:</span>
                                                                    <span class="total-price" style="width: 150px;">Ugx{{ Cart::tax() }}</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="order-total">
                                                                    <span class="title">Total Price:</span>
                                                                    <span class="total-price" style="width: 150px;">Ugx{{ Cart::total() }}</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <div class="control-cart">
                                    <a class="button btn-continue-shopping" href="{{ 'shop' }}">
                                        Continue Shopping
                                    </a>

                                    <button class="button btn-cart-to-checkout">
                                    Checkout
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <h3 class="box-title">No items in Cart</h3>
                    <a href="{{ route('shop') }}" class="btn">Add items to Cart</a>
                    @endif
                </div>
            </div>
        </main>
    </div>
</div>
