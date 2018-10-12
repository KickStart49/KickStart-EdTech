<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable = [
        'student_code','user_id'
    ];
   
   	public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function class()
    {
        return $this->belongsToMany('App\class');
    }

}
