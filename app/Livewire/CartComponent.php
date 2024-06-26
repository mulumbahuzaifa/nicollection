<?php

namespace App\Livewire;

// use App\Models\Coupon;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public $haveCouponCode;
    public $couponCode;
    public $discount;
    public $subtotalAfterDiscount;
    public $taxAfterDiscount;
    public $totalAfterDiscount;
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function increaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        // $this->emitTo('cart-count-component', 'refreshComponent');
        // $this->emitTo('cart-component', 'refreshComponent');
        return redirect()->route('cart');
    }
    public function decreaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        // $this->emitTo('cart-count-component', 'refreshComponent');
        return redirect()->route('cart');
    }

    public function destroy($rowId){
        Cart::instance('cart')->remove($rowId);
        // $this->emitTo('cart-count-component', 'refreshComponent');
        session()->flash('success_message', 'Item has been removed');
        // return redirect()->route('product.cart');
    }
    public function destroyAll(){
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-count-component', 'refreshComponent');
        return redirect()->route('cart');

    }
    public function switchToSaveToLater($rowId){
        $item = Cart::instance('cart')->get($rowId);
        Cart::instance('cart')->remove($rowId);
        Cart::instance('saveForLater')->add($item->id, $item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component', 'refreshComponent');
        session()->flash('success_message', 'Item has been Saved For later');
        return redirect()->route('cart');

    }
    public function moveToCart($rowId){
        $item = Cart::instance('saveForLater')->get($rowId);
        Cart::instance('saveForLater')->remove($rowId);
        Cart::instance('cart')->add($item->id, $item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component', 'refreshComponent');
        session()->flash('s_success_message', 'Item has been Moved to cart');
        return redirect()->route('cart');
    }

    public function deleteFromSaveForLater($rowId){
        Cart::instance('saveForLater')->remove($rowId);
        $this->emitTo('cart-count-component', 'refreshComponent');
        session()->flash('s_success_message', 'Item has been removed from save for later');
        return redirect()->route('cart');
    }
    // public function applyCouponCode(){
    //     $coupon = Coupon::where('code', $this->couponCode)->where('expiry_date', '>=', Carbon::today())->where('cart_value','<=', Cart::instance('cart')->subtotal())->first();
    //     if (!$coupon) {
    //         session()->flash('coupon_message', 'Coupon code is invalid!');
    //         return;
    //     }
    //     session()->put('coupon',[
    //         'code' => $coupon->code,
    //         'type' => $coupon->type,
    //         'value' => $coupon->value,
    //         'cart_value' => $coupon->cart_value,
    //     ]);
    //     return redirect()->route('product.cart');
    // }
    // public function calculateDiscount(){
    //     if (session()->has('coupon')) {
    //         if (session()->get('coupon')['type'] == 'fixed') {
    //             $this->discount = session()->get('coupon')['value'];
    //         }
    //         else{
    //             $this->discount = (Cart::instance('cart')->subtotal() * session()->get('coupon')['value'])/100;
    //         }
    //         $this->subtotalAfterDiscount = Cart::instance('cart')->subtotal() - $this->discount;
    //         $this->taxAfterDiscount = ($this->subtotalAfterDiscount * config('cart.tax'))/100;
    //         $this->totalAfterDiscount = $this->subtotalAfterDiscount + $this->taxAfterDiscount;
    //     }
    // }
    // public function removeCoupon(){
    //     session()->forget('coupon');
    //     return redirect()->route('product.cart');
    // }

    // public function checkout(){
    //     if(Auth::check())
    //     {
    //         return redirect()->route('checkout');
    //     }else{
    //         return redirect()->route('login');
    //     }
    // }

    // public function setAmountForCheckout(){
    //     if(!Cart::instance('cart')->count() > 0){
    //         session()->forget('checkout');
    //         return;
    //     }
    //     if(session()->has('coupon'))
    //     {
    //         session()->put('checkout',[
    //             'discount' => $this->discount,
    //             'subtotal' => $this->subtotalAfterDiscount,
    //             'tax' => $this->taxAfterDiscount,
    //             'total' => $this->totalAfterDiscount,
    //         ]);
    //     }else{
    //         session()->put('checkout',[
    //             'discount' => 0,
    //             'subtotal' => Cart::instance('cart')->subtotal(),
    //             'tax' => Cart::instance('cart')->tax(),
    //             'total' => Cart::instance('cart')->total(),
    //         ]);
    //     }
    // }
    public function render()
    {
        // if (session()->has('coupon')) {
        //     if (Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value']) {
        //         session()->forget('coupon');
        //     }
        //     else{
        //         $this->calculateDiscount();
        //     }
        // }
        // $this->setAmountForCheckout();
        $popular_products = Product::inRandomOrder()->limit(6)->get();
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(6);
        return view('livewire.cart-component', ['popular_products'=> $popular_products, 'lproducts' => $lproducts]);
    }
}
