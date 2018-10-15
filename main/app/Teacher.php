<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $primaryKey = 'code';

	protected $fillable = [
        'code','user_id'
    ];

    protected $casts = ['code' => 'string'];

    public $incrementing = false;

    public function teacher_class()
    {
        return $this->hasMany('App\teacher_class');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    


}
