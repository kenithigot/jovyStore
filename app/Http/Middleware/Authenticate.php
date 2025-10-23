<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request): ?string
    {
        // If the request does not expect JSON, redirect to the signin route
        if (!$request->expectsJson()) {
            return route('userLoginIndex');
        }
        return null;
    }
}
