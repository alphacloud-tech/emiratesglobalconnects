<?php

namespace App\Http\Controllers;

use App\Models\OurTechnology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Image;

class OurTechnologyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $technologies = OurTechnology::latest() // Retrieve the latest gallery
            ->get();

        return view('pages.technology.index', compact('technologies'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'image_url_dark' => '',
            'image_url_light' => '',
        ]);

        if ($request->hasFile('image_url_dark')) {
            $image = $request->file('image_url_dark');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/technology/dark/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(452, 128, function ($constraint) {
                    // $constraint->aspectRatio();
                    $constraint->upsize();
                })// Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $data['image_url_dark'] = 'uploads/technology/dark/' . $imageName;
        }

        if ($request->hasFile('image_url_light')) {
            $image = $request->file('image_url_light');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/technology/light/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // fit the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->resize(452, 128, function ($constraint) {
                    // $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $data['image_url_light'] = 'uploads/technology/light/' . $imageName;
        }
        OurTechnology::create($data);
        return redirect()->route('technology.index')->with('success', 'Our technology created successfully');
    }


    public function update(Request $request, OurTechnology $technology)
    {

        // Validate the request data
        $data = $request->validate([
            'name' => '',
            'image_url_dark' => '',
            'image_url_light' => '',
        ]);

        // dd($data);
        $old_img1  = $request->old_img1;
        $old_img2  = $request->old_img2;

        // Check if a new image was uploaded
        if ($request->hasFile('image_url_dark')) {
            // Delete the old image
            if (file_exists(public_path($old_img1))) {
                unlink(public_path($old_img1));
            }

            // Handle image upload and update (same as before)
            $image = $request->file('image_url_dark');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/technology/dark/');

            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(452, 128, function ($constraint) {
                    // $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url_dark'] = 'uploads/technology/dark/' . $imageName;
        }

        if ($request->hasFile('image_url_light')) {
            // Delete the old image
            if (file_exists(public_path($old_img2))) {
                unlink(public_path($old_img2));
            }

            // Handle image upload and update (same as before)
            $image = $request->file('image_url_light');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/technology/light/');

            $image->move($imagePath, $imageName);
            // ...


            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(452, 128, function ($constraint) {
                    // $constraint->aspectRatio();
                    $constraint->upsize();
                })// Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url_light'] = 'uploads/technology/light/' . $imageName;
        }

        // Update the technology model with the validated data
        $technology->update($data);

        return redirect()->route('technology.index')->with('success', 'Our technology updated successfully');
    }


    public function destroy(Service $technology)
    {

        // Check if an image is associated with the event
        if ($technology->image_url_dark) {
            // Get the path of the image
            $imagePath = public_path($technology->image_url_dark);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        if ($technology->image_url_light) {
            // Get the path of the image
            $imagePath = public_path($technology->image_url_light);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $technology->delete();

        return redirect()->route('technology.index')->with('success', 'Our technology deleted successfully');
    }


    public function activation(Request $request, OurTechnology $technology)
    {
        $active = $request->input('active'); // Get the active status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the service's active status
        $technology->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
