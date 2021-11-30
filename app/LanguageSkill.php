<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LanguageSkill extends Model
{
    //
    protected $fillable = [
        'jobseeker_id','name','spoken_skill','written_skill',
    ];

    public function jobseeker()
    {
        return $this->belongsTo('App\Jobseeker', 'jobseeker_id');
    }
}
