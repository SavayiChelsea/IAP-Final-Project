<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        DB::beginTransaction();

        try {
            // Validation
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Create User
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Additional Logic (if any)
            
            // Commit the transaction
            DB::commit();

            return redirect('/login')->with('status', 'User registered successfully! Please log in.');
        } catch (\Exception $e) {
            // If an exception occurs, rollback the transaction
            DB::rollback();

              // Log the exception using error_log
              error_log('Error occurred: ' . $e->getMessage() . ' at line ' . $e->getLine());

            // Show the error message along with the line number
            return redirect('/register')->with('error', 'Registration failed. Error: ' . $e->getMessage() . ' at line ' . $e->getLine());
        }
    }
    public function showRegistrationForm()
    {
        return view('register');
    }
}
