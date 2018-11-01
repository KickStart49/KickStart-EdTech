<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
	protected $primaryKey = 'code';
    protected $fillable = [
        'title','code','file','msg'
    ];
    public function assignment_class()
    {
        return $this->belongsTo('App\assignment_class');
    }
}
