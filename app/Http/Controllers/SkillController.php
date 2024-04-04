<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\SkillPercent;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $skills = Skill::latest() // Retrieve the latest Skill
            ->with('skillPercent') // Eager load the related skillPercents
            ->get();
        $percents = SkillPercent::all();

        // dd($percents);
        // dd($skills);
        return view('pages.team.skill.index', compact('skills', 'percents'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'skill_percent_id' => 'required',
        ]);
        Skill::create($data);

        return redirect()->route('skills.index')->with('success', 'Skill created successfully');
    }


    public function update(Request $request, Skill $skill)
    {
        // Validate the request data
        $data = $request->validate([
            'name' => 'required',
            'skill_percent_id' => '',
        ]);

        // Update the Blog category model with the validated data
        $skill->update($data);

        return redirect()->route('skills.index')->with('success', 'Skill updated successfully');
    }


    public function destroy(Skill $skill)
    {
        // Delete the resource from the database
        $skill->delete();

        return redirect()->route('skills.index')->with('success', 'Skill deleted successfully');
    }
}
