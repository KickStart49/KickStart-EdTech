<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
	protected $primaryKey = 'code';
    protected $fillable = [
        'title','file','code'
    ];
    public function chapter_class()
    {
        return $this->belongsTo('App\chapter_class');
    }
}
