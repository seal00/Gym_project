<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class InstructMiddleware
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
        if(Auth::check()){ //login user
            if(Auth::user()->isInst == '1') // is an instructor
            {
                return $next($request); // pass the instructor
            }else{
                return redirect('/home')->withError('Permission Denied'); // not instructor
            }
        }else{
            return redirect('/login')->withError('Unauthorized.', 401);//not loggin in
        }
    }
}
