<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable = [
        'student_id','class'
    ];
   
   	public function user()
    {
        return $this->belongsTo('App\User');
    }

}
