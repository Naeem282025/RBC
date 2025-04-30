<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller  // <-- Controller is now properly recognized
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers = Register::all();
        return response()->json($registers);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:registers',
        'password' => 'required|string|min:8|confirmed',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($validator->fails()) {
        return redirect()->route('register')
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


    $register = Register::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'image_photo_url' => $imageName,
    ]);
    $adminRole = Role::find(501);
        if ($adminRole) {
            $register->roles()->attach($adminRole->id);
        }



    return redirect()->route('login')->with('success', 'Registration successful. Please login.');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $register = Register::find($id);

        if (!$register) {
            return response()->json(['message' => 'Register not found'], 404);
        }

        return response()->json($register);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $register = Register::find($id);

        if (!$register) {
            return response()->json(['message' => 'Register not found'], 404);
        }

        return response()->json($register);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $register = Register::find($id);

        if (!$register) {
            return response()->json(['message' => 'Register not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:registers,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Update fields
        $register->name = $request->name;
        $register->email = $request->email;
        
        if ($request->filled('password')) {
            $register->password = Hash::make($request->password);
        }

        $register->save();

        return response()->json([
            'message' => 'Register updated successfully',
            'register' => $register
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $register = Register::find($id);

        if (!$register) {
            return response()->json(['message' => 'Register not found'], 404);
        }

        $register->delete();

        return response()->json(['message' => 'Register deleted successfully']);
    }
}
