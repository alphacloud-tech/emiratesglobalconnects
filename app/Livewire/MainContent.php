<?php

namespace App\Livewire;

use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MainContent extends Component
{
    protected $about;
    public $services;
    public $teams;
    public $abouts;
    protected  $setting;
    public $blogs;
    public $testimonials;
    public $categories;
    public $galleries;
    public $galleries2;
    // Add other data properties here...

    public function mount()
    {

        $services = Service::latest() // Retrieve the latest gallery
            ->with('subimages')
            ->where('active', 1)
            ->get();
        // Initialize other properties here...

        $this->teams = DB::table('teams')
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

        $this->galleries = Gallery::latest() // Retrieve the latest gallery
            ->where('active', 1)
            ->get();

        $this->galleries2 = Gallery::latest() // Retrieve the latest gallery
            ->where('active', 1)
            ->take(9)
            ->get();
    }

    public function render()
    {
        $data = [
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
                    'welcomeMessage' => trans('messages.welcome'),
                    'categories' => $this->categories,
                    'galleries' => $this->galleries,
                    'galleries2' => $this->galleries2,

                ]
            )->render(),
            'about' => $this->about,
            'setting' => $this->setting,
        ];


        return view('livewire.main-content', $data);
    }
}
