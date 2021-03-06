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
                    case 'admin' :
                        if (Auth::guard($guard)->check()) {
                            return redirect()->route('admin.dashboard');
                        }
                        break;
                    case 'district' :
                        if (Auth::guard($guard)->check()) {
                            return redirect()->route('district.dashboard');
                        }
                        break;
                    case 'shg' :
                        if (Auth::guard($guard)->check()) {
                            return redirect()->route('shg.dashboard');
                        }
                        break;
                    default:
                        if (Auth::guard($guard)->check()) {
                            return redirect()->route('account');
                        }
                        break;
                }
             return $next($request);
        }
}
