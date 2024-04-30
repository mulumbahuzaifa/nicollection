<?php

namespace App\Livewire;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddBlogComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $description;
    public $category;
    public $image;

    public function generateslug(){
        $this->slug = Str::slug($this->title, '-');
    }


    public function updated($fields){
        $this->validateOnly($fields,[
            'title' => 'required',
            'slug' => 'required|unique:blogs',
            'description' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);
    }

    public function addBlog(){
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:blogs',
            'description' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);

        $blog = new Blog();
        $blog->title = $this->title;
        $blog->slug = $this->slug;
        $blog->category = $this->category;
        $blog->created_by = Auth::user()->id;

        $blog->description = $this->description;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('blogs', $imageName);
        $blog->image = $imageName;
        $blog->save();
        return redirect()->route('admin.blogs');
        session()->flash('message', 'Blog has been created Successfully');
    }
    public function render()
    {
        return view('livewire.admin-add-blog-component');
    }
}
