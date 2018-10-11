<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use App\User;
use DB;
class verifyEmail
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
        if ($user->email_verified_at) {
            
        }else{
            return redirect()->route('verification.notice');
        }

        return $next($request);
    }
}
