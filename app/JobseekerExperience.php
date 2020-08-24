<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobseekerExperience extends Model
{
    protected $fillable = [
        'jobseeker_id','company_name','start_date','end_date','job_position_id','business_type_id','is_active',
    ];
}
