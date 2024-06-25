<?php

namespace App\Livewire;

use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Project2 extends Component
{
    public $projects;
    public $service;
    public $id;
    public $check;
    public $services;

    public function mount($id)
    {
        $this->projects = Gallery::with('service')
            ->where('service_id', $this->id)
            ->where('active', 1)
            ->orderBy('service_id', 'asc')
            ->get();

        $this->check = Gallery::where('service_id', $this->id)->first();

        $this->service = DB::table('services')
            ->where('id', $this->id)
            ->where('active', 1)
            ->first();

        $this->services = DB::table('services')
            // ->where('service_id', $this->id)
            ->where('active', 1)
            ->orderBy('id', 'desc')
            // ->take(5)
            ->get();
    }

    public function render()
    {
        $data = [
            'projects' => $this->projects,
            'service' => $this->service,
            'check' => $this->check,
            'services' => $this->services,
        ];

        // dd($data);
        return view('livewire.project2', $data);
    }
}
