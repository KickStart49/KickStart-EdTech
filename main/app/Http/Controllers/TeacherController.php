<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
	
		$user = Auth::user();
	    $teacher = $user->teacher;


	    $classes = $teacher->teacher_class;


	   	


	    if($classes){
	    	return view('user.teacher')->with('classes',$classes);
	    }else{
	    	return view('user.teacher');	
	    }
		
		
	
	}
}
