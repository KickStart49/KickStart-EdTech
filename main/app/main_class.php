<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class main_class extends Model
{
    public function teacher_class()
    {
        return $this->belongsToMany('App\teacher_class');
    }
    public function student_class()
    {
        return $this->belongsToMany('App\student_class');
    }
}
