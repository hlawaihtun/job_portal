<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobseekerDetail extends Model
{
    protected $fillable = [
        'jobseeker_id','institute','qualification_level','graduation_date','specialization_major','dob','nationality','additional_info',
    ];
}
