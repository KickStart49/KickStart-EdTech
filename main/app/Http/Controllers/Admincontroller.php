<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Teacher;
use App\ParentClass;
use App\student_teacher;
use DB;
use App\Assignment;

class Admincontroller extends Controller
{

    public function showadmin(Request $request)
    {
        $currentuserId = Auth::id();
        $admin = DB::table('users')->where('id',$currentuserId)->first();
        
        
        if($admin->permission == "student")
        {
            return redirect()->route('student');
        }
        if($admin->permission == "teacher")
        {
            return redirect()->route('teacher');
        }
        if($admin->permission == "parent")
        {
            return redirect()->route('parent');
        } 
    }
        
    public function code()
    {
        
        return view('student_teacher.index')->with('users',User::all());
    }
    public function verification(Request $request)
    {
        $currentuserId = Auth::id();
        
        if($request->category == "student")
        {
            $student = DB::table('students')->where('user_id',$currentuserId)->first();
            $id = $student->id;
            $teacher=Teacher::where('class_id',$request->classcode)->first();
            if($teacher){
                
                $user = new student_teacher;
                $user->fill($request->all());
                $user->teacher_id = $teacher->class_id;
                $user->student_id = $student->student_id; 
                $user->save();

                $user1 = Student::find($id);
                
                $user1->class = 1;
                $user1->save();  
            }

            return redirect()->route('showadmin');

       }
       if($request->category == "parent")
        {
            $matchThese = ['student_id' => $request->childcode, 'teacher_id' => $request->classcode];
            $student = DB::table('student_teachers')->where($matchThese)->get();
            
            if($student){
                
                $user = ParentClass::where('user_id', '=',  $currentuserId)->first();
                $user->fill($request->all());
                $user->class=1;
                $user->save();  
            }

            return redirect()->route('showadmin');

       }
       
    }
    public function assi_add(Request $request){
        
        // $this->validate($request, [
        // 'title' => 'required'
        // ]);
       
        
        
        $assignment = new Assignment;
        // $assignment->fill($request->all());
        $assignment->title = $request -> Assignment_title;
        $assignment->lastdate = $request->duedate;
        $assignment->about=$request->about;
        $featured=$request->attach_a_file;
        $featured_new_name=time().$featured->getClientOriginalName();
        $featured->move('uploads/assignment',$featured_new_name);
        $assignment->featured='uploads/assignment/'. $featured_new_name;
        $assignment->save();

        return redirect()->back();

    }
   
}