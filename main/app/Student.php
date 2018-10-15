<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $primaryKey = 'code';
    
	protected $fillable = [
        'code','user_id'
    ];

    protected $casts = ['code' => 'string'];

    public $incrementing = false;
   
   	public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function student_class()
    {
        return $this->hasMany('App\student_class');
    }

}
