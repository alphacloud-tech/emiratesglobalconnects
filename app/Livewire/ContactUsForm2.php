<?php

namespace App\Livewire;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormSubmitted;
use App\Models\Complain;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactUsForm2 extends Component
{

    public $fullname;
    public $email;
    public $message;
    public $phone;
    public $website;

    protected $messages = [
        'fullname.required' => 'Name field is required.', // Custom error message for required email
        'email.required' => 'Email field is required.', // Custom error message for required email
        'message.required' => 'Message field is required.', // Custom error message for required email
        'phone.required' => 'Phone field is required.', // Custom error message for required email
        // Add custom error messages for other fields and rules as needed
    ];

    public function rules()
    {

        return (new ContactFormRequest())->rules();
    }

    public function update($propertiesName)
    {
        $this->validate($propertiesName);
    }



    public function submitForm()
    {

        // Validate the form fields
        $validated = $this->validate();

        // Create a Complain model instance and save it to the database
        Complain::create([
            'fullname' => $this->fullname,
            'email' => $this->email,
            'message' => $this->message,
            'phone' => $this->phone,
            'website' => $this->website,
        ]);


        // Send email
        Mail::to(env('CONTACTUS'))->send(new ContactFormSubmitted($validated));

        // Reset form fields after submission
        $this->reset();


        // Show a success message
        session()->flash('message', 'Thanks for contacting us, we will get back to you soon.');

    }

     public function render()
    {
        return view('livewire.contact-us-form2');
    }
}
