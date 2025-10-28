<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guards): Response
    {
        // // Redirect back to login if not authenticate
        // if (!auth()->check()) {
        //     return redirect()->route('userSignin');
        // }

        if (Auth::check()) {
            $user = Auth::user();

            // Check redirecting route for login role

            return match ($user->role) {
                'admin' => redirect()->route('admin.index'),
                'user' => redirect()->route('register.showRegistrationForm'),
                default => redirect()->route('home')
            };
        }

        return $next($request);
    }
}
