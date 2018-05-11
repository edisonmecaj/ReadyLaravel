<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class admin
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
        $user = Auth::user();
        if($user->level >= 50 || $user->Role->role == "admin"){
            return $next($request);
        }
        return back()->withErrors(__("Not Authorized"));
    }
}
