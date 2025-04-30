<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController2;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\IndexController;
use App\Models\Leave;

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

//Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm']);
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');


// ✅ Public Routes
Route::get('/', function () {
    return view('register');
})->name('register');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/loginData', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::middleware('auth')->group(function () {
   
//✅ Employee Routes
    Route::get('/employees-dashboard', function () {

          $employeeId = session('id');
    $leaveList = Leave::where('employee_id', $employeeId)->get();

        return view('employees-dashboard',compact('leaveList'));
    })->name('employees-dashboard');
    Route::get('/leave', [EmployeeController::class, 'showLeavePage'])->name('leave');
    Route::post('/leaveData', [EmployeeController::class, 'handleLeaveSubmission'])->name('leave.submit');
    

//✅ Admin Routes
//    // Route::get('/index.html', [IndexController::class, 'showIndex'])->name('index.html')
//     ;//->middleware(['RegisterTest:class']);
//     Route::get('/index.html', [IndexController::class, 'showIndex'])
//     ->middleware('auth:register') // <-- Protect this page
//     ->name('index.html');
Route::get('/index', [IndexController::class, 'showIndex'])// <- Here you pass the required role
    ->name('index');


Route::post('/store', [RegisterController::class, 'store']);
    Route::post('/addDepartment', [DepartmentController2::class, 'store']);
    
    Route::get('/add-employee', [EmployeeController::class, 'getDepartmentAll'])->name('add-employee');
    Route::post('/addEmployee', [EmployeeController::class, 'store'])->name('employee.store');

    Route::get('/leave-details', [LeaveController::class, 'showAdminDashboard'])->name('leave-details');
    Route::post('/view', [EmployeeController::class, 'view'])->name('view.leave');
    Route::post('/approve', [LeaveController::class, 'approveLeave'])->name('approve.leave');
    Route::post('/reject', [LeaveController::class, 'rejectLeave'])->name('reject.leave');

// ✅ Dynamic Static Page Routes
$pages = [
    'admin', 'calendar', 'cantact-reports', 'create-review',
    'custom-timeoff-approver', 'details', 'documents',
    'edit-review', 'email-reports', 'employee-leave-list',
    'employee-offices', 'employees-list', 'employees-offices-list',
    'employees-team', 'employees', 'employment',
    'leave-reports', 'manage-leadership', 'manage', 'payroll-admin',
    'payroll-reports', 'payroll', 'profile-review', 'profile-settings',
    'reports', 'reviews', 'security-reports', 'settings-timeoff',
    'settings', 'super-admin', 'team-lead', 'team-member',
    'time-off', 'work-from-home-reports','profile-reviews','employees-offices',
    'department'
];

foreach ($pages as $page) {
    Route::get("/$page", function () use ($page) {
        return view($page);
    })->name("$page");
}
Route::get('/forgot-password.html', function () {
    return view('email');
})->name('forgot-password.html');

