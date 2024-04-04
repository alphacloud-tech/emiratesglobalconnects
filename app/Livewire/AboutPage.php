<?php

namespace App\Livewire;

use App\Models\AboutUs;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AboutPage extends Component
{
    protected $about;
    protected $setting;
    public $teams;
    public $abouts;

    public function mount()
    {
        // Retrieve about information from the database
        $this->about = DB::table('about_us')
            ->where('active', 1)
            ->first();

        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();

        $this->teams = DB::table('teams')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();


        $this->abouts = DB::table('about_us_items')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function render()
    {
        // dd($this->about, $this->setting, $this->teams);
        $data = [
            'setting' => $this->setting,
            'about' => $this->about,
            'teams' => $this->teams,
            'abouts' => $this->abouts,
        ];
        return view('livewire.about-page',$data)
            ->layout('livewire.about-page', $data);
    }
}
