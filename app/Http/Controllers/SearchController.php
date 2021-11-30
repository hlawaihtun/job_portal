<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobVacancy;


class SearchController extends Controller
{
    //
    public function searchjob(Request $request){
    	$jobtitle = $request->input( 'jobtitle' );
    	$jobvacancies = JobVacancy::where('job_title','LIKE','%'.$jobtitle.'%')->get();
    	if(count($jobvacancies)>0)
    		return view ('jobseekers.search.search_job')->withDetails($jobvacancies)->withQuery ( $jobtitle );
    }


}
