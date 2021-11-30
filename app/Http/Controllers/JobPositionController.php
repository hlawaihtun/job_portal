<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobPosition;

class JobPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobpositions = JobPosition::all();
        return view('backend.jobpositions.index',compact('jobpositions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.jobpositions.create');
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
        ]);

        //Store Data
        $jobposition = new JobPosition;
        $jobposition->job_position_name = $request->name;
        $jobposition->save();
        return redirect()->route('jobpositions.index');
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
        return view('backend.jobpositions.show');
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
        $jobposition = JobPosition::find($id);
        return view('backend.jobpositions.edit',compact('jobposition'));
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
        ]);

        //Store Data
        $jobposition = JobPosition::find($id);
        $jobposition->job_position_name = $request->name;
        $jobposition->save();
        return redirect()->route('jobpositions.index');
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
        $jobposition = JobPosition::find($id);
        $jobposition->delete();

        return redirect()->route('jobposionts.index');
    }
}
