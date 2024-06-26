<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;


class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ]);
    }
    public function storeCategory(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ]);

        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        return redirect()->route('admin.categories');
        session()->flash('message', 'Category has been created Successfully');
    }
    public function render()
    {
        return view('livewire.admin-add-category-component');
    }
}
