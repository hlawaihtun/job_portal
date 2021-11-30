<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobseekerExperience extends Model
{
    //
    protected $fillable = [
        'jobseeker_id','company_name','start_date','end_date','job_position_id','business_type_id','is_active',
    ];

    public function jobposition(){
    	return $this->belongsTo('App\JobPosition','job_position_id');
    }

     public function businesstype(){
    	return $this->belongsTo('App\BusinessType','business_type_id');
    }

    public function jobseeker()
    {
        return $this->belongsTo('App\Jobseeker', 'jobseeker_id');
    }
}
