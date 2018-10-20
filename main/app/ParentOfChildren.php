<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentOfChildren extends Model
{
	protected $fillable = [
        'parent_code','relation','user_id'
    ];

    public function child()
    {
        return $this->belongsToMany('App\Student');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
