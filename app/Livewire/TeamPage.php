<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class TeamPage extends Component
{

    use WithPagination;

    protected  $setting;
    public $perPage = 8;



    public function mount()
    {

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
            'teams' => DB::table('teams')->where('active', 1)->paginate($this->perPage),
        ];
        return view('livewire.team-page', $data)
            ->layout('livewire.team-page', $data);
    }
}
