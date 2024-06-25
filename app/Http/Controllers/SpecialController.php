<?php

namespace App\Http\Controllers;

use App\Models\Special;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SpecialController extends Controller
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
        $specials = Special::all();
        return view('pages.special.index', compact('specials'));
    }

    /**
     * Show the form for creating a new resource.
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
        ]);

        // dd($request->all());
        Special::create($data);

        return redirect()->route('special.index')->with('success', 'What Make Us Special created successfully');
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
    public function update(Request $request, Special $special)
    {

        // Validate the request data
        $data = $request->validate([
            'title' => '',
            'icon' => '',
            'description' => '',
        ]);

        // Update the why_choose_u model with the validated data
        $special->update($data);

        return redirect()->route('special.index')->with('success', 'What Make Us Special updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Special $special)
    {
        // Delete the resource from the database
        $special->delete();

        return redirect()->route('special.index')->with('success', 'What Make Us Special deleted successfully');
    }


    public function activation(Request $request, Special $special)
    {
        $active = $request->input('active'); // Get the featured status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the cause's featured status
        $special->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
