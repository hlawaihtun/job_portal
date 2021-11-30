<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
     protected $fillable = [
        'photo','company_name','company_reg_no','company_size','company_location','company_description','business_type_id','employer_id',
    ];

    public function businesstype()
    {
        return $this->belongsTo('App\BusinessType', 'business_type_id');
    }
    public function jobvacancy()
    {
    	return $this->hasMany('App\JobVacancy','company_id');
    }
    public function employer()
    {
    	return $this->belongsTo('App\Employer');
    }
}
