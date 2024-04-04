<?php

namespace App\Livewire;

use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RecentProject extends Component
{
    public $galleries;

    public function mount()
    {
        $this->galleries = Gallery::latest() // Retrieve the latest gallery
            ->where('active', 1)
            ->get();
    }

    public function render()
    {
        return view('livewire.recent-project', ['galleries' => $this->galleries,]);
    }
}
