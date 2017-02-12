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
    public function handle($request, Closure $next, $role1, $role2=null)
    {
        $roles = [$role1, $role2];
        // dd($roles);
        if (Auth::guest()){
            return redirect('login');
        } else{
            foreach ($roles as $role){
                if ($request->user()->role==$role || $request->user()->role=='admin') {
                    // dd($role);
                    return $next($request);
                }
            }
            
        } 
        return redirect('home');
        // return $next($request);
    }
}
