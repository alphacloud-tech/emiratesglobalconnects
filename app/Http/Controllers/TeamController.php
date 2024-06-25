<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Image;

class TeamController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $teams = Team::latest() // Retrieve the latest teams
            ->get();

        return view('pages.team.index', compact('teams'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image_url' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'biography' => 'required',
            'skills' => 'required',

            'facebook' => '',
            'youtube' => '',
            'instagram' => '',
            'twitter' => '',
            'linkedin' => '',
            'github' => '',
        ]);


        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/team/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(270, 330, function ($constraint) {
                    // $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $data['image_url'] = 'uploads/team/' . $imageName;

            // cause::create($data);
        }

        Team::create($data);

        return redirect()->route('team.index')->with('success', 'Team created successfully');
    }


    public function update(Request $request, Team $team)
    {
        // Validate the request data
        $data = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'biography' => 'required',
            'skills' => 'required',
            'image_url' => '',

            'facebook' => '',
            'youtube' => '',
            'instagram' => '',
            'twitter' => '',
            'linkedin' => '',
            'github' => '',
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
            $imagePath = public_path('/uploads/team/');

            $image->move($imagePath, $imageName);
            // ...


            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(270, 330, function ($constraint) {
                    // $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url'] = 'uploads/team/' . $imageName;
        }

        // Update the team model with the validated data
        $team->update($data);

        return redirect()->route('team.index')->with('success', 'Team updated successfully');
    }


    public function destroy(Team $team)
    {

        // Check if an image is associated with the team
        if ($team->image_url) {
            // Get the path of the image
            $imagePath = public_path($team->image_url);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $team->delete();

        return redirect()->route('team.index')->with('success', 'Team deleted successfully');
    }


    public function activation(Request $request, Team $team)
    {
        $active = $request->input('active'); // Get the featured status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the cause's featured status
        $team->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
