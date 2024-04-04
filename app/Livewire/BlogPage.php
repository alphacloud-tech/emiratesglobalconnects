<?php

namespace App\Livewire;

use App\Models\BlogPost;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class BlogPage extends Component
{
    use WithPagination;

    protected  $setting;
    protected  $categories;
    protected  $recents;
    protected  $galleries2;
    // Add other data properties here...
    public $perPage = 4;

    public function mount()
    {

        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();

        $this->categories = DB::table('categories')
            ->orderBy('created_at', 'desc')
            ->get();

        $this->recents = DB::table('blog_posts')
            ->join('categories', 'blog_posts.category_id', '=', 'categories.id')
            ->select('blog_posts.*', 'categories.name as category_name')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $this->galleries2 = Gallery::latest() // Retrieve the latest gallery
            ->where('active', 1)
            ->take(9)
            ->get();
    }

    public function gotoPage($page)
    {
        $this->currentPage = $page;
    }

    public function render()
    {
        $data = [
            'setting' => $this->setting,
            'categories' => $this->categories,
            'galleries2' => $this->galleries2,
            'recents' => $this->recents,
            'blogs' => BlogPost::with('category')->where('active', 1)->orderBy('created_at', 'desc')->paginate($this->perPage)
        ];

        return view('livewire.blog-page', $data)
            ->layout('livewire.blog-page', $data);
    }
}
