<?php

use App\Livewire\AboutComponent;
use App\Livewire\AdminAddBlogComponent;
use App\Livewire\AdminAddCategoryComponent;
use App\Livewire\AdminAddProductComponent;
use App\Livewire\AdminBlogComponent;
use App\Livewire\AdminCategoryComponent;
use App\Livewire\AdminContactComponent;
use App\Livewire\AdminDashboardComponent;
use App\Livewire\AdminEditBlogComponent;
use App\Livewire\AdminEditCategoryComponent;
use App\Livewire\AdminEditProductComponent;
use App\Livewire\AdminProductComponent;
use App\Livewire\AdminSettingComponent;
use App\Livewire\BlogDetailsComponent;
use App\Livewire\BlogsComponent;
use App\Livewire\CartComponent;
use App\Livewire\CategoryComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\ContactComponent;
use App\Livewire\HomeComponent;
use App\Livewire\SearchComponent;
use App\Livewire\ShopComponent;
use App\Livewire\ShopDetailsComponent;
use App\Livewire\UserDashboardComponent;
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

Route::get('/', HomeComponent::class)->name('home');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/blogs', BlogsComponent::class)->name('blog');
Route::get('/blogdetails', BlogDetailsComponent::class)->name('blogdetails');
Route::get('/blog-details/{slug}', BlogDetailsComponent::class)->name('blog.details');
Route::get('/contact-us', ContactComponent::class)->name('contact');
Route::get('/shop', ShopComponent::class)->name('shop');
Route::get('/cart', CartComponent::class)->name('cart');
Route::get('/shop-details/{slug}', ShopDetailsComponent::class)->name('shop-details');
Route::get('/wishlist', WishlistComponent::class)->name('wishlist');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/search', SearchComponent::class)->name('product.search');
Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
//For user
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
    // Route::get('/user/orders', UserOrderComponent::class)->name('user.orders');
    // Route::get('/user/orders/{order_id}', UserOrderDetailsComponent::class)->name('user.orderdetails');
});
//for Admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'authadmin'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/blogs', AdminBlogComponent::class)->name('admin.blogs');

    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/categories/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/blogs/add', AdminAddBlogComponent::class)->name('admin.addblog');

    Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');
    Route::get('/admin/categories/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/blogs/edit/{blog_slug}', AdminEditBlogComponent::class)->name('admin.editblog');

    // Route::get('/admin/slider', AdminHomeSliderComponent::class)->name('admin.homeslider');
    // Route::get('/admin/slider/add', AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    // Route::get('/admin/slider/edit/{slide_id}', AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');

    // Route::get('/admin/coupons', AdminCouponsComponent::class)->name('admin.coupons');
    // Route::get('/admin/coupons/add', AdminAddCouponsComponent::class)->name('admin.addcoupon');
    // Route::get('/admin/coupons/edit/{coupon_id}', AdminEditCouponsComponent::class)->name('admin.editcoupon');

    Route::get('/admin/contact-us', AdminContactComponent::class)->name('admin.contact');
    Route::get('/admin/settings', AdminSettingComponent::class)->name('admin.settings');

    // Route::get('/admin/orders', AdminOrderComponent::class)->name('admin.orders');
    // Route::get('/admin/orders/{order_id}', AdminOrderDetailsComponent::class)->name('admin.orderdetails');
});
