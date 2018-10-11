<?php


namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use App\User;
use App\Student;
use App\Teacher;
use App\ParentClass;
use DB;

class codegenerator
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
        if ($user->code_status==0) 
        {
            if($user->permission == "student"){
            
                $quote = new Student;
                $quote->fill($request->all());
                $quote->user_id = Auth::id();
                $quote->student_id = mt_rand(100000, 999999); 
                $quote->save();  
                $UpdateDetails = User::where('id', '=',  $currentuserId)->first();
                $UpdateDetails->code_status = 1;
                $UpdateDetails->save();

            }
            if($user->permission == "teacher"){
            
                $quote = new Teacher;
                $quote->fill($request->all());
                $quote->user_id = Auth::id();
                $quote->class_id = mt_rand(100000, 999999); 
                $quote->save();  
                 $UpdateDetails = User::where('id', '=',  $currentuserId)->first();
                $UpdateDetails->code_status = 1;
                $UpdateDetails->save();
                
            }
            if($user->permission == "parent"){
            
                $quote = new ParentClass;
                $quote->fill($request->all());
                $quote->user_id = Auth::id();
                $quote->save();  

                $UpdateDetails = User::where('id', '=',  $currentuserId)->first();
                $UpdateDetails->code_status = 1;
                $UpdateDetails->save();
                
            }
        }
        return $next($request);
    }
}
