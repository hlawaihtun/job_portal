<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobseeker extends Model
{
    //
    protected $fillable = [
        'user_id','photo', 'phone_no', 'address','dob','gender','city',
    ];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function experiences()
    {
    	return $this->hasMany('App\JobseekerExperience','jobseeker_id');
    }

    public function educations()
    {
        return $this->hasMany('App\JobseekerDetail','jobseeker_id');
    }

    public function jsskills()
    {
        return $this->hasMany('App\JobseekerSkill','jobseeker_id');
    }

     public function jslanguages()
    {
        return $this->hasMany('App\LanguageSkill','jobseeker_id');
    }

    public function jobvacancies()
    {
        return $this->belongsToMany('App\JobVacancy','applypost_records','jobseeker_id','job_vacancy_id');
    }
}
