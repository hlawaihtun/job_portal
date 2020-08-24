<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobseeker extends Model
{
    protected $fillable = [
        'user_id', 'phone_no', 'address','gender','city',
    ];
}
