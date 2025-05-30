<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\Response;

class UserAcces
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $userType)

    {

        if(Auth::user()->type == $userType){

            return $next($request);

        }
        
        abort(401);

        // return response()->json(['You do not have permission to access for this page.']);

        /* return response()->view('errors.check-permission'); */

    }

}
