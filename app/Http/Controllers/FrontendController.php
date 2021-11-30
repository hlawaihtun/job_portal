<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobVacancy;
use App\Jobtype;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    //
     public function home($value=""){
     	$jobvacancies = JobVacancy::orderBy('id', 'desc')->take(5)->get();
        $jobtypes = Jobtype::all();
        return view('frontend.frontend',compact('jobvacancies','jobtypes'));
    }

    public function jobpost($value=""){
    	$jobvacancies = JobVacancy::all();
    	return view('frontend.jobpost',compact('jobvacancies'));
    }

    public function jobdetail($id){

    	$jobvacancies = JobVacancy::find($id);
    	return view('frontend.jobdetail',compact('jobvacancies'));
    }

    

    public function jsapply(){
       $jobvacancies = Auth::user()->jobseeker->jobvacancies;
        return view('jobseekers.jobseeker.jobapply',compact('jobvacancies'));
    }




}
