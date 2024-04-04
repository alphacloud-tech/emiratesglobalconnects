<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class About extends Component
{
    public $about;
    protected  $abouts;
    // Add other data properties here...

    public function mount()
    {

        $this->about = DB::table('about_us')->where('active', 1)->orderBy("id", "desc")->first();

        $this->abouts = DB::table('about_us_items')
        ->where('active', 1)
        ->orderBy('created_at', 'desc')
        ->get();

        // Initialize other properties here...

        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();
    }


    public function render()
    {
        return view('livewire.about',  ['abouts' => $this->abouts, 'about' => $this->about]);
    }
}
