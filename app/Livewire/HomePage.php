<?php

namespace App\Livewire;

use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomePage extends Component
{
    protected $about;
    public $services;
    public $teams;
    public $abouts;
    protected  $setting;
    public $blogs;
    public $testimonials;
    public $categories;
    public $galleries2;

    // Add other data properties here...

    public function mount()
    {
        $this->about = DB::table('about_us')->where('active', 1)->first();

        $this->services = DB::table('services')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        // Initialize other properties here...

        $this->teams = DB::table('teams')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $this->abouts = DB::table('about_us_items')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();

        $this->blogs = DB::table('blog_posts')
            ->join('categories', 'blog_posts.category_id', '=', 'categories.id')
            ->select('blog_posts.*', 'categories.name as category_name')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $this->testimonials = DB::table('testimonials')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $this->categories = DB::table('categories')
            ->orderBy('created_at', 'desc')
            ->get();

        $this->galleries2 = Gallery::latest() // Retrieve the latest gallery
            ->where('active', 1)
            ->take(9)
            ->get();
    }

    public function render()
    {
        $data = [
            'header' => view(
                'livewire.header',
                [
                    'setting' => $this->setting,
                    'categories' => $this->categories,
                    'services' => $this->services,
                ]
            )->render(),

            'mainContent' => view(
                'livewire.main-content',
                [
                    'about' => $this->about,
                    'abouts' => $this->abouts,
                    'services' => $this->services,
                    'teams' => $this->teams,
                    'blogs' => $this->blogs,
                    'testimonials' => $this->testimonials,
                    'setting' => $this->setting,
                    'categories' => $this->categories,
                    // 'galleries2' => $this->galleries2,
                ]
            )->render(),

            'footer' => view('livewire.footer', [
                'services' => $this->services,
                'setting' => $this->setting,
                'galleries2' => $this->galleries2,
            ])->render(),

            'about' => $this->about,
            'setting' => $this->setting
            // Add other data you need
        ];

        return view('livewire.home-page', $data)
            ->layout('livewire.home-page');
    }
}
