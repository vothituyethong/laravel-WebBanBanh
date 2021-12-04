<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;


class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()&&Auth::admin()->status==1)
        {
            return $next($request);
        }
        else
            return redirect('/panel/login');
    }
}
