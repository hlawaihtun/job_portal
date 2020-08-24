<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    protected $fillable = [
        'company_id', 'job_type_id','job_position_id','job_description','job_salary' ,'howtoapply','job_location','job_request','last_apply_date','job_post_date','is_active',
    ];
}
