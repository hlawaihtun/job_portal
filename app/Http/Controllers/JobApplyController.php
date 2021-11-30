<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApplypostRecord;
use App\JobVacancy;
use Illuminate\Support\Facades\Auth;

class JobApplyController extends Controller
{
    //
    public function store($id){
    	$applyjob = Auth::user()->jobseeker->jobvacancies()->attach($id);
    	return redirect()->back();
    }

    public function delete($id){
    	$applyjob = Auth::user()->jobseeker->jobvacancies()->detach($id);
    	return redirect()->back();
    }
}
