<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('/login.html'); // Redirect if not logged in
        }

        if (Auth::user()->role !== $role) {
            return redirect('/unauthorized'); // Redirect if role does not match
        }

        return $next($request);
    }
}
