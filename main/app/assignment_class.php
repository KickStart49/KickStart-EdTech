<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assignment_class extends Model
{
    protected $fillable = [
        'assignment_code','main_class_code'
    ];
    public function Assignment()
    {
        return $this->belongsToMany('App\Assignment');
    }
    public function main_class()
    {
        return $this->belongsTo('App\main_class');
    }
}
