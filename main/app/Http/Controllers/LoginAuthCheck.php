<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Notification;
use App\Notifications\NewUserAdded; 

class LoginAuthCheck extends Controller
{
    public function email(Request $request)
    {
    	$email = $request->email;
    	$user = User::where('email',$email)->first();
    	
        if(isset($user->email)){
    		return response()->json(['msg'=>'true','email'=>$user->email]);
        }else{
            return response()->json(['msg'=>'false']);
        }
    	
    }
    public function password(Request $request)
    {
        
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
           
            return response()->json(['msg'=>'true']);
        }else{
            return response()->json(['msg'=>'false']);
        }
    }
    public function passwordview(Request $request)
    {

        $email=$request->email;
        $redirectTo=$request->redirectTo;
        if($redirectTo)
        {   return redirect()->route('loginpsd',['redirectTo'=>$redirectTo])
                    ->with('email',$email)
                    ->with('redirectTo',$redirectTo);
        }else{
            $redirectTo = "/home";
            return redirect()->route('loginpsd')
                    ->with('email',$email)
                    ->with('redirectTo',$redirectTo);
        }
    }
    public function loginsuccess(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended($request->redirectTo);
        }
    }
    public function login(Request $request){

        return view('auth.login.email')->with('redirectTo',$request->redirectTo);
    }
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }
}
