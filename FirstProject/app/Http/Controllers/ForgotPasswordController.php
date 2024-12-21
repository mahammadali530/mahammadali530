<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\login;

class ForgotPasswordController extends Controller
{
    public function showResetForm()
    {
        return view('password_reset');
    }

    // Handle the password reset logic
    public function resetPassword(Request $request)
    {
        
        // Validate request data
        $request->validate([
            'email' => 'required|email|exists:rajister,email',
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed', 
        ]);

        // Find the user by email
        $user = login::where('email', $request->email)->first();
        
        // Check if the old password matches the current hashed password
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Old password does not match.']);
        }

        // Hash and update the new password
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect with success message
        return redirect()->route('login')->with('status', 'Password successfully updated. Please log in with your new password.');
    }
}
