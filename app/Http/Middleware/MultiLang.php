<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Auth;

class MultiLang
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
        if (Auth::check())
        {
            Session::put("locale", Auth::user()->locale);
            \App::setlocale(Session::get("locale"));
        }
        else if(Session::has("locale")){
            \App::setlocale(Session::get("locale"));
        }
        else
        {
            \App::setlocale("en");
        }

        return $next($request);
    }
}
