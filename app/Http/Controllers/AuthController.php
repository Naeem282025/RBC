<?php

namespace App\Http\Controllers;

use App\Models\Register; // Admin Model
use App\Models\Employee; // Employee Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Handle login request
    public function login(Request $request)
    {
        // Validate the login form
        $this->validateLogin($request);

        // Decide which guard to use based on email
        $guard = $this->getGuard($request);

        // Get the user by email from correct table
        $user = $this->getUserByEmail($guard, $request->email);

        if (!$user) {
            return $this->sendFailedLoginResponse($request);
        }

        // Check hashed password
        if (!Hash::check($request->password, $user->password)) {
            return $this->sendFailedLoginResponse($request);
        }

        // Manually login the user with correct guard
        Auth::guard($guard)->login($user);
        session([
            'Guest' => 'Welcome:',
            'id' => $user->id,
            'firstname' => $user->first_name,
            'lastname' => $user->last_name,
            'user_name' => $user->name, // Make sure 'name' exists in your model
            'user_email' => $user->email,
            'image' => $user->image_photo_url,
            'estart_date' => $user->estart_date,
            'sstart_date' => $user->sstart_date,
            'job_title' => $user->job_title,
            'employment_type' => $user->employment_type,
            'team' => $user->team,
            'line_manager' => $user->line_manager,
            'office_name' => $user->office_name,
            'salary_amount' => $user->salary_amount,
            'salary_frequency' => $user->salary_frequency,
            'department_id' => $user->department_id,
            'department_name' => $user->department ? $user->department->name : 'Not Assigned',
        ]);
        

        // Get the user's roles
        $roleNames = $user->roles->pluck('name');

        // Check if allowed roles
        if ($roleNames->contains('ROLE_USER') || $roleNames->contains('ROLE_ADMIN')) {
            return redirect()->intended($this->redirectPath($guard));
        } else {
            Auth::guard($guard)->logout(); // logout if not authorized
            return redirect()->route('login');
        }
    }

    // Validate login request
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
    }

    // Decide the guard based on the email
    protected function getGuard(Request $request)
    {
        $admin = Register::where('email', $request->email)->first();

        if ($admin) {
            return 'register'; // Admin
        }

        return 'employee'; // Employee
    }

    // Get user by email depending on guard
    protected function getUserByEmail($guard, $email)
    {
        if ($guard === 'register') {
            return Register::where('email', $email)->first();
        }
 
        return Employee::where('email', $email)->first();
    }

    // Redirect path based on guard
    protected function redirectPath($guard)
    {
        if ($guard === 'register') {
            return route('index'); // Admin dashboard
        }

        return route('employees-dashboard'); // Employee dashboard
    }

    // Send failed login response
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'email' => ['These credentials do not match our records.'],
        ]);
    }

     // Handle logout
     public function logout(Request $request)
     {
         if (Auth::guard('register')->check()) {
             Auth::guard('register')->logout();
         } elseif (Auth::guard('employee')->check()) {
             Auth::guard('employee')->logout();
         }
 
         $request->session()->invalidate();
         $request->session()->regenerateToken();
 
         return redirect('/login.html')->with('success', 'Logout successful');
     }
 }