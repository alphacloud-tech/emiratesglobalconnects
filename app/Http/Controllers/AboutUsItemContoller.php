<?php

namespace App\Http\Controllers;

use App\Models\AboutUsItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AboutUsItemContoller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $aboutItems = AboutUsItem::latest() // Retrieve the latest about
            ->get();

        // return response()->json(['data' => $aboutItems]);
        return view('pages.about.item.index', compact('aboutItems'));
    }



    public function store(Request $request)
    {

        $data = $request->validate([
            'bar_title' => 'required',
            'bar_percent' => 'required',
            'bar_bg_color' => 'required',
        ]);

        $aboutItem = AboutUsItem::create($data);

        return response()->json(['data' => $aboutItem, 'success' => 'About us item created successfully']);
        // return redirect()->route('about.index')->with('success', 'About us item created successfully');
    }


    public function update(Request $request, AboutUsItem $about_us_item)
    {
        // Validate the request data
        $data = $request->validate([
            'bar_title' => '',
            'bar_percent' => '',
            'bar_bg_color' => '',
        ]);

        // Update the about model with the validated data
        $about_us_item->update($data);
        return redirect()->route('about-us-item.index')->with('success', 'About us item updated successfully');
    }


    public function destroy(AboutUsItem $about_us_item)
    {
        // Delete the resource from the database
        $about_us_item->delete();

        return redirect()->route('about-us-item.index')->with('success', 'About us item deleted successfully');
    }

    public function activation(Request $request, AboutUsItem $about_us_item)
    {
        $active = $request->input('active'); // Get the featured status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the cause's featured status
        $about_us_item->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
