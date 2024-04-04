<?php

namespace App\Livewire;

use App\Models\OurTechnology as ModelsOurTechnology;
use Livewire\Component;

class OurTechnology extends Component
{
    public $technologies;

    public function mount()
    {
        // Fetch your top partner data from the database
        $this->technologies = ModelsOurTechnology::all()
            ->where('active', 1);
        // ->get();
    }

    public function render()
    {
        return view('livewire.our-technology');
    }
}
