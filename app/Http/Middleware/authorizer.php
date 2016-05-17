<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class authorizer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::guest()){
            return redirect('login');
        } elseif ($request->user()->role!==$role && $request->user()->role!=='admin') {
            return redirect('home');
        }
        return $next($request);
    }
}
