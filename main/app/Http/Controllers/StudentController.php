<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Student;
use App\User;

class StudentController extends Controller
{
	public function index(){
	
		$user = Auth::user();
	    $student = $user->student;

	    $classes = $student->student_class;

	    if($classes){
	    	return view('user.student')->with('classes',$classes);
	    }else{
	    	return view('user.student');	
	    }
		
		
	
	}
    


}
