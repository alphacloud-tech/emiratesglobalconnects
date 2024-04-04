<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Image;

class AboutUsContoller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $abouts = AboutUs::latest() // Retrieve the latest about
            ->get();

        return view('pages.about.index', compact('abouts'));
    }



    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_url' => 'required',
            'content_short' => '',
            'coy_yr_exp' => '',
        ]);


        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/about/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->resize(570, 542, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $data['image_url'] = 'uploads/about/' . $imageName;
        }

        AboutUs::create($data);

        return redirect()->route('about.index')->with('success', 'About us created successfully');
    }


    public function update(Request $request, AboutUs $about)
    {
        // Validate the request data
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_url' => '',
            'content_short' => '',
            'coy_yr_exp' => '',
        ]);


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
            $imagePath = public_path('/uploads/about/');

            $image->move($imagePath, $imageName);
            // ...


            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->resize(570, 542, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url'] = 'uploads/about/' . $imageName;
        }

        // Update the about model with the validated data
        $about->update($data);

        return redirect()->route('about.index')->with('success', 'About us updated successfully');
    }


    public function destroy(AboutUs $about)
    {

        // Check if an image is associated with the about
        if ($about->image_url) {
            // Get the path of the image
            $imagePath = public_path($about->image_url);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $about->delete();

        return redirect()->route('about.index')->with('success', 'About us deleted successfully');
    }

    public function activation(Request $request, AboutUs $about)
    {
        $active = $request->input('active'); // Get the featured status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the cause's featured status
        $about->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
