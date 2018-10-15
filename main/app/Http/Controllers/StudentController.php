<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\student_class;
use App\main_class;

class StudentController extends Controller
{
	public function index(){
	
		$user = Auth::user();
	    $student = $user->student;

	    $classes = $student->student_class;

        $classlist = main_class::all();

	    return view('user.student')->with('classes',$classes)
                                    ->with('classlist',$classlist);
	}

	public function joinclass(Request $request){


        $user = Auth::user();
        $student = $user->student;
        $id = $user->id;

        $getcode = $student ->code;


        if(main_class::find($request->code)){
            student_class::create([
                'student_code' => $getcode,
                'main_class_code' => $request->code,
            ]);
        }

        return redirect()->back();
    }
    
    private function getToken($length, $seed){    
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "0123456789";

        mt_srand($seed);      // Call once. Good since $application_id is unique.

        for($i=0;$i<$length;$i++){
            $token .= $codeAlphabet[mt_rand(0,strlen($codeAlphabet)-1)];
        }
        return $token;
    }

}
