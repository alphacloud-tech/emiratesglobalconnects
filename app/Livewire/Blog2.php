<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Blog2 extends Component
{
    public $blogs;
    protected  $setting;
    // Add other data properties here...

    public function mount()
    {

        $this->blogs = DB::table('blog_posts')
            ->join('categories', 'blog_posts.category_id', '=', 'categories.id')
            ->select('blog_posts.*', 'categories.name as category_name')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();

        // Initialize other properties here...

        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();
    }


    public function render()
    {
        return view('livewire.blog2',  ['setting' => $this->setting, 'blogs' => $this->blogs]);
    }
}
