<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class main_class extends Model
{

    protected $primaryKey = 'code';
    
	protected $fillable = [
        'code','name','grade','area'
    ];

    protected $casts = ['code' => 'string'];

    public $incrementing = false;

    public function teacher_class()
    {
        return $this->hasMany('App\teacher_class');
    }
    public function student_class()
    {
        return $this->hasMany('App\student_class');
    }
    public function assignment_class()
    {
        return $this->hasMany('App\assignment_class');
    }
    public function chapter_class()
    {
        return $this->hasMany('App\chapter_class');
    }
}
