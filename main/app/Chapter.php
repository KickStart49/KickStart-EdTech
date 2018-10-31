<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'title','file','class_code'
    ];
    public function main_class()
    {
        return $this->belongsTo('App\main_class');
    }
}
