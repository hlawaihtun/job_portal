<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Jobseeker;
use Carbon\Carbon;

class JobseekerController extends Controller
{

   

    public function login($value=''){
    	return view('jobseekers.login');
    }

    public function register($value=''){
    	return view('jobseekers.register');
    }

    public function show_jsform(){
        return view('jobseekers.jobseeker.create');
    }

    

    public function cvform(){
        $user_obj = Auth::user();
        $dob_carbon = new Carbon($user_obj->jobseeker->dob);
        $user_obj->jobseeker->dob = $dob_carbon->format(' d  F Y');
        return view('jobseekers.jobseeker.cv',compact('user_obj'));
    }

    public function aboutme(){
        $user_obj = Auth::user();
        $dob_carbon = new Carbon($user_obj->jobseeker->dob);
        $user_obj->jobseeker->dob = $dob_carbon->format(' d  F Y');
        return view('jobseekers.jobseeker.show', compact('user_obj'));
    }

    public function fill_js_extra(Request $request){

        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('jobseekertemplate/jsimg'),$imageName);
        $myfile = 'jobseekertemplate/jsimg/'.$imageName;
        $js = Jobseeker::create([
            'photo' => $myfile,
            'phone_no' => $request->input('phno'),
            'address' => $request->input('address'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('radioGender'),
            'city' => $request->input('city'),
            'user_id' => Auth::id()
        ]);
        return redirect()->route('jsdetail');
    }

    public function jsdetail(){
        return view('jobseekers.jobseeker.detail');
    }

    public function registerJobseeker(Request $request){
    	$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        $user->assignRole('jobseeker');
        return redirect()->route('jslogin');
    }
}
