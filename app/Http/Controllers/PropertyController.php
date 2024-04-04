<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Property;
use App\Models\PropertyDetail;
use App\Models\PropertyFeature;
use App\Models\SubImage;
use Illuminate\Http\Request;
use Image;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $features = PropertyFeature::latest() ->get();

        $properties = Property::latest() // Retrieve the latest project
            ->with('detail', 'features')
            ->get();

        return view('pages.property.index', compact('properties', 'features'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'title_1' => '',
            'price' => '',
            'category' => '',
            'location' => '',
            'property_area' => '',
            'lot_dimensions' => '',
            'lot_area' => '',
            'rooms' => '',
            'beds' => '',
            'baths' => '',
            'description' => '',
            'year_built' => '',
            'property_type' => '',

            'features.*' => 'required',
            'image_url.*' => 'required|image|max:1024',
            'image_url_light.*' => 'image|max:1024',
        ]);

        $imageUrl;

        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/property/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image 1900 1000
            $resizedImage = Image::make($imagePath . $imageName)
                ->resize(900, 700, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })// Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $imageUrl = 'uploads/property/' . $imageName;
        }

        $property = Property::create([
            'title' => $request->title_1,
            'description' => $request->description,
            'location' => $request->location,
            'category' => $request->category,
            'property_type' => $request->property_type,

            'image_url' => $imageUrl,

            'price' => $request->price,
        ]);


         // Store property details
        PropertyDetail::create([
            'property_id' => $property->id,
            'price' => $property->price,
            // 'property_area' => $request->property_area,
            'property_area' => $request->lot_area,
            'lot_area' => $request->lot_area,
            'home_area' => $request->property_area,
            'lot_dimensions' => $request->lot_dimensions,
            'rooms' => $request->rooms,
            'baths' => $request->baths,
            'beds' => $request->beds,
            // Add more fields as needed
        ]);

       // Attach selected features to the property
        $property->features()->attach($data['features']);

        foreach ($request->file('image_url_light') as $file) {
            $imageName = time() . '-' . $file->getClientOriginalName();
            $imagePath = public_path('/uploads/property/');

            // Move the uploaded image to the storage path
            if ($file->move($imagePath, $imageName)) {
                // Resize the image
                $resizedImage = Image::make($imagePath . $imageName)
                    ->resize(1900, 1000, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->save($imagePath . $imageName);

                if ($resizedImage) {
                    // Create a SubImage record
                    SubImage::create([
                        'property_id' => $property->id,
                        'image_url' => 'uploads/property/' . $imageName,
                    ]);
                } else {
                    // Log error or handle failure to resize image
                    Log::error('Failed to resize image: ' . $imageName);
                }
            } else {
                // Log error or handle failure to move image
               Log::error('Failed to move image: ' . $imageName);
            }
        }

        return redirect()->route('property.index')->with('success', 'Property created successfully');
    }


    public function update(Request $request, Project $project)
    {
        // Validate the request data
        $data = $request->validate([
            'title_1' => '',
            'title_2' => '',
            'image_url' => '',
            'client' => '',
            'category' => '',
            'description' => '',
            'project_icon' => '',
            'project_type' => '',
        ]);

        // dd($request->all());
        $old_img  = $request->old_img;

        // Check if a new image was uploaded
        if ($request->hasFile('image_url')) {

            // Delete the old image
            if (file_exists(public_path($old_img))) {
                unlink(public_path($old_img));
            }

            // Handle image upload and update (same as before)
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/project/');

            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->resize(1100, 755, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url'] = 'uploads/project/' . $imageName;
        }

        // Update the project model with the validated data
        $project->update($data);

        return redirect()->route('project.index')->with('success', 'Project updated successfully');
    }


    public function destroy(Project $project)
    {

        // Check if an image is associated with the project
        if ($project->image_url) {
            // Get the path of the image
            $imagePath = public_path($project->image_url);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $project->delete();

        return redirect()->route('project.index')->with('success', 'Project deleted successfully');
    }


    public function activation(Request $request, Property $property)
    {
        $active = $request->input('active'); // Get the featured status from the request
        // Log::debug("active status", ['active' => $active]);
        // Update the cause's featured status
        $property->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
