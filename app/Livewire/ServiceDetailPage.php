<?php

namespace App\Livewire;

use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ServiceDetailPage extends Component
{
    public $service;
    public $services;
    protected  $setting;

    public function mount($title)
    {

        $name = strtolower(str_replace('-', ' ', $title));

        $serviceId = DB::table('services')
            ->where('title', $name)
            ->first();


        $this->service = Service::latest()
            ->with('subimages')
            ->where('active', 1)
            ->where('id', $serviceId->id)
            ->first();

        $this->services = Service::latest()
            ->with('subimages')
            ->where('active', 1)
            ->get();

        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();
    }

    public function render()
    {
        // dd($this->blog);

        $data = [
            'setting' => $this->setting,
            'service' => $this->service,
            'services' => $this->services,
        ];
        return view('livewire.service-detail-page', $data)
            ->layout('livewire.service-detail-page', $data);
    }
}
