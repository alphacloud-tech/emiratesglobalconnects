<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Project2 extends Component
{
    public $projects;

    public function mount()
    {
        $this->projects = DB::table('galleries')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function render()
    {
        return view('livewire.project2', ['projects' => $this->projects,]);
    }
}
