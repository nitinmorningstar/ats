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
        if (Auth::guard($guard)->check()) {
            $user=Auth::guard($guard)->user();
            if($user->role->role == 'admin'){
                return redirect()->route('admin.dashboard');
            }elseif($user->role->role == 'user'){
                return redirect()->route('index');
            }
            // return redirect('/home');
        }

        return $next($request);
    }
}
