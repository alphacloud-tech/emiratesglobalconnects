<?php

namespace App\Livewire;

use App\Models\Gallery as ModelsGallery;
use Livewire\Component;

class Gallery extends Component
{
    public $galleries;

    public function mount()
    {

        $this->galleries = ModelsGallery::latest() // Retrieve the latest gallery
            ->where('active', 1)
            ->get();
    }

    public function render()
    {
        return view('livewire.gallery', ['galleries' => $this->galleries,]);
    }
}
