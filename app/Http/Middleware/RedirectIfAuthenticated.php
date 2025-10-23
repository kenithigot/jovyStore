<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards)
    {

        // If the user is authenticated, redirect to the dashboard route
        if (Auth::check() && !$request->session()->has('loginSuccess')) {
            return redirect()->route('index');
        }

        return $next($request);
    }
}
