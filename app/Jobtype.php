<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobtype extends Model
{
    protected $fillable = [
        'job_type_name',
    ];

    public function jobvacancy(){
    	return $this->hasMany('App\JobVacancy','job_type_id');
    }
}
