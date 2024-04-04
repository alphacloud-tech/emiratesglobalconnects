<?php

namespace App\Livewire;

use App\Models\BlogPost;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DigitalMarketingPage extends Component
{
    protected  $setting;
    protected  $testimonial;
    public  $blogs;
    public  $services;

    public function mount()
    {
        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();


        $this->testimonial = DB::table('testimonials')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->first();

        $this->blogs = BlogPost::with(['category', 'quote', 'comments'])
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        $this->services = DB::table('services')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function render()
    {
        $data = [
            'setting' => $this->setting,
            'testimonial' => $this->testimonial,
            'blogs' => $this->blogs,
            'services' => $this->services,
        ];

        return view('livewire.digital-marketing-page', $data)
            ->layout('livewire.digital-marketing-page', $data);
    }
}
