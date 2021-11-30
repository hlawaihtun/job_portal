<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    //
    protected $fillable = [
        'user_id','photo','phone_no', 'address','gender','city',
    ];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function company()
    {
    	return $this->hasOne('App\Company');
    }
}
