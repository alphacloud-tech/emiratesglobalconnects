<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Header extends Component
{
    protected  $setting;
    public  $categories;
    public  $services;

    public function mount()
    {
        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();

        $this->categories = DB::table('categories')
            ->orderBy('created_at', 'desc')
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
            // 'services' => $this->services,
            // 'categories' => $this->categories,
        ];
        return view('livewire.header', $data);
    }
}
