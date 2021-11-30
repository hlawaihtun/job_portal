<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	if(Auth::user())
	{
		$user = Auth::user();
		if($user->getRoleNames()->first() === 'employer')
		{
			if(isset($user->employer->company))
			{
				return redirect('companies/' . $user->employer->company->id);
			}
			elseif(isset($user->employer))
			{
				return redirect('companies/create');
			}
			else
			{
				return redirect()->route('show_empform');
			}
		}
		if($user->getRoleNames()->first() === 'jobseeker')
		{
			if(isset($user->jobseeker))
			{
				return redirect()->route('jsdetail');
			}
			else
			{
				return redirect()->route('show_jsform');
			}
		}
		if($user->getRoleNames()->first() === 'admin')
		{
			return redirect()->route('dashboard');
		}
	}
	return redirect()->route('homedesign');
});

Auth::routes();
Route::middleware('auth')->group(function () {

	Route::middleware('role:admin')->group(function () {
		
	});
	Route::middleware('role:employer')->group(function () {

	});
	Route::middleware('role:jobseeker')->group(function () {
		
	});
});

Route::get('/home', function(){
	return redirect('/');
})->name('home');

Route::get('dashboard', 'BackendController@dashboard')->name('dashboard');


//empform route
Route::get('emplogin', 'EmployerController@login')->name('emplogin');
Route::get('empreg', 'EmployerController@register')->name('empreg');
Route::get('empform', 'EmployerController@show_empform')->name('show_empform');
Route::post('empreg', 'EmployerController@registerEmployer');
Route::post('fill_emp_extra', 'EmployerController@fill_emp_extra')->name('fill_emp');
Route::get('employer', 'EmployerController@employer')->name('employer');
Route::get('empdetail','EmployerController@detail')->name('empdetail');
Route::get('aboutemp','EmployerController@aboutemp')->name('aboutemp');

//js route
Route::get('jslogin', 'JobseekerController@login')->name('jslogin');
Route::get('jsreg', 'JobseekerController@register')->name('jsreg');
Route::get('jsform', 'JobseekerController@show_jsform')->name('show_jsform');
Route::post('fill_js_extra', 'JobseekerController@fill_js_extra')->name('fill_js');
Route::get('jsdetail','JobseekerController@jsdetail')->name('jsdetail');
Route::get('aboutme','JobseekerController@aboutme')->name('aboutme');
Route::get('cvform','JobseekerController@cvform')->name('cvform');


Route::post('jsreg', 'JobseekerController@registerJobseeker');


Route::resource('businesstype', 'BusinessTypeController');
Route::resource('companies', 'CompanyController');
Route::resource('jobtypes','JobtypeController');
Route::resource('jobpositions','JobPositionController');
Route::resource('jobvacancies','JobVacancyController');
Route::resource('jsexperiences','JobseekerExperienceController');
Route::resource('jseducations','EducationController');
Route::resource('skills','SkillController');
Route::resource('jsskills','JsSkillController');
Route::resource('jslanguages','JsLanguageController');

Route::get('homedesign','FrontendController@home')->name('homedesign');
Route::get('jobdetail/{id}','FrontendController@jobdetail')->name('jobdetail');

Route::get('applyjob/{id}','JobApplyController@store')->name('applyjob');
Route::get('deletejob/{id}','JobApplyController@delete')->name('deletejob');
Route::get('jobpost','FrontendController@jobpost')->name('jobpost');
Route::get('showcv/{id}','CvController@show_cv')->name('showcv');
Route::get('jsapply','FrontendController@jsapply')->name('jsapply');



Route::get('searchjob','SearchController@searchjob')->name('searchjob');









