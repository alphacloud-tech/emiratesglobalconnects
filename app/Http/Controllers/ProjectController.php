<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Image;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $projects = Project::latest() // Retrieve the latest project
            ->get();

        return view('pages.project.index', compact('projects'));
    }


    public function store(Request $request)
    {

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

        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/project/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->resize(1100, 755, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $data['image_url'] = 'uploads/project/' . $imageName;

            // cause::create($data);
        }

        Project::create($data);

        return redirect()->route('project.index')->with('success', 'Project created successfully');
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


    public function activation(Request $request, Project $project)
    {
        $active = $request->input('active'); // Get the featured status from the request
        // Log::debug("active status", ['active' => $active]);
        // Update the cause's featured status
        $project->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
