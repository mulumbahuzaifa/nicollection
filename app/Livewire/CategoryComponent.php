<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $category_slug;


    public $min_price;
    public $max_price;
    protected $listeners = ['refreshComponent' => '$refresh'];
    use WithPagination;


    public function mount($category_slug){
        $this->sorting = "default";
        $this->pagesize = 12;

        $this->min_price = 1;
        $this->max_price = 5000000;
        $this->category_slug = $category_slug;
        // $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));
    }
    // public function store($product_id, $product_name, $product_price){
    //     Cart::instance('cart')->add($product_id, $product_name,1, $product_price)->associate('App\Models\Product');
    //     session()->flash('success_message', 'Item added to cart');
    //     $this->emitTo('cart-count-component', 'refreshComponent');
    //     // $this->emitTo('products-component', 'refreshComponent');
    //     // return redirect()->route('product.cart');
    // }
    // public function addToWishlist($product_id, $product_name, $product_price){
    //     Cart::instance('wishlist')->add($product_id, $product_name,1, $product_price)->associate('App\Models\Product');
    //     $this->emitTo('wishlist-count-component', 'refreshComponent');
    //     // $this->emitTo('products-component', 'refreshComponent');

    // }
    // public function removeFromWishlist($product_id){
    //     foreach(Cart::instance('wishlist')->content() as $witem)
    //     {
    //         if ($witem->id == $product_id) {
    //             Cart::instance('wishlist')->remove($witem->rowId);
    //             $this->emitTo('wishlist-count-component', 'refreshComponent');
    //             // $this->emitTo('products-component', 'refreshComponent');
    //         }
    //     }

    // }
    // public function removeFromCart($product_id){
    //     foreach(Cart::instance('cart')->content() as $witem)
    //     {
    //         if ($witem->id == $product_id) {
    //             Cart::instance('cart')->remove($witem->rowId);
    //             $this->emitTo('cart-count-component', 'refreshComponent');
    //             // $this->emitTo('products-component', 'refreshComponent');
    //         }
    //     }

    // }
    public function render()
    {
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        if ($this->sorting=='date') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->where('category_id', $category_id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if ($this->sorting=='price') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->where('category_id', $category_id)->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        }
        else if ($this->sorting=='price_desc') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->where('category_id', $category_id)->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        }
        else {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->where('category_id', $category_id)->paginate($this->pagesize);
        }
        $categories = Category::all();
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(6);
        $popular_products = Product::inRandomOrder()->limit(8)->get();
        return view('livewire.category-component', ['products' => $products, 'categories' => $categories, 'lproducts' =>$lproducts,'categories' => $categories, 'category_name' => $category_name, 'popular_products'=> $popular_products]);
    }
}
