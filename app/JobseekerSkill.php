<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobseekerSkill extends Model
{
    protected $fillable = [
        'jobseeker_id','name','skill_id',
    ];

    public function skill(){
    	return $this->belongsTo('App\Skill','skill_id');
    }
    
    public function jobseeker()
    {
        return $this->belongsTo('App\Jobseeker', 'jobseeker_id');
    }
}
