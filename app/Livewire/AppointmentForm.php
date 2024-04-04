<?php

namespace App\Livewire;

use App\Http\Requests\AppointmentFormRequest;
use App\Mail\AppointmentFormSubmitted;
use App\Mail\ContactFormSubmitted;
use App\Models\Complain;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class AppointmentForm extends Component
{

    public $fullname;
    public $email;
    public $phone;
    public $website;




    public function rules()
    {

        return (new AppointmentFormRequest())->rules();
    }

    public function update($propertiesName)
    {
        $this->validate($propertiesName);
    }

    public function render()
    {
        return view('livewire.appointment-form');
    }

    public function submitAppointmentForm()
    {

        // Validate the form fields
        $validated = $this->validate();

        // Create a Complain model instance and save it to the database
        Complain::create([
            'fullname' => $this->fullname,
            'email' => $this->email,
            // 'message' => $this->message,
            'phone' => $this->phone,
            'website' => $this->website,
        ]);


        // Send email
        Mail::to('adesanjo470@gmail.com')->send(new AppointmentFormSubmitted($validated));

        // Reset form fields after submission
        $this->reset();


        // Show a success message
        session()->flash('message', 'Thank you for reaching out to us. We have received your appointment form submission and will get back to you as soon as possible.');
    }
}
