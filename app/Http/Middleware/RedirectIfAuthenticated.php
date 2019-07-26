<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
    {
        public function handle($request, Closure $next, $guard = null)
        {
            if ($guard == "company" && Auth::guard($guard)->check()) {
                return redirect('/company');
            }
            if ($guard == "apllicant" && Auth::guard($guard)->check()) {
                return redirect('/apllicant');
            }
            if (Auth::guard($guard)->check()) {
                return redirect('/home');
            }

            return $next($request);
        }
    }
