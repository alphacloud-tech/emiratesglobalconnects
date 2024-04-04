<?php

namespace App\Livewire;

use App\Models\Gallery;
use App\Models\Property;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PropertyDetailPage extends Component
{
    public $property;
    public $properties;
    public $galleries;
    public $blogs;
    protected  $setting;

    public function mount($title)
    {

        $name = strtolower(str_replace('-', ' ', $title));

        $propertiesId = DB::table('properties')
            ->where('title', $name)
            ->first();


        $this->property =  Property::latest()
            ->with('detail', 'features', 'subimages')
            ->where('active', 1)
            ->where('id', $propertiesId->id)
            ->first();

        $this->properties = Property::latest()
            ->with('detail', 'features')
            ->where('active', 1)
            ->take(6)
            ->get();

        $this->setting =  DB::table('settings')
            ->where('id', 1)
            ->first();

        $this->galleries = Gallery::latest()
            ->where('active', 1)
            ->take(4)
            ->get();

        $this->blogs = DB::table('blog_posts')
            ->join('categories', 'blog_posts.category_id', '=', 'categories.id')
            ->select('blog_posts.*', 'categories.name as category_name')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
    }

    public function render()
    {
        $data = [
            'setting' => $this->setting,
            'property' => $this->property,
            'properties' => $this->properties,
            'galleries' => $this->galleries,
            'blogs' => $this->blogs,
        ];

        // dd($this->property->features);
        return view('livewire.property-detail-page', $data)->layout('livewire.property-detail-page', $data);
    }
}
