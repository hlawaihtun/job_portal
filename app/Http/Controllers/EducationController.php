<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobseekerDetail;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $educations = JobseekerDetail::all();
        return view('jobseekers.educations.index',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('jobseekers.educations.create');
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
            'institute'=>'required',
            'qualification_level'=>'required',
            'graduation_date'=>'required',
            'specialization_major'=>'required',
            'nationality'=>'required',
            'additional_info'=>'required',
        ]);

        $education = new JobseekerDetail;
        $education->institute = $request->institute; 
        $education->qualification_level = $request->qualification_level; 
        $education->graduation_date = $request->graduation_date; 
        $education->specialization_major = $request->specialization_major; 
        $education->nationality = $request->nationality; 
        $education->additional_info = $request->additional_info;
        $education->jobseeker_id = Auth::user()->jobseeker->id;
        $education->save();

        return redirect()->route('jseducations.create'); 
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
        $education = JobseekerDetail::find($id);
        return view('jobseekers.educations.edit',compact('education'));

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
            'institute'=>'required',
            'qualification_level'=>'required',
            'graduation_date'=>'required',
            'specialization_major'=>'required',
            'nationality'=>'required',
            'additional_info'=>'required',
        ]);

        $education = JobseekerDetail::find($id);
        $education->institute = $request->institute; 
        $education->qualification_level = $request->qualification_level; 
        $education->graduation_date = $request->graduation_date; 
        $education->specialization_major = $request->specialization_major; 
        $education->nationality = $request->nationality; 
        $education->additional_info = $request->additional_info;
        $education->jobseeker_id = Auth::user()->jobseeker->id;
        $education->save();

        return redirect()->route('jseducations.create'); 
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
        $education = JobseekerDetail::find($id);
        $education->delete();
        return redirect()->route('jseducations.create');
    }
}
