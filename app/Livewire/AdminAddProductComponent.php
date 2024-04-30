<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $short_description;
    public $description;
    public $image;
    public $type;
    public $category_id;
    public $categories = [];

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount(){
        $this->stock_status = 'instock';
        $this->featured = 0;
        $this->categories = Category::all();
    }
    public function generateslug(){
        $this->slug = Str::slug($this->name, '-');
    }
    // public function updatedType(){
    //     $this->categories = Category::where('type', $this->type)->get();
    // }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:products',
            'regular_price' => 'required|numeric',
            'stock_status' => 'required',
            'quantity' => 'required|numeric',
            // 'short_description' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png',
            'category_id' => 'required',
        ]);
    }

    public function addProduct(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:products',
            'regular_price' => 'required|numeric',
            'stock_status' => 'required',
            'quantity' => 'required|numeric',
            // 'short_description' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png',
            'category_id' => 'required',
        ]);

        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->SKU = $this->SKU;
        $product->quantity = $this->quantity;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('products', $imageName);
        $product->image = $imageName;
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message', 'Product has been created Successfully');
        return redirect()->route('admin.products');
    }
    public function render()
    {
        // $categories = Category::all();
        return view('livewire.admin-add-product-component');
    }
}
