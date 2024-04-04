<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\SkillPercent;
use Illuminate\Http\Request;

class SkillPercentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $skillPercents = SkillPercent::all();
        return view('pages.team.percent.index', compact('skillPercents'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'percentage' => 'required',
        ]);
        SkillPercent::create($data);

        return redirect()->route('percents.index')->with('success', 'Skill percentage created successfully');
    }


    public function update(Request $request, SkillPercent $percent)
    {
        // Validate the request data
        $data = $request->validate([
            'percentage' => 'required',
        ]);

        // Update the Blog category model with the validated data
        $percent->update($data);

        return redirect()->route('percents.index')->with('success', 'Skill percentage updated successfully');
    }


    public function destroy(SkillPercent $percent)
    {
        // Delete the resource from the database
        $percent->delete();

        return redirect()->route('percents.index')->with('success', 'Skill percentage deleted successfully');
    }
}
