<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SkillRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillsController extends Controller
{
    public function skills()
    {
        $skills = Skill::all();
        return view('admin.skillManagement', compact('skills'));
    }

    public function create(SkillRequest $request)
    {
        Skill::create([
            'user_id' => 3,
            'title' => $request['skill_name'],
            'description' => $request['description'],
        ]);
        return back()->with('success', 'مهارت با موفقیت ایجاد شد.');
    }

    public function delete($skill_id)
    {
        $skill = Skill::find($skill_id);
        $skill->delete();
        return back()->with('success', 'مهارت با موفقیت حذف شد.');
    }

    public function edit($skill_id)
    {
        $skill = Skill::find($skill_id);
        return view('admin.skillManagement', compact('skill'));
    }

    public function update(UpdateRequest $request, $skill_id)
    {
       dd($request, $skill_id);
    }
}

