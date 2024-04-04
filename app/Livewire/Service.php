<?php

namespace App\Livewire;

use App\Models\Service as ModelsService;
use Livewire\Component;

class Service extends Component
{
    public $services;

    public function mount()
    {

        $this->services = ModelsService::latest()
            ->with('subimages')
            ->where('active', 1)
            ->get();
    }

    public function render()
    {
        return view('livewire.service', ['services' => $this->services,]);
    }
}
