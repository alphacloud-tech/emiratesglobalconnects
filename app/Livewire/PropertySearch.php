<?php

namespace App\Livewire;

use Livewire\Component;

class PropertySearch extends Component
{
    public $propertyType;
    public $location;
    public $subLocation;


    public function render()
    {
        return view('livewire.property-search');
    }

    public function search()
    {
        // Start building the query to retrieve properties
        $query = Property::query()->with('detail', 'features');

        // Apply filters based on the selected parameters
        if ($this->propertyType) {
            $query->where('features.feature_name	', $this->propertyType);
        }
        if ($this->location) {
            $query->where('location', $this->location);
        }
        if ($this->subLocation) {
            $query->where('sub_location', $this->subLocation);
        }

        // Execute the query and get the search results
        $this->properties = $query->get();
    }
}
