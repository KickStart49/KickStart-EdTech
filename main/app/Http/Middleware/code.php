<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use App\User;
use DB;
class code
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $currentuserId = Auth::id();
        $user = DB::table('users')->where('id',$currentuserId)->first();

        if($user->permission == "student"){
            
            $st = DB::table('students')->where('user_id',$currentuserId)->first();
            
            if(!$st->class){
                
                    return redirect()->route('permission')->with('permission','student')->with('user',$user);   
                
            }
            
        }
        if ($user->permission == "parent") {
            
            $pt = DB::table('parent_classes')->where('user_id',$currentuserId)->first();

            if(!$pt->class){
            
                return redirect()->route('permission')->with('permission','parent')->with('user',$user); 
                  
            }
        }  
        return $next($request);
    }
}
