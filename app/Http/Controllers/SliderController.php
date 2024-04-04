<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Image;

class SliderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sliders = Slider::all();
        return view('pages.slider.index', compact('sliders'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'video_url' => '',
            'description' => 'required',
            'slider_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('slider_image')) {
            $image = $request->file('slider_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/slider/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->resize(1900, 900, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $data['slider_image'] = 'uploads/slider/' . $imageName;

            // Slider::create($data);
        }
        // dd($request->all());
        Slider::create($data);

        return redirect()->route('slider.index')->with('success', 'Slider created successfully');
    }


    public function update(Request $request, Slider $slider)
    {

        // Validate the request data
        $data = $request->validate([
            'title' => 'required',
            'video_url' => '',
            'description' => 'required',
            'slider_image' => '',
        ]);


        $old_img  = $request->old_img;
        // dd($request->all());

        // Check if a new image was uploaded
        if ($request->hasFile('slider_image')) {
            // Delete the old image
            if (file_exists(public_path($old_img))) {
                unlink(public_path($old_img));
            }

            // Handle image upload and update (same as before)
            $image = $request->file('slider_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/slider/');

            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->resize(1900, 900, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['slider_image'] = 'uploads/slider/' . $imageName;
        }

        // Update the slider model with the validated data
        $slider->update($data);

        return redirect()->route('slider.index')->with('success', 'Slider updated successfully');
    }


    public function destroy(Slider $slider)
    {
        // Check if an image is associated with the slider
        if ($slider->slider_image) {
            // Get the path of the image
            $imagePath = public_path($slider->slider_image);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $slider->delete();

        return redirect()->route('slider.index')->with('success', 'Slider deleted successfully');
    }


    public function activation(Request $request, Slider $slider)
    {
        $active = $request->input('active'); // Get the featured status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the cause's featured status
        $slider->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
