<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplypostRecord extends Model
{
    protected $fillable = [
        'job_vacancy_id','jobseeker_id','apply_date','expected_salary','status',
    ];
}
