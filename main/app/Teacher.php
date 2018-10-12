<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	protected $fillable = [
        'teacher_code','user_id'
    ];
    public function class()
    {
        return $this->belongsToMany('App\class');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    

}
