<?php

namespace App\Livewire;

use App\Models\Special as ModelsSpecial;
use Livewire\Component;

class Special extends Component
{
    public $specials;
    public function mount()
    {
        $this->specials = ModelsSpecial::where('active', 1)
            ->orderBy('title', 'ASC')
            ->get();
    }

    public function render()
    {
        $data = ['specials' => $this->specials,];
        return view('livewire.special', $data);
    }
}
