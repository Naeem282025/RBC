<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\CommonController;
use App\Models\Employee;
class IndexController extends Controller
{
    public function showIndex(Request $request){

        $userId = request()->session()->get('user_id');
        $firstname = request()->session()->get('firstname');
        $userName = request()->session()->get('user_name','Guest');
        $userEmail = request()->session()->get('user_email');
        $userImage = request()->session()->get('image');
        $employees = Employee::all(); // Fetch all employees
        session(['all_employees' => $employees]);

        $stats = CommonController::getStatistics(); // Call CommonController
        return view('index', compact('stats')
        );
    }
}
