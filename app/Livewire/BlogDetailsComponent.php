<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogDetailsComponent extends Component
{   public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $blog = Blog::where('slug', $this->slug)->first();
        $related_blogs = Blog::where('category', $blog->category)->where('id', '!=', $blog->id)->get()->take(6);
        $l_blogs = Blog::orderBy('created_at', 'DESC')->get()->take(6);
        return view('livewire.blog-details-component',['blog' => $blog, 'l_blogs' => $l_blogs, 'related_blogs'=>$related_blogs]);
    }
}
