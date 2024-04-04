<?php

namespace App\Livewire;

use App\Models\Property;
use App\Models\Slider as ModelsSlider;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Slider extends Component
{
    protected $sliders;
    public $propertyType;
    public $location;
    public $subLocation;
    public $properties; // Property to store search results
    public $showModal = false; // State variable to control the modal

    public function mount()
    {
        // $this->sliders = DB::table('sliders')
        //     ->where('active', 1)
        //     ->first();

        $this->sliders = ModelsSlider::latest()
            ->where('active', 1)
            ->get();
    }

    public function render()
    {
        // dd($this->sliders);
        return view('livewire.slider', ['sliders' => $this->sliders,]);
    }


    public function search()
    {
        // dd($this->showModal);
        // Start building the query to retrieve properties
        $query = Property::query();

        // Apply filters based on the selected parameters
        if ($this->propertyType) {
            $query->where('property_type', $this->propertyType);
            dd($this->properties);
        }
        if ($this->location) {
            $query->where('location', $this->location);
        }
        if ($this->subLocation) {
            $query->where('sub_location', $this->subLocation);
        }

        // Execute the query and get the search results
        $this->properties = $query->get();

        // Redirect to another page with search parameters in the URL
        // return redirect()->route('property.page', [
        //     'propertyType' => $this->propertyType,
        //     'location' => $this->location,
        //     'subLocation' => $this->subLocation
        // ]);

        // Show the modal
        $this->showModal = true;
        dd($this->showModal);
        // Emit an event to inform the parent component
        // $this->dispatch('searchCompleted');
        $this->dispatch('show-verification-modal')->to(PropertySearch::class);
        // $this->dispatch('show-verification-modal');


    }

    public function closeModal()
    {
        // Close the modal
        $this->showModal = false;
    }
}
