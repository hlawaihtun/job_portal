<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobseekerSkill;
use App\Skill;
use Illuminate\Support\Facades\Auth;

class JsSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jsskills = JobseekerSkill::all();
        return view('jobseekers.jsskills.index',compact('jsskills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $skills = Skill::all();
        return view('jobseekers.jsskills.create',compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'skill' => 'required',
        ]);

        $jsskill = new JobseekerSkill;
        $jsskill->name = $request->name;
        $jsskill->skill_id = $request->skill;
        $jsskill->jobseeker_id = Auth::user()->jobseeker->id;
        $jsskill->save();

        return redirect()->route('jsskills.create');
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
        $jsskill = JobseekerSkill::find($id);
        $skills = Skill::all();

        return view('jobseekers.jsskills.edit',compact('jsskill','skills'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $request->validate([
            'name' => 'required',
            'skill' => 'required',
        ]);

        $jsskill = JobseekerSkill::find($id);
        $jsskill->name = $request->name;
        $jsskill->skill_id = $request->skill;
        $jsskill->jobseeker_id = Auth::user()->jobseeker->id;
        $jsskill->save();

        return redirect()->route('jsdetail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jsskill = JobseekerSkill::find($id);
        $jsskill -> delete();
        return redirect()->route('jsdetail');
    }
}
