<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class class extends Model
{
	protected $fillable = [
        'teacher_code','user_id','student_code'
    ];

    public function student()
    {
        return $this->hasMany('App\Student');
    }
    public function teacher()
    {
        return $this->hasMany('App\Teacher');
    } 
}
