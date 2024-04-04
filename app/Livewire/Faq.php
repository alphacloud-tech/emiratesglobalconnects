<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Faq extends Component
{

    protected $setting;
    public $faqs;

    public function mount()
    {

        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();

        $this->faqs = DB::table('faqs')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
    }


    public function render()
    {
        $data = [
            'setting' => $this->setting,
            'faqs' => $this->faqs,
        ];
        return view('livewire.faq', $data);
    }
}
