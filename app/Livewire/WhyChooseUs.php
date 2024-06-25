<?php

namespace App\Livewire;

use App\Models\WhyChooseUs as ModelsWhyChooseUs;
use Livewire\Component;

class WhyChooseUs extends Component
{

    public $whychooses;
    public function mount()
    {
        $this->whychooses = ModelsWhyChooseUs::where('active', 1)
            ->orderBy('title', 'ASC')
            ->get();
    }

    public function render()
    {
        $data = ['whychooses' => $this->whychooses,];

        return view('livewire.why-choose-us', $data);
    }
}
