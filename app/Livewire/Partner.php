<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Partner extends Component
{

    public $partners;

    public function mount()
    {
        // Fetch your top partner data from the database
        $this->partners = DB::table('partners')->get();
    }

    public function render()
    {
        return view('livewire.partner');
    }
}
