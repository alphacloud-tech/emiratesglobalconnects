<?php

namespace App\Livewire;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormSubmitted;
use App\Models\Complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;



class ContactPage extends Component
{
    protected $setting;

    public function mount()
    {
        $this->setting = DB::table('settings')
            ->where('id', 1)
            ->first();
    }

    public function render()
    {
        return view('livewire.contact-page', ['setting' => $this->setting])
            ->layout('livewire.contact-page', ['setting' => $this->setting]);
    }


}
