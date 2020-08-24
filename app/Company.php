<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'photo','company_name','company_reg_no','company_size','company_location','company_description','business_type_id','employer_id',
    ];
}
