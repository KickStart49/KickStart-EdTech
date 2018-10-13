<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_class extends Model
{
    protected $fillable = [
        'student_code','user_id','class_code'
    ];

    public function student()
    {
        return $this->hasMany('App\Student');
    }
    public function main_class()
    {
        return $this->hasOne('App\main_class');
    }
}
