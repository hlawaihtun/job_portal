<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Employer;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function employer($value=''){
    	return view('employers.foremployer');
    }


    public function login($value=''){
    	return view('employers.login');
    }  
    public function show_empform(){
        return view('employers.employer.create');
    }

    public function detail($value=''){
        return view('employers.employer.show');
    }

    public function aboutemp($value=''){
        return view('employers.employer.detail');
    }

    public function register($value=''){
    	return view('employers.register');
    }

    public function fill_emp_extra(Request $request){

        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('employertemplate/empimg'),$imageName);
        $myfile = 'employertemplate/empimg/'.$imageName;
        $emp = Employer::create([
            'photo' => $myfile,
            'phone_no' => $request->input('phno'),
            'address' => $request->input('address'),
            'gender' => $request->input('radioGender'),
            'city' => $request->input('city'),
            'user_id' => Auth::id()

        ]);

            return redirect()->route('companies.create');

    }
    public function registerEmployer(Request $request){
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
        $user->assignRole('employer');
        return redirect()->route('emplogin');
    }
}
