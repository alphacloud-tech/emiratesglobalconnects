<?php

namespace App\Livewire;

use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Footer extends Component
{
    protected  $setting;
    public  $services;
    public  $galleries2;

    public function mount()
    {
        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();

        $this->services = DB::table('services')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $this->galleries2 = Gallery::latest() // Retrieve the latest gallery
            ->where('active', 1)
            ->take(9)
            ->get();
    }

    public function render()
    {
        return view('livewire.footer', [
            'setting' => $this->setting,
            'services' => $this->services,
            'galleries2' => $this->galleries2,
        ]);
    }
}
