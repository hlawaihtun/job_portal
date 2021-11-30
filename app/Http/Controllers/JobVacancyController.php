<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobtype;
use App\JobPosition;
use App\JobVacancy;

class JobVacancyController extends BasicController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobvacancies = JobVacancy::all();
        return view('employers.jobvacancies.index',compact('jobvacancies'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobtypes = Jobtype::all();
        $jobpositions = JobPosition::all();
        return view('employers.jobvacancies.create',compact('jobtypes','jobpositions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'title'=> "required",
            'jobtype'=> "required",
            'jobposition'=> "required",
            'description'=> "required",
            'salary'=> "required",
            'apply'=> "required",
            'location'=> "required",
            'request'=> "required",
            'ladate'=> "required",
        ]);
        //Store Data

        $jobvacancy = new JobVacancy;
        $jobvacancy->job_title = $request->title;
        $jobvacancy->job_type_id = $request->jobtype;
        $jobvacancy->job_position_id = $request->jobposition;
        $jobvacancy->job_description = $request->description;
        $jobvacancy->job_salary = $request->salary;
        $jobvacancy->howtoapply = $request->apply;
        $jobvacancy->job_location = $request->location;
        $jobvacancy->job_request = $request->input('request');
        $jobvacancy->last_apply_date = $request->ladate;
        $jobvacancy->company_id = Auth::user()->employer->company->id;
        $jobvacancy->is_active = 'true';
        $jobvacancy->save();
        return redirect()->route('empdetail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $jobvacancies = \App\Company::find($id)->jobvacancy;
        return view('employers.jobvacancies.show',compact('jobvacancies'));
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
        $jobvacancy = JobVacancy::find($id);

        $jobtypes = Jobtype::all();
        $jobpositions = JobPosition::all();

        return view('employers.jobvacancies.edit',compact('jobvacancy','jobtypes','jobpositions'));
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
            'title'=> "required",
            'jobtype'=> "required",
            'jobposition'=> "required",
            'description'=> "required",
            'salary'=> "required",
            'apply'=> "required",
            'location'=> "required",
            'request'=> "required",
            'ladate'=> "required",
        ]);
        //Store Data
        $jobvacancy = JobVacancy::find($id);
        $jobvacancy->job_title = $request->title;
        $jobvacancy->job_type_id = $request->jobtype;
        $jobvacancy->job_position_id = $request->jobposition;
        $jobvacancy->job_description = $request->description;
        $jobvacancy->job_salary = $request->salary;
        $jobvacancy->howtoapply = $request->apply;
        $jobvacancy->job_location = $request->location;
        $jobvacancy->job_request = $request->input('request');
        $jobvacancy->last_apply_date = $request->ladate;
        $jobvacancy->company_id = Auth::user()->employer->company->id;
        $jobvacancy->is_active = 'true';
        $jobvacancy->save();
        return redirect()->route('empdetail');
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

        $jobvacancy = JobVacancy::find($id);
        $jobvacancy->delete();
        return redirect()->route('empdetail');
    }
}
