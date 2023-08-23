<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
        
            if ($user->role_as == '1') {
                return $next($request);
            } else {
                return redirect('/home')->with('status', 'Access Denied! You are not an admin');
            }
        } else {
            return redirect('/home')->with('status', 'Please Login First');
        }
 
    }
}
