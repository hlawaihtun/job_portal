<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    protected $fillable = [
        'job_position_name',
    ];

    public function jobvacancy(){
    	return $this->hasMany('App\JobVacancy','job_position_id');
    }

    public function experience(){
    	return $this->hasOne('App\JobseekerExperience','job_position_id');
    }
}
