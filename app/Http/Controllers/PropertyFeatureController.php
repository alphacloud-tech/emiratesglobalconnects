<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyFeature;
use Illuminate\Http\Request;

class PropertyFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = PropertyFeature::latest()->get();
        return view('pages.property.feature.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'feature_name' => 'required',
            'dimension' => 'required',
        ]);

        PropertyFeature::create($data);

        return redirect()->route('feature.index')->with('success', 'Property Feature created successfully');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyFeature $feature)
    {
       // Validate the request data
       $data = $request->validate([
            'feature_name' => '',
            'dimension' => '',
        ]);

        // Update the Blog category model with the validated data
        $feature->update($data);

        return redirect()->route('feature.index')->with('success', 'Property Feature updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyFeature $feature)
    {
        // Delete the resource from the database
        $feature->delete();

        return redirect()->route('feature.index')->with('success', 'Property Feature deleted successfully');
    }
}
