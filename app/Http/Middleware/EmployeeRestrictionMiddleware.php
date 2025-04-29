<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeRestrictionMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is logged in as 'employee'
        if (Auth::guard('employee')->check()) {
            // List of restricted URLs for 'employee'
            $restrictedUrls = [
                'index.html',
                'admin-dashboard',
                'leave-details.html'
            ];

            // If current request URL is in the restricted list, block access
            if (in_array($request->path(), $restrictedUrls)) {
                abort(403, 'Unauthorized Access');
            }
        }

        return $next($request);
    }
}
