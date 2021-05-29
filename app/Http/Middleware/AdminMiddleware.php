<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class AdminMiddleware
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
        if(Auth::check() && Auth::user()->role=='admin')
        {
            return $next($request);
        }
         else if(Auth::check() && Auth::user()->role=='co_admin')
         {
            return $next($request);
            return redirect('/co-home');
         }

         else if(Auth::check() && Auth::user()->role=='customer')
         {
            return $next($request);
            return redirect('/cus-home');
         }
       
    }
}
