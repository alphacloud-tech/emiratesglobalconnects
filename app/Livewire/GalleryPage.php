<?php

namespace App\Livewire;

// use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

use App\Models\Gallery;
use Livewire\Component;


class GalleryPage extends Component
{

    use WithPagination;

    public $perPage = 8; // Number of records per page

    public function render()
    {

        $data = ['galleries' =>  Gallery::latest()->where('active', 1)->paginate($this->perPage)];
        // $data = ['galleries' => Gallery::latest()->where('active', 1)->paginate($this->perPage)];
        // dd($data);

        return view('livewire.gallery-page', $data)
            ->layout('livewire.gallery-page', $data);
    }


}
