<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class AdminBlogComponent extends Component
{
    public function render()
    {
        $blogs = Blog::paginate(8);
        return view('livewire.admin-blog-component',['blogs' => $blogs]);
    }
}
