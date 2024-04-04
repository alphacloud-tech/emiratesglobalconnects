<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;

class PropertyPage extends Component
{
    use WithPagination;
    // public $properties;
    public $perPage = 6;

    public function mount()
    {
        // $this->properties = Property::latest()
        //     ->with('detail', 'features')
        //     ->where('active', 1)
        //     ->paginate($this->perPage);

    }

    public function render()
    {
        $data = [
            'properties' => Property::latest()->with('detail', 'features')->where('active', 1)->paginate($this->perPage),
        ];

        return view('livewire.property-page', $data)->layout('livewire.property-page', $data);
    }
}
