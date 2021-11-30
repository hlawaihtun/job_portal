<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    protected $fillable = [
        'company_id','job_title', 'job_type_id','job_position_id','job_description','job_salary' ,'howtoapply','job_location','job_request','last_apply_date','is_active',
    ];

    public function company(){
    	return $this->belongsTo('App\Company','company_id');
    }

    public function jobtype(){
    	return $this->belongsTo('App\Jobtype','job_type_id');
    }

    public function jobposition(){
    	return $this->belongsTo('App\JobPosition','job_position_id');
    }

    public function jobseekers()
    {
        return $this->belongsToMany('App\Jobseeker','applypost_records','job_vacancy_id','jobseeker_id');
    }

    public static function JVSearch($query, $jobtitle)
    {
        return $query->Where('job_title', 'like', '%' .$jobtitle. '%');
                     
    }


}
