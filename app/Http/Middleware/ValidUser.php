<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class ValidUser
{
    /**
     * Handle an incoming request.
     *
     */
    public function handle(Request $request, Closure $next): Response
    {
        //return $next($request);
        if(Auth::check()){
            return $next($request);
        }else{
            return redirect()->route('/login');
        }
    }
}
