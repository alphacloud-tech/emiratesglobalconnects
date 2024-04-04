<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Testimonial2 extends Component
{
    public $testimonials;
    public function mount()
    {
        $this->testimonials = DB::table('testimonials')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
    }
    public function render()
    {
        return view('livewire.testimonial2', ['testimonials' => $this->testimonials,]);
    }
}
