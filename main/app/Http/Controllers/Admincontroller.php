<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use DB;

class AdminController extends Controller
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
            return view('user.parent');
        }
        if($admin->permission == "administrator")
        {
            return view('user.admin');
        }  
    }

   
}