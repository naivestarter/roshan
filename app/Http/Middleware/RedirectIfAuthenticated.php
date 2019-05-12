<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
           
        switch ($guard) {
            case 'municipality':
            $link='/municipality/dashboard';
            break;
            case 'datacollector':
            $link='/datacollector/dashboard';
            break;
            default:
            $link='/';
            break;
        }       
        if (Auth::guard($guard)->check())
        {
            return redirect($link);
        }
        return $next($request);
    }
}
