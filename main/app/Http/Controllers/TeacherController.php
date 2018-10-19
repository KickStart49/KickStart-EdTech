<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Teacher;
use App\User;
use App\teacher_class;
use App\main_class;
use App\Student;

use App\Notifications\classchapter; 

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


	public function addclass(){

        $user = Auth::user();
        $teacher = $user ->teacher;
        $id = $user->id;

        $getcode = $teacher ->code;
        
        $token = $this->getToken(6, $id);
        $code = 'KSC'. $token . substr(strftime("%Y", time()),2) . sha1(time());
        $code = str_limit($code, $limit = 20, $end = '');

        main_class::create([
                'code' => $code,
                'assignment' => "new aassignment",
        ]);        
        teacher_class::create([
                'teacher_code' => $getcode,
                'class_admin' => 1,
                'main_class_code' => $code,
        ]);

        $assignment = "new assignment";
        $student_class = main_class::find($code)->student_class;
        foreach($student_class as $class){
            Student::find($class->student_code)->user->notify(new classchapter($assignment));
        }
        
        // $students = main_class::find($code)->student_class->student->user;

        // foreach ($students as $student) {
        //     $user->notify(new classchapter($assignment));
        // }
        
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

    public function home()
    {
        return view('user.teachers.index'); 
    }

    public function class_submit(Request $request)
    {
        
        $class=teacher_class::create([
            'name'=>$request->name,
            'grade'=>$request->grade,
            'area'=>$request->area
        ]);
        dd($request->all());

    }
}
