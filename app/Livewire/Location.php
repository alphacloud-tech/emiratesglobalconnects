<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Location extends Component
{

    protected $setting;

    public function mount()
    {

        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();
    }


    public function render()
    {
        $data = [
            'setting' => $this->setting,
        ];
        return view('livewire.location', $data);
    }
}
