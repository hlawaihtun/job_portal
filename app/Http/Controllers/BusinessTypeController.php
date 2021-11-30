<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusinessType;

class BusinessTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businesstypes = BusinessType::all();
        return view('backend.businesstypes.index',compact('businesstypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.businesstypes.create');
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
        $businesstype = new BusinessType;
        $businesstype->business_type_name = $request->name;
        $businesstype->save();
        //Alert::success('Success!','New Business Type Inserted Successful!');
        return redirect()->route('businesstype.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.businesstypes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $businesstype = BusinessType::find($id);
        return view('backend.businesstypes.edit',compact('businesstype'));
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
        $request->validate([
            'name' => 'required',
        ]);


        //Update data
        $businesstype = BusinessType::find($id);
        $businesstype->business_type_name = $request->name;
        $businesstype->save();
        //Alert::success('Success!','BusinessType Updated Successful!');
        return redirect()->route('businesstype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $businesstype = BusinessType::find($id);
        $businesstype->delete();

        //Alert::success('Success!','BusinessType Deleted Successful!');
        return redirect()->route('businesstype.index');
    }
}
