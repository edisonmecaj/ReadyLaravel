<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class dev
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
        if(Auth::user()->Role->role == "dev"){
            return $next($request);
        }
        return back()->withErrors(__("Not Authorized"));
    }
}
