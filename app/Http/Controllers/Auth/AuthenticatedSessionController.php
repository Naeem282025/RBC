<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle the post-login redirection based on the user's role.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(Request $request, $user)
    {
        // Check if the user has the 'ADMIN' role and redirect accordingly
        if ($user->roles->contains('name', 'ADMIN')) {
            return redirect()->route('index.html');  // Redirect to the admin dashboard
        } else {
            return redirect()->route('employee.dashboard');  // Redirect to the user dashboard
        }
    }
}
