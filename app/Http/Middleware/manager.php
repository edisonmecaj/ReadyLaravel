<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class manager
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
        if($user->level >= 20 || $user->Role->role == "manager"){
            return $next($request);
        }
        return back()->withErrors(__("Not Authorized"));
    }
}
