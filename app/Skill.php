<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function jsskill(){
    	return $this->hasMany('App\JobseekerSkill','skill_id');
    }
}
