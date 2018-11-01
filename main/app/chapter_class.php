<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chapter_class extends Model
{
    protected $fillable = [
        'chapter_code','main_class_code'
    ];
    public function Chpter()
    {
        return $this->belongsToMany('App\Chapter');
    }
    public function main_class()
    {
        return $this->belongsTo('App\main_class');
    }
}
