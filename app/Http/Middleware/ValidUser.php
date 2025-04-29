<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ValidUser
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $user = null;

        // First check if admin is logged in
        if (Auth::guard('register')->check()) {
            $user = Auth::guard('register')->user();
        }
        // Then check if employee is logged in
        elseif (Auth::guard('employee')->check()) {
            $user = Auth::guard('employee')->user();
        }

        // If no user found from any guard
        if (!$user) {
            return redirect()->route('login.html');
        }

        // If user found, check role
        $roleNames = $user->roles->pluck('name');

        if ($roleNames->contains($role)) {
            return $next($request);
        }

        // If user logged in but wrong role
        return redirect()->route('login.html');
    }
}
