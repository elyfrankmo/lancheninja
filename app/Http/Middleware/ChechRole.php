<?php

namespace LancheNinja\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ChechRole
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
        if(!Auth::check()){
            return redirect('/login');
        }

        if(Auth::user()->role <> "admin"){
            Auth::logout();
            return redirect('/login');
        }

        return $next($request);
    }
}
