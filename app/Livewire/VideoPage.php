<?php

namespace App\Livewire;

// use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

use App\Models\Gallery;
use Livewire\Component;


class VideoPage extends Component
{

    use WithPagination;

    public function render()
    {
        return view('livewire.video-page')
            ->layout('livewire.video-page');
    }


}
