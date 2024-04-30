<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;


class BlogsComponent extends Component
{
    public function render()
    {
        $blogs = Blog::paginate(6);
        $l_blogs = Blog::orderBy('created_at', 'DESC')->get()->take(6);
        return view('livewire.blogs-component',['blogs' => $blogs, 'l_blogs' => $l_blogs]);
    }
}
