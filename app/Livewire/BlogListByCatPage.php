<?php

namespace App\Livewire;

use App\Models\BlogPost;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class BlogListByCatPage extends Component
{
    use WithPagination;
    // public $id;
    protected  $setting;
    public  $perPage = 6;
    protected  $cat;
    public $id;

    // Add other data properties here...

    public function mount($name)
    {
        $name = strtolower(str_replace('-', ' ', $name));
        // dd($name);
        $category = DB::table('categories')
            ->where('name', $name)
            ->first();

        $this->id = $category->id;
        // Initialize other properties here...
        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();

        $this->cat = $name;

        $this->blogs = DB::table('blog_posts')
            ->join('categories', 'blog_posts.category_id', '=', 'categories.id')
            ->select('blog_posts.*', 'categories.name as category_name')
            ->where('active', 1)
            ->where('blog_posts.category_id', $category->id)
            ->get();

    }

    public function render()
    {


        $blogPosts = BlogPost::with('category')
            ->where('active', 1)
            ->where('category_id', $this->id)
            ->orderByDesc('created_at')
            ->paginate($this->perPage);

        $data = [
            'setting' => $this->setting,
            // 'blogs' => BlogPost::with('category')->where('active', 1)->where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate($this->perPage),
            'blogs' => $blogPosts,
            'cat' => $this->cat,
        ];
        return view('livewire.blog-list-by-cat-page', $data)
            ->layout('livewire.blog-list-by-cat-page', $data);
    }
}
