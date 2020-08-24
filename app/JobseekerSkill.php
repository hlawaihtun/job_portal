<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobseekerSkill extends Model
{
    protected $fillable = [
        'jobseeker_id','name','skill_level',
    ];
}
