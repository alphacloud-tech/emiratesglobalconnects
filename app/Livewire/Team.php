<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Team extends Component
{
    public $teams;

    public function mount()
    {
        $this->teams = DB::table('teams')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
    }
    public function render()
    {
        return view('livewire.team', ['teams' => $this->teams,]);
    }
}
