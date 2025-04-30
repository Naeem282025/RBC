<?php
namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Employee;
use App\Services\EmailService; // Assuming you have an EmailService


class LeaveController extends Controller
{
    protected $emailService;
    public function showAdminDashboard()
    {
        // Get total employees
        $totalEmployees = Employee::count();

        $sickLeave = Leave::where('leave_type', 'Sick Leave')->count();
        $parentalLeave = Leave::where('leave_type', 'Parental Leave')->count();
        $workingFromHome = Leave::where('leave_type', 'Working From Home')->count();
        
        // Get detailed leave records
        $leaveList = Leave::with('employee.department')->get();

        // Calculate leave days for each record
        $days = $leaveList->map(function ($leave) {
            return Carbon::parse($leave->from_date)->diffInDays($leave->to_date) + 1;
        });

        return view('leave-details', compact(
            'totalEmployees', 'sickLeave', 'parentalLeave', 'workingFromHome', 'leaveList', 'days'
        ));
    }


    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    // Approve Leave
    public function approveLeave(Request $request)
    {
        $leaveId = $request->input('leaveId');

        // Find the leave record
        $leave = Leave::findOrFail($leaveId);
        $leave->status = "APPROVED";
        $leave->save();

        // Send Email Notification
        $this->emailService->sendEmail($leave->employee->email, "Leave Approved", "Your leave request has been approved.");

        return redirect('/leave-details')->with('success', 'Leave Approved Successfully');
    }

    // Reject Leave
    public function rejectLeave(Request $request)
    {
        $leaveId = $request->input('leaveId');

        // Find the leave record
        $leave = Leave::findOrFail($leaveId);
        $leave->status = "REJECTED";
        $leave->save();

        // Send Email Notification
        $this->emailService->sendEmail($leave->employee->email, "Leave Rejected", "Your leave request has been rejected.");

        return redirect('/leave-details')->with('error', 'Leave Rejected');
    }
}


