<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_class extends Model
{
    protected $fillable = [
        'student_code','main_class_code'
    ];

    public function Student()
    {
        return $this->belongsToMany('App\Student');
    }
    public function main_class()
    {
        return $this->belongsTo('App\main_class');
    }
}
