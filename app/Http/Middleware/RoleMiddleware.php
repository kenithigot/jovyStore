<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$role)
    {

        // Redirect to Login if not authenticated
        if (!Auth::check()) {
            return redirect()->route('userLoginIndex');
        };

        $user = Auth::user();

        if (!in_array($user->user_role,$role)) {

            // Check redirecting route for login role
            return match ($user->user_role) {
                'admin' => redirect()->route('admin.index'),
                'user' => redirect()->route('user.asdasd'),
                default => redirect()->route('home')
            };
        }
        return $next($request);
    }
}
