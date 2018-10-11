<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentClass extends Model
{
    public function student()
    {
        return $this->hasMany('App\Student');
    }
    protected $fillable = [
        'class'
    ];
   	public function user()
    {
        return $this->belongsTo('App\User');
    }
}
