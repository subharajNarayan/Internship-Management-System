<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if(!auth()->check())
            return redirect('/login');

        if(auth()->user()->is_admin || count(auth()->user()->hasCompany()) > 0)
            return $next($request);

        return redirect('/');
    }
}
