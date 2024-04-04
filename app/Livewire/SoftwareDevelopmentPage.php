<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SoftwareDevelopmentPage extends Component
{

    protected  $setting;
    public  $projects;

    public function mount()
    {
        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();

        $this->projects = DB::table('projects')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
    }


    public function render()
    {
        $data = [
            'setting' => $this->setting,
            'projects' => $this->projects,
            // 'teams' => $this->teams,
            // 'abouts' => $this->abouts,
        ];

        return view('livewire.software-development-page', $data)
            ->layout('livewire.software-development-page', $data);
    }
}
