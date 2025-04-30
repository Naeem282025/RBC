<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
class DepartmentController2 extends Controller
{
    /**
     * Display a listing of the departments.
     */
    public function index()
    {
        $departments = Department::all();
        return response()->json($departments);
    }
    /**
     * Store a newly created department in storage.
     */
   public function store(Request $request)
{
    // // Convert date format before validation
    // if ($request->has('established_date') && !empty($request->established_date)) {
    //     try {
    //         $formattedDate = Carbon::createFromFormat('d/m/Y', $request->established_date)->format('Y-m-d');
    //         $request->merge(['established_date' => $formattedDate]);
    //     } catch (\Exception $e) {
    //         return redirect()->route('company.html')
    //             ->withErrors(['established_date' => 'Invalid date format. Use DD/MM/YYYY.'])
    //             ->withInput();
    //     }
    // }

    // Validation
    $validator = Validator::make($request->all(), [
        'department_name' => 'required|string|max:255|unique:departments',
        'contact_email' => 'nullable|email|max:255',
        'number_of_employees' => 'nullable|integer',
        'head_of_department' => 'nullable|string|max:255',
        'established_date' => 'nullable|date|before_or_equal:today',
        'department_code' => 'required|string|max:50|unique:departments,department_code'
    ]);

    // If validation fails, return with errors
    if ($validator->fails()) {
        return redirect()->route('department')
            ->withErrors($validator)
            ->withInput();
    }
    $stats = CommonController::getStatistics();
    // Store data in the database
    $department = Department::create($request->all());

    return redirect()->route('index');
}
    /**
     * Display the specified department.
     */
    public function show($id)
    {
        $department = Department::findOrFail($id);
        return response()->json($department);
    }

    /**
     * Show the form for editing the specified department.
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('departments.edit', compact('department')); // Ensure Blade file exists
    }

    /**
     * Update the specified department in storage.
     */
    public function update(Request $request, $id)
    {
        $department = Department::findOrFail($id);

        // Validate request
        $request->validate([
            'department_name' => 'required|string|max:255',
            'contact_email' => 'nullable|email|max:255',
            'number_of_employees' => 'nullable|integer',
            'head_of_department' => 'nullable|string|max:255',
            'established_date' => 'nullable|date',
            'department_code' => 'required|string|max:50|unique:departments,department_code,' . $id
        ]);

        // Update department
        $department->update($request->all());

        return response()->json(['message' => 'Department updated successfully', 'department' => $department]);
    }

    /**
     * Remove the specified department from storage.
     */
    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        return response()->json(['message' => 'Department deleted successfully']);
    }
}
