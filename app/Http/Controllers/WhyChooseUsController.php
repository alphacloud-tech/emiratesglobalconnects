<?php

namespace App\Http\Controllers;

use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WhyChooseUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whychooses = WhyChooseUs::all();
        return view('pages.whychooseus.index', compact('whychooses'));
    }

    /**
     * Show the form for creating a new resource. title	image_url	icon	description
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'icon' => '',
            'description' => 'required',
            'image_url' => 'mage|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/whychooseus/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(1900, 900, function ($constraint) {
                    // $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $data['image_url'] = 'uploads/whychooseus/' . $imageName;
        }
        // dd($request->all());
        WhyChooseUs::create($data);

        return redirect()->route('why-choose-us.index')->with('success', 'Why Choose Us created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WhyChooseUs $why_choose_u)
    {

        // Validate the request data
        $data = $request->validate([
            'title' => '',
            'icon' => '',
            'description' => '',
            'image_url' => 'mage|mimes:jpeg,png,jpg,gif|max:2048',
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
            $imagePath = public_path('/uploads/whychooseus/');

            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(1900, 900, function ($constraint) {
                    // $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url'] = 'uploads/whychooseus/' . $imageName;
        }

        // Update the why_choose_u model with the validated data
        $why_choose_u->update($data);

        return redirect()->route('why-choose-us.index')->with('success', 'Why Choose Us updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhyChooseUs $why_choose_u)
    {
        // Check if an image is associated with the why_choose_u
        if ($why_choose_u->image_url) {
            // Get the path of the image
            $imagePath = public_path($why_choose_u->image_url);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $why_choose_u->delete();

        return redirect()->route('why-choose-us.index')->with('success', 'Why Choose Us deleted successfully');
    }


    public function activation(Request $request, WhyChooseUs $why_choose_us)
    {
        $active = $request->input('active'); // Get the featured status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the cause's featured status
        $why_choose_us->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
