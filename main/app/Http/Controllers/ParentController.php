<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\student_class;
use App\main_class;
use App\ParentOfChildren;

use App\Mail\InviteChild;
use Illuminate\Support\Facades\Mail;

class ParentController extends Controller
{
    public function index(){
	
    	$user = Auth::user();
	    $parent = $user->parent;

	    $child = $parent->child; //Many children


        $classlist = main_class::all(); // Many Classes

	    return view('user.parent.index')
                                    ->with('classlist',$classlist)
                                    ->with('child',$child)
                                    ->with('parent',$parent);

	}
	public function allclasses(){
    
        $user = Auth::user();
	    $parent = $user->parent;

	    $child = $parent->child; //Many children


        $classlist = main_class::all(); // Many Classes

	    return view('user.parent.allclasses')
                                    ->with('classlist',$classlist)
                                    ->with('child',$child)
                                    ->with('parent',$parent);
    }
	public function addchild(Request $request)
	{
		$user = Auth::user();
	    $parent = $user->parent;

		$parent->child()->attach($request->childcode);
		return redirect()->back();
	}

	public function invitechild(Request $request)
	{
		$user = Auth::user();
        $parent = $user->parent;
        $id = $user->id;

        $parentcode = $parent ->parent_code;
        $parentemail = $user->email; 
        $parentname = $user->name;
        Mail::to($request->childemail)->send(new InviteChild($parentcode,$parentemail,$parentname));

        return redirect()->back();
	}

}
