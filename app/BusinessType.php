<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    protected $fillable = [
        'business_type_name',
    ];
    public function companies()
    {
        return $this->hasMany('App\Company', 'business_type_id');
    }
    public function experience(){
    	return $this->hasOne('App\JobExperience','business_type_id');
    }
}
