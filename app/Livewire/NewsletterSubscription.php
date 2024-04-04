<?php

namespace App\Livewire;

use App\Models\Subscriber;
use Livewire\Component;

class NewsletterSubscription extends Component
{
    public $email;

    public function subscribe()
    {
        $this->validate([
            'email' => 'required|email|unique:subscribers',
        ]);

        Subscriber::create([
            'email' => $this->email,
        ]);

        // session()->flash('success', 'Thank you for subscribing!');

        $this->email = '';

        // Display toast notification
        $this->dispatch('showSuccessToast', ['message' => 'Thank you for subscribing!']);
    }

    public function render()
    {
        return view('livewire.newsletter-subscription');
    }
}
