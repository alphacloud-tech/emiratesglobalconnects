<?php

namespace App\Livewire;

use App\Models\BlogPost;
use App\Models\Gallery;
use App\Models\Property;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BlogDetailPage extends Component
{
    protected $blogPost;
    // public $id;
    protected  $setting;
    public  $blogs;
    public  $categories;
    public  $galleries2;
    public  $previousPost;
    public  $nextPost;
    public  $services;
    // Add other data properties here...

    public function mount($title)
    {

        $title = strtolower(str_replace('-', ' ', $title));

        $blog = DB::table('blog_posts')
            ->where('title', $title)
            ->first();

        $this->blogPost = BlogPost::with(['category', 'quote', 'comments'])
            ->where('active', 1)
            ->where('id', $blog->id)
            ->first();

        // Initialize other properties here...

        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();


        $this->blogs = DB::table('blog_posts')
            ->join('categories', 'blog_posts.category_id', '=', 'categories.id')
            ->select('blog_posts.*', 'categories.name as category_name')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $this->categories = DB::table('categories')
            ->orderBy('created_at', 'desc')
            ->get();


        $this->services = DB::table('services')
            ->where('active', 1)
            ->orderBy('title', 'DESC')
            ->get();

        $this->galleries2 = Gallery::latest() // Retrieve the latest gallery
            ->where('active', 1)
            ->take(9)
            ->get();

        // $post = Post::find($postId);
        $this->previousPost = BlogPost::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();
        $this->nextPost = BlogPost::where('id', '>',  $blog->id)->orderBy('id', 'asc')->first();

        // Assuming you have a 'Post' model and 'posts' table
    }

    public function render()
    {
        $data = [
            'setting' => $this->setting,
            'blogPost' => $this->blogPost,
            'services' => $this->services,
            'blogs' => $this->blogs,
            'categories' => $this->categories,
            'galleries2' => $this->galleries2,
            'previousPost' => $this->previousPost,
            'nextPost' => $this->nextPost,
        ];
        return view('livewire.blog-detail-page', $data)
            ->layout('livewire.blog-detail-page', $data);
    }
}
