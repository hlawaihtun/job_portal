<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobseekerExperience;
use App\BusinessType;
use App\JobPosition;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class JobseekerExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jsexperiences = JobseekerExperience::all();
        return view('jobseekers.experiences.index',compact('jsexperiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        /*$user_obj = Auth::user()->jobseeker->id;
        $sd_carbon = new Carbon($user_obj->experience->start_date);
        $user_obj->experience->dob = $sd_carbon->format(' d  F Y');*/

        $businesstypes = BusinessType::all();
        $jobpositions = JobPosition::all();
        return view('jobseekers.experiences.create',compact('businesstypes','jobpositions'));
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
            'sdate' => 'required|date',
            'edate' => 'required|date|after:start_date',
            'jobposition' => 'required',
            'businesstype' => 'required',
            'isactive' => 'required',
        ]);

        //Store Data

        $experience = new JobseekerExperience;
        $experience->company_name = $request->name;
        $experience->start_date = $request->sdate;
        $experience->end_date = $request->edate;
        $experience->job_position_id = $request->jobposition;
        $experience->business_type_id = $request->businesstype;
        $experience->is_active = $request->isactive;
        $experience->jobseeker_id = Auth::user()->jobseeker->id;
        $experience->save();

        return redirect()->route('jsexperiences.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('jobseekers.experiences.show');
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
        $experience = JobseekerExperience::find($id);
        $businesstypes = BusinessType::all();
        $jobpositions = JobPosition::all();
        return view('jobseekers.experiences.edit',compact('experience','businesstypes','jobpositions'));

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
            'sdate' => 'required|date',
            'edate' => 'required|date|after:start_date',
            'jobposition' => 'required',
            'businesstype' => 'required',
            'isactive' => 'required',
        ]);

        //Update Data

        $experience = JobseekerExperience::find($id);
        $experience->company_name = $request->name;
        $experience->start_date = $request->sdate;
        $experience->end_date = $request->edate;
        $experience->job_position_id = $request->jobposition;
        $experience->business_type_id = $request->businesstype;
        $experience->is_active = $request->isactive;
        $experience->jobseeker_id = Auth::user()->jobseeker->id;
        $experience->save();
        return redirect()->route('jsexperiences.create');
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
        $experience = JobseekerExperience::find($id);
        $experience->delete();
        return redirect()->route('jsexperiences.create');
    }
}
