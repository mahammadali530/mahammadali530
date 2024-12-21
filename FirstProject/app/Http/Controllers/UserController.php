<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    // function addUser(Request $Request){
    // $Request -> validate([
    //     'username' => 'required | min:3 | max:10' ,
    //     'email' => 'required |email ',
    //     'city' => 'required',
        
    // ]);
    // return $Request;
    // }

    // function user(){
    //     $user = DB::select('select * from curd2');
    //     return view('user', ['users' => $user]);

    // }
    function login(Request $req){
        return $req;
    }
   
}
 