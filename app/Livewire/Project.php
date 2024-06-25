<?php

namespace App\Livewire;

use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Project extends Component
{
    public $projects;
    public $service;
    public $id;
    public $check;

    public function mount($id)
    {
        $this->projects = Gallery::with('service')
            ->where('service_id', $this->id)
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $this->check = Gallery::where('service_id', $this->id)->first();

        $this->service = DB::table('services')
            ->where('id', $this->id)
            ->where('active', 1)
            ->first();

        // $this->checkcheck = DB::table('galleries')
        //     ->where('service_id', $this->id)
        //     ->where('active', 1)
        //     ->first();
    }

    public function render()
    {
        $data = [
            'projects' => $this->projects,
            'service' => $this->service,
            'check' => $this->check,
        ];

        // dd($data);
        return view('livewire.project', $data);
    }
}
