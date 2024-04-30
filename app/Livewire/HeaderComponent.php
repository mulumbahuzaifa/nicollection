<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class HeaderComponent extends Component
{
    public function render()
    {
        $categories = Category::all();

        return view('livewire.header-component',['categories' => $categories]);
    }
}
