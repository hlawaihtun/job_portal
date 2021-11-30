<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobtype;

class JobtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobtypes = Jobtype::all();
        return view('backend.jobtypes.index',compact('jobtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.jobtypes.create');
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
        $jobtype = new Jobtype;
        $jobtype->job_type_name = $request->name;
        $jobtype->save();
        //Alert::success('Success!','New Business Type Inserted Successful!');
        return redirect()->route('jobtypes.index');
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
         return view('backend.jobtypes.show');
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
        $jobtype = Jobtype::find($id);
        return view('backend.jobtypes.edit',compact('jobtype'));
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


        //Update data
        $jobtype = Jobtype::find($id);
        $jobtype->job_type_name = $request->name;
        $jobtype->save();
        //Alert::success('Success!','BusinessType Updated Successful!');
        return redirect()->route('jobtypes.index');
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
        $jobtype = Jobtype::find($id);
        $jobtype->delete();

        //Alert::success('Success!','BusinessType Deleted Successful!');
        return redirect()->route('jobtypes.index');
    }
}
