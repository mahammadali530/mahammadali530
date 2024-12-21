<?php

namespace App\Http\Controllers;

use App\Http\Controllers\logincontroller;
use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
//use Illuminate\Support\Facades\DB;

use App\Models\rajister;


class logincontroller extends Controller
{
    
    function Register(Request $request)
    {
        $student = new login();
        $student->name = $request->name;
        $student->email = $request->email;
        // Hash::make( $request->password);
        $student->number = $request->number;
        $student->plan_password = $request->password;
        $student->password = Hash::make( $request->password);
        $student->save();
        if ($student) {
            return redirect('login');
        } else {
            return 'failed';
        }
    }

    function add()
    {
        $studentdata = login::all();
        return view('dashboard', ['students' => $studentdata]);
    }

    public function edit($id)
    {
        $student = login::find($id);
        if ($student) {
            return response()->json(['data' => $student]);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }

    public function editstudent(Request $request, $id)
    {
        $student = login::find($id);
        if ($student) {
            $student->name = $request->name;
            $student->email = $request->email;
            $student->number = $request->number;
           
            if ($student->save()) {
                return response()->json(['success' => true]);
            }
        }
        return response()->json(['success' => false]);
    }
   

    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
       
        $user = login::where('email', $request->email)->first();
     
        if ($user && Hash::check($request->password, $user->password)) {
            
            return redirect('/dashboard');
        } 
        return back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
        

        
    }

    
    public function showLoginForm()
    {
        return view('login');
    }

   
    public function dashboard()
    {
        return view('dashboard'); 
    }

    public function changePassword(Request $request)
    {
        
        
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'new_password' => 'required|min:6',
            'new_password_confirmation' => 'required|same:new_password',
        ]);
        
        $user = login::where('email', $request->email)->first();
        
        
        
        $user->password = Hash::make($request->new_password);
        $user->save();
        
        
        
        
        return redirect('/dashboard')->with('success', 'Password changed successfully.');
    }
    
    
}
