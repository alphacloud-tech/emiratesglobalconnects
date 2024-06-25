<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\SubImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Image;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $services = Service::latest() // Retrieve the latest gallery
            ->with('subimages')
            ->get();

        return view('pages.service.index', compact('services'));
    }


    public function store(Request $request)
    {

        // dd($request->all());
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'color' => '',
            'image_url_dark' => 'required|image|max:1024', // Validate main image
            'image_url_light.*' => 'image|max:1024',
            'route' => '',
        ]);


        // dd($data);

        if ($request->hasFile('image_url_dark')) {
            $image = $request->file('image_url_dark');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // dd($image);
            $imagePath = public_path('/uploads/service/dark/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(370, 400, function ($constraint) {
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);


            // Save the image path in the database
            $data['image_url_dark'] = 'uploads/service/dark/' . $imageName;
            $data['image_url_light'] = 'uploads/service/dark/' . $imageName;
        }

        $service = Service::create($data);

        foreach ($request->file('image_url_light') as $file) {
            $imageName = time() . '-' . $file->getClientOriginalName();
            $imagePath = public_path('/uploads/service/light/');

            // Move the uploaded image to the storage path
            if ($file->move($imagePath, $imageName)) {
                // Resize the image
                $resizedImage = Image::make($imagePath . $imageName)
                    ->fit(370, 185, function ($constraint) {
                        $constraint->upsize();
                    })
                    ->save($imagePath . $imageName);

                if ($resizedImage) {
                    // Create a SubImage record
                    SubImage::create([
                        'service_id' => $service->id,
                        'image_url' => 'uploads/service/light/' . $imageName,
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

        return redirect()->route('service.index')->with('success', 'service created successfully');
    }


    public function update(Request $request, Service $service)
    {
        // dd($request->all());
        // Validate the request data
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'color' => '',
            'image_url_dark' => 'image|max:1024', // Validate main image
            'image_url_light.*' => 'image|max:1024',
            'route' => '',
        ]);

        // dd($data);
        $old_img1  = $request->old_img1;
        $old_img2  = $request->old_img2;

        // Check if a new image was uploaded
        if ($request->hasFile('image_url_dark')) {

            // Handle image upload and update (same as before)
            $image = $request->file('image_url_dark');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/service/dark/');

            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(370, 400, function ($constraint) {
                    // $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url_dark'] = 'uploads/service/dark/' . $imageName;

            if ($service->image_url_dark) {
                unlink(public_path($service->image_url_dark));
            }
        }

        // Update the service model with the validated data
        $service->update($data);

        // Update or create subimages
        if ($request->hasFile('image_url_light')) {
            $oldImageUrls = $service->subimages()->pluck('image_url')->toArray();

            $service->subimages()->delete();

            foreach ($request->file('image_url_light') as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $imagePath = public_path('/uploads/service/light/');

                // Move the uploaded image to the storage path
                $file->move($imagePath, $imageName);

                // Resize the image
                $resizedImage = Image::make($imagePath . $imageName)
                    ->fit(370, 185, function ($constraint) {
                        $constraint->upsize();
                    }) // Adjust the dimensions as needed
                    ->save($imagePath . $imageName);

                // Update or create SubImage record
                SubImage::create(
                    [
                        'service_id' => $service->id, 'image_url' => 'uploads/service/light/' . $imageName,
                        'service_id' => $service->id,
                    ],
                );
            }

            // Unlink old images associated with SubImage model
            foreach ($oldImageUrls as $oldImageUrl) {
                File::delete(public_path($oldImageUrl));
            }
        }

        return redirect()->route('service.index')->with('success', 'service updated successfully');
    }


    public function destroy(Service $service)
    {

        $oldImageUrls = $service->subimages()->pluck('image_url')->toArray();

        // Check if an image is associated with the event
        if ($service->image_url_dark) {
            // Get the path of the image
            $imagePath = public_path($service->image_url_dark);
            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $service->delete();

        // Unlink old images associated with SubImage model
        foreach ($oldImageUrls as $oldImageUrl) {
            File::delete(public_path($oldImageUrl));
        }



        return redirect()->route('service.index')->with('success', 'service deleted successfully');
    }


    public function activation(Request $request, Service $service)
    {
        $active = $request->input('active'); // Get the active status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the service's active status
        $service->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }


    public function destroy2($id)
    {

        $subimage = SubImage::find($id);

        // dd($id);

        // Check if an image is associated with the slider
        if ($subimage) {
            // Get the path of the image
            $imagePath = public_path($subimage->image_url);

            // dd($imagePath);


            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $subimage->delete();

        return redirect()->route('service.index')->with('success', 'Image deleted successfully');
    }
}
