<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TeamDetailPage extends Component
{
    protected $team;
    protected  $setting;

    public function mount($name)
    {

        $name = strtolower(str_replace('-', ' ', $name));

        $teamId = DB::table('teams')
            ->where('name', $name)
            ->first();

        $this->team = DB::table('teams')
            ->where('active', 1)
            ->where('teams.id', $teamId->id)
            ->first();

        // Initialize other properties here...

        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();
    }

    public function render()
    {
        // dd($this->blog);

        $data = [
            'setting' => $this->setting,
            'team' => $this->team,
        ];
        return view('livewire.team-detail-page', $data)
            ->layout('livewire.team-detail-page', $data);
    }
}
