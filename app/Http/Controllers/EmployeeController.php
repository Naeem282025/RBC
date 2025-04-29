<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Leave;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller 
{
    // Get all employees
    public function index()
    {
        $employees = Employee::with('department')->get();
        return response()->json($employees);
    }
    public function getDepartmentAll()
{
    $departments = Department::all();
    $stats = CommonController::getStatistics();
    return view('add-employee', compact('departments', 'stats'));
}



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees',
            'password' => 'required|string|min:8',
            'estart_date' => 'date',
            'sstart_date' => 'date',
            'job_title' => 'required|string|max:255',
            'employment_type' => 'required|string|max:255',
            'team' => 'string|max:255',
            'line_manager' => 'string|max:255',
            'office_name' => 'string|max:255',
            'salary_amount' => 'required|numeric',
            'salary_frequency' => 'required|string|max:255',
            'department_id' => 'required|integer|exists:departments,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
    
        if ($validator->fails()) {
            return redirect()->route('add-employee.html')
                ->withErrors($validator)
                ->withInput();  // Retains old input except for password fields
        }
    
        $imageName = 'default.jpg'; // Set default image name

if ($request->hasFile('image')) {
    $image = $request->file('image'); // Get uploaded file
    $imageName = time() . '_' . $image->getClientOriginalName(); // Unique filename
    $destinationPath = public_path('assets/img/profiles'); // Correct directory path
    
    // Move the image to the public/assets/img/profiles directory
    $image->move($destinationPath, $imageName);
}

// Now $imageName is always defined, whether an image is uploaded or not

$employee = Employee::create([
    'first_name' => $request->first_name,
    'last_name' => $request->last_name,
    'email' => $request->email,
    'password' => Hash::make($request->password),
    'estart_date' => $request->estart_date,
    'sstart_date' => $request->sstart_date,
    'job_title' => $request->job_title,
    'employment_type' => $request->employment_type,
    'team' => $request->team,
    'line_manager' => $request->line_manager,
    'office_name' => $request->office_name,
    'salary_amount' => $request->salary_amount,
    'salary_frequency' => $request->salary_frequency,
    'department_id' => $request->department_id,
    'image_photo_url' => $imageName,
]);

        // Assign user role if it exists
        $userRole = Role::find(502);
        if ($userRole) {
            $employee->roles()->attach($userRole->id);
        }
    
        return redirect()->route('index.html');
    }
    public function showLeavePage()
{
    // Fetch leave records for the logged-in employee
    $employee = Auth::user();
    $employeeId = session('id');
    $leaveList = Leave::where('employee_id', $employeeId)->get();

    return view('leave', compact('leaveList'));
}

public function handleLeaveSubmission(Request $request)
{
    // Validate form
    $validator = Validator::make($request->all(), [
        'leave_type' => 'required|string',
        'applied_date' => 'required|date',
        'from_date' => 'required|date',
        'to_date' => 'required|date|after_or_equal:from_date',
        'reason' => 'nullable|string',
    ]);

    if ($validator->fails()) {
        return redirect()->route('leave')
            ->withErrors($validator)
            ->withInput();
    }

    $employeeId = session('id'); // Get employee ID from session

$leave = new Leave([
    'leave_type' => $request->leave_type,
    'employee_id' => $employeeId, // Use session ID
    'applied_date' => $request->applied_date,
    'from_date' => $request->from_date,
    'to_date' => $request->to_date,
    'reason' => $request->reason,
    'status' => 'PENDING',
]);

// Check if employee_id is NULL before saving
if (!$leave->employee_id) {
    return back()->withErrors(['employee_id' => 'Employee ID is missing from session.']);
}

$leave->save();


    return redirect()->route('leave');
}

    // Show a specific employee with department
    public function show($id)
    {
        $employee = Employee::with('department')->find($id);

        if (!$employee) {
            return response()->json(['message' => 'Employee not found'], 404);
        }

        return response()->json($employee);
    }

    public function view(Request $request)
    {
        $employeeId = $request->input('employeeId');

        // Fetch employee details
        $employee = Employee::findOrFail($employeeId);

        // Fetch leaves for the employee
        $leaveList = Leave::where('employee_id', $employee->id)->get();

        // Pass data to the view
        return view('employee-leave-list', compact('employee', 'leaveList'));
    }

    // Update an employee
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        if (!$employee) {
            return response()->json(['message' => 'Employee not found'], 404);
        }

        $request->validate([
            'email' => 'email|unique:employees,email,' . $id,
            'salary_amount' => 'numeric',
            'department_id' => 'integer|exists:departments,id',
        ]);

        $employee->update($request->all());

        return response()->json(['message' => 'Employee updated successfully', 'employee' => $employee]);
    }

    // Delete an employee
    public function destroy($id)
    {
        $employee = Employee::find($id);
        if (!$employee) {
            return response()->json(['message' => 'Employee not found'], 404);
        }

        $employee->delete();

        return response()->json(['message' => 'Employee deleted successfully']);
    }

    // Get the department of an employee
    public function getDepartment($id)
    {
        $employee = Employee::find($id);

        if (!$employee) {
            return response()->json(['message' => 'Employee not found'], 404);
        }

        $department = $employee->department;

        if (!$department) {
            return response()->json(['message' => 'Department not assigned'], 404);
        }

        return response()->json($department);
    }
}
