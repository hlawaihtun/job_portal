<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobseekerDetail extends Model
{
    //
    protected $fillable = [
        'jobseeker_id','institute','qualification_level','graduation_date','specialization_major','nationality','additional_info',
    ];

    public function jobseeker()
    {
        return $this->belongsTo('App\Jobseeker', 'jobseeker_id');
    }
}
