<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentOfChildrenStudent extends Model
{
	
	protected $fillable = [
        'parent_of_children_id','student_code'
    ];
}
