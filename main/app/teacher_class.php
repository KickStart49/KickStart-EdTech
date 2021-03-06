<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher_class extends Model
{
    protected $fillable = [
        'teacher_code','main_class_code','class_admin'
    ];
    public function teacher()
    {
        return $this->belongsToMany('App\Teacher');
    }

    public function main_class()
    {
        return $this->belongsTo('App\main_class');
    }
}
