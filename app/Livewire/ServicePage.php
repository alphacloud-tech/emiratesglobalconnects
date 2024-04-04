<?php

namespace App\Livewire;

use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ServicePage extends Component
{
    use WithPagination;
    protected  $setting;
    // Add other data properties here...
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
        $data = [
            'setting' => $this->setting,
            'services' => Service::where('active', 1)->orderBy('created_at', 'desc')->paginate($this->perPage)
        ];

        return view('livewire.service-page', $data)
            ->layout('livewire.service-page', $data);
    }
}
