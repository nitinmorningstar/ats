<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role = 'admin')
    {
        if(!$request->user('web')->hasRole($role))
        {
            return redirect()->back()->with('error',"You are not authenticated user");
        }
        return $next($request);
    }
}
