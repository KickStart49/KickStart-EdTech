<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Teacher;
use App\User;
use App\teacher_class;
use App\main_class;
use App\student_class;
use App\Student;
use App\Assignment;
use App\Chapter;
use App\assignment_class;
use App\chapter_class;
use DB;



use App\Notifications\classchapter; 

class TeacherController extends Controller
{
    public function index(){
	
		$user = Auth::user();
	    $teacher = $user->teacher;

	    //$classes = $teacher->teacher_class;
        


        //$classes = DB::select('select * from main_classes');
        $classes=main_class::all();


	    if($classes){
	    	return view('user.teachers.index')->with('classes',$classes);

	    }else{
	    	return view('user.teachers.index');	
	    }
	}
    // public function joinclass(Request $request)
    // {

    // }
    public function assignment($code)
    {

        $user = Auth::user();
        $teacher = $user->teacher;
        $classes=main_class::all();

        if($classes){
        return view('user.teachers.assignment')->with('classes',$classes)->with('code',$code);
    }else{
        return view('user.teachers.assignment');   
    }
    }
    public function save_assignment(Request $request,$code)
    {
        $user = Auth::user();
        $id = $user->id;       

        $token = $this->getToken(6, $id);
        $assi_code = 'KSC'. $token . substr(strftime("%Y", time()),2) . sha1(time());
        $assi_code = str_limit($assi_code, $limit = 20, $end = '');

        
        Assignment::create([
        'code'=>$assi_code,
        'title'=>$request->title,
        'file'=>$request->file,
        'msg'=>$request->msg,
        ]);

        assignment_class::create([
        'assignment_code'=>$assi_code,
        'main_class_code'=>$code,
        ]);

        return redirect()->back();
    }
    public function chapter($code)
    {

        $user = Auth::user();
        $teacher = $user->teacher;
        $classes=main_class::all();

        if($classes){
        return view('user.teachers.chapter')->with('classes',$classes)->with('code',$code);
    }else{
        return view('user.teachers.chapter');   
    }
    }
    public function save_chapter(Request $request,$code)
    {

        $user = Auth::user();
        $id = $user->id;       

        $token = $this->getToken(6, $id);
        $ch_code = 'KSC'. $token . substr(strftime("%Y", time()),2) . sha1(time());
        $ch_code = str_limit($ch_code, $limit = 20, $end = '');
        
        Chapter::create([
        'title'=>$request->title,
        'code'=>$ch_code,
        'file'=>$request->file,
        ]);
        chapter_class::create([
        'chapter_code'=>$ch_code,
        'main_class_code'=>$code,
        ]);
        return redirect()->back();
    }


	public function addclass(Request $request){

        $user = Auth::user();
        $teacher = $user ->teacher;
        $id = $user->id;
        $getcode = $teacher ->code;
                
        
        $token = $this->getToken(6, $id);
        $code = 'KSC'. $token . substr(strftime("%Y", time()),2) . sha1(time());
        $code = str_limit($code, $limit = 20, $end = '');


        main_class::create([
                'code' => $code,
                'name' => $request->name,
                'grade' => $request->grade,
                'area' => $request->area,
                
        ]);   
    
        teacher_class::create([
                'teacher_code' => $getcode,
                'class_admin' => 1,
                'main_class_code' => $code,
        ]);

        // $assignment = "new assignment";
        // $student_class = main_class::find($code)->student_class;
        // foreach($student_class as $class){
        //     Student::find($class->student_code)->user->notify(new classchapter($assignment));
        // }
        
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

   
}
