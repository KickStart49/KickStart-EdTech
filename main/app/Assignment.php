<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'title','class_code','file','msg'
    ];
    public function main_class()
    {
        return $this->belongsTo('App\main_class');
    }
}
