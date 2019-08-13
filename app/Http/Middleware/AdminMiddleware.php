<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Session;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    // public function handle($request, Closure $next)
    // {

    //     if(Session::get('admin') == ''){
    //         return redirect('A/login');
    //     }     
    //     return $next($request);
        
        
    // }

    public function handle($request, Closure $next, $guard = 'admin')
    {

        if (!Auth::guard($guard)->check()) {
            return redirect('/Admin_Login');
        }
    
        return $next($request);
    }
    public function handle($request, Closure $next){
        if(auth()->user()->isAdmin == 1){
            return $next($request);
        }
        return redirect(‘home’)->with(‘error’,’You have not admin access’);
    }
    
}
