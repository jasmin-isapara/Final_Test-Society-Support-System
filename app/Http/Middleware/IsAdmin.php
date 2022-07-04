<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }
   
        return redirect('home')->with('error',"You don't have admin access.");

        // if (Auth::check())
        // {
        //     if (Auth::user()->role_as == '1') // 1=Admin  & 0=user
        //     {
        //         return $next($request);
        //     }
        //     else
        //     {
        //         return redirect('home')->with('status', 'Access Denied!! Because You Are Not An Admin');
        //     }
        // }
        // else{
        //     return redirect('/login')->with('status', 'Please Login First');
        // }
        // return $next($request);
    }
}
