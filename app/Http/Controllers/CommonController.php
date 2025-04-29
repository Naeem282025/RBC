<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Leave;
use App\Models\Department;
use Illuminate\Support\Facades\Log; 
class CommonController extends Controller
{
    public static function calculateTotalSalary()
    {
        $employees = Employee::all();
        $totalSalary = 0;
    
        foreach ($employees as $employee) {
            // No need for strtolower() since DB stores "Annually" and "Monthly"
            $salaryFrequency = trim($employee->salary_frequency ?? '');
    
            switch ($salaryFrequency) {
                case "Annually": // Match the exact stored value
                    $totalSalary += $employee->salary_amount;
                    break;
                case "Monthly": // Match the exact stored value
                    $totalSalary += $employee->salary_amount * 12;
                    break;
            }
        }
    
        return $totalSalary;
    }
    

    public static function getStatistics()
    {
        $totalEmployees = Employee::count();
        $totalLeaves = Leave::count();
        $totalDepartments = Department::count();
       $totalSalary = self::calculateTotalSalary(); // Call salary calculation method

        return [
            'totalEmployees' => $totalEmployees,
            'totalLeaves' => $totalLeaves,
            'totalDepartments' => $totalDepartments,
            'totalSalary' => $totalSalary, // ✅ Fixed space issue
        ];
    }

    public function showDashboard()
    {
        $stats = self::getStatistics(); // Get statistics
        return view('dashboard', compact('stats')); // Pass data to the view
    }
}
