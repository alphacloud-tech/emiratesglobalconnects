<?php

namespace App\Livewire;

use App\Models\Property as ModelsProperty;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Property extends Component
{
    public $properties;

    public function mount()
    {
        $this->properties = ModelsProperty::latest()
            ->with('detail')
            ->where('active', 1)
            ->get();

    }

    public function render()
    {
        return view('livewire.property', ['properties' => $this->properties,]);
    }
}
