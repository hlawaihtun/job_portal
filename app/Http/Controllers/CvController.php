<?php

namespace App\Http\Controllers;
use App\User;
use App\Jobseeker;
use Carbon\Carbon;


use Illuminate\Http\Request;

class CvController extends Controller
{
    //
    public function show_cv($id){
    	$user_obj = Jobseeker::find($id);
        $dob_carbon = new Carbon($user_obj->dob);
        $user_obj->dob = $dob_carbon->format(' d  F Y');
        return view('jobseekers.jobseeker.showcv',compact('user_obj'));

    }

    public function show_all_cv(){
    	$user_obj = Jobseeker::all();
        $dob_carbon = new Carbon($user_obj->dob);
        $user_obj->dob = $dob_carbon->format(' d  F Y');
    }
}
