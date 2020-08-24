<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LanguageSkill extends Model
{
    protected $fillable = [
        'jobseeker_id','name','language_skill_level',
    ];
}
