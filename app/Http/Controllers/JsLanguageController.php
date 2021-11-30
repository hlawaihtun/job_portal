<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LanguageSkill;
use Illuminate\Support\Facades\Auth;

class JsLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $languages = LanguageSKill::all();
        return view('jobseekers.languages.index',compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jobseekers.languages.create');
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
            'name'=>'required',
            'spoken'=>'required',
            'written'=>'required',
        ]);
        $language = new LanguageSkill;
        $language->name = $request->name;
        $language->spoken_skill = $request->spoken;
        $language->written_skill = $request->written;
        $language->jobseeker_id = Auth::user()->jobseeker->id;
        $language->save();

        return redirect()->route('jslanguages.create');
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
        $language = LanguageSkill::find($id);
        return view('jobseekers.languages.edit',compact('language'));
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
            'name'=>'required',
            'spoken'=>'required',
            'written'=>'required',
        ]);

        $language = LanguageSkill::find($id);
        $language->name = $request->name;
        $language->spoken_skill = $request->spoken;
        $language->written_skill = $request->written;
        $language->jobseeker_id = Auth::user()->jobseeker->id;
        $language->save();

        return redirect()->route('jslanguages.create');
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
        $language = LanguageSkill::find($id);
        $language -> delete();
        return redirect()->route('jslanguages.create');
    }
}
