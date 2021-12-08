<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMandatoryData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {        
        if (!$request->user()->gender) {
            return redirect('user-required-data');
        }
        
        if (!$request->user()->mobile) {
            return redirect('user-required-data');
        }

        if (!$request->user()->birthday) {
            return redirect('user-required-data');
        }       
        
        if (!$request->user()->username) {
            return redirect('user-required-data');
        }
        
        return $next($request);
    }
}
