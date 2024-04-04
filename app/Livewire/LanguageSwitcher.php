<?php

namespace App\Livewire;

use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $language;

    public function mount()
    {
        $this->language = app()->getLocale();
    }

    public function updatedLanguage()
    {
        app()->setLocale($this->language);
        session()->put('locale', $this->language);
    }

    public function render()
    {
        return view('livewire.language-switcher');
    }
}
