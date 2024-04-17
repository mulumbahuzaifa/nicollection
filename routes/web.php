<?php

use App\Livewire\AboutComponent;
use App\Livewire\BlogDetailsComponent;
use App\Livewire\BlogsComponent;
use App\Livewire\CartComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\ContactComponent;
use App\Livewire\HomeComponent;
use App\Livewire\ShopComponent;
use App\Livewire\ShopDetailsComponent;
use App\Livewire\WishlistComponent;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route::get('/', function(){
//     return view('welcome');
// });

// Route::middleware(['auth:sactum','verified'])-> get('/dashbord',
// function(){
//     return View('dashboard');
// })->name('dashboard');

Route::get('/', HomeComponent::class);
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/blogs', BlogsComponent::class)->name('blog');
Route::get('/blogdetails', BlogDetailsComponent::class)->name('blogdetails');
Route::get('/contact-us', ContactComponent::class)->name('contact');
Route::get('/shop', ShopComponent::class)->name('shop');
Route::get('/cart', CartComponent::class)->name('cart');
Route::get('/shop-details', ShopDetailsComponent::class)->name('shop-details');
Route::get('/wishlist', WishlistComponent::class)->name('wishlist');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');

