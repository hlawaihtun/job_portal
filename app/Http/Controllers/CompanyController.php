<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\BusinessType;
use Illuminate\Support\Facades\Auth;

class CompanyController extends BasicController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($value=""){
        return view('employers.companies.detail');
    }

    public function index()
    {
        $companies = Company::all();
        return view('employers.companies.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $businesstypes = BusinessType::all();
        return view('employers.companies.create',compact('businesstypes'));
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
            'photo' => 'required',
            'name' => 'required',
            'reg_no' => 'required',
            'size' => 'required',
            'location' => 'required',
            'description' => 'required',
            'businesstype' => 'required',
        ]);

        //Flie Upload
        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('employertemplate/companyimg'),$imageName);
        $myfile = 'employertemplate/companyimg/'.$imageName;

        //Store Data
        $company = new Company;
        $company->photo = $myfile;
        $company->company_name = $request->name;
        $company->company_reg_no = $request->reg_no;
        $company->company_size = $request->size;
        $company->company_location = $request->location;
        $company->company_description = $request->description;
        $company->business_type_id = $request->businesstype;
        $company->employer_id = Auth::user()->employer->id;
        $company->save();

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

        //
        $company = Company::findOrFail($id);
        return view('employers.companies.show',compact('company'));
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
        $company = Company::find($id);
        $businesstypes = BusinessType::all();

        return view('employers.companies.edit',compact('company','businesstypes'));

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
            'reg_no' => 'required',
            'size' => 'required',
            'location' => 'required',
            'description' => 'required',
            'businesstype' => 'required',
        ]);

        //file upload
        if($request->hasFile('photo')){
            $imageName = time().'.'.$request->photo->extension();

             $request->photo->move(public_path('employertemplate/companyimg'),$imageName);
             $myfile = 'employertemplate/companyimg/'.$imageName;
        }

        //Update Data
        $company = Company::find($id);
        if($request->hasFile('photo')){
            File::delete($company->photo);
            $company->photo = $myfile;
        }else{
            $company->photo = $company->photo;
        }
        $company->company_name = $request->name;
        $company->company_reg_no = $request->reg_no;
        $company->company_size = $request->size;
        $company->company_location = $request->location;
        $company->company_description = $request->description;
        $company->business_type_id = $request->businesstype;
        $company->employer_id = Auth::user()->employer->id;
        $company->save();

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
        $company = Company::find($id);

        $company->delete();
        return redirect()->route('companies.index');
    }
}
