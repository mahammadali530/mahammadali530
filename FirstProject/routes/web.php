<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ForgotPasswordController;


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/post/{id?}', function (string $id = null) {
//     if($id){
//         return "<h1>Post with ID: $id</h1>";
//     }else{
//         return "<h1>No post ID provided</h1>";
//     }
//     // return view('post');
// });
// Route::get('/post/{name}', function ($name) {
//     return view('post', ['name' => $name]);
// });
// Route::view('/post', 'post');
// Route::get('/user-from', function () {
//     return view('user-from');
// });
//Route::post('/adduser', [UserController::class,'addUser']);

 //Route::get('user', [UserController::class,'user']);

//  Route::post('user', [UserController::class,'login']);
//  Route::view('form','user');

Route::view('add','add-student')->name('adddata');
Route::post('add', [StudentController::class,'add']);

Route::get('add', [StudentController::class,'addd']);

Route::get('delete/{id}', [StudentController::class,'delete']);

Route::get('edit/{id}', [StudentController::class,'edit']);

Route::put('edit-student/{id}', [StudentController::class,'editstudent']);

Route::get('/excel-export', [StudentController::class,'filter'])->name('export');

Route::get('/', [StudentController::class,'index']);

Route::get('/filter', [StudentController::class,'filter']);
Route::post('/import', [StudentController::class, 'import'])->name('import');


// rajister


Route::view('Register','Register-form')->name('adddata');
Route::post('Register', [loginController::class,'Register']);

Route::view('/login', 'login')->name('login');

Route::post('login', [loginController::class,'login'])->name('password.request');

Route::post('login', [LoginController::class, 'login'])->name('login.post');

Route::get('password/reset', [ForgotPasswordController::class, 'showResetForm'])->name('password.request');
Route::post('password/reset', [ForgotPasswordController::class, 'resetPassword'])->name('password.reset');





Route::get('/login', [logincontroller::class, 'showLoginForm'])->name('login');
Route::post('/login', [logincontroller::class, 'login']);


// Dashboard route
Route::get('/dashboard', [logincontroller::class, 'dashboard']);

Route::get('dashboard', [logincontroller::class,'add']);

Route::get('edit/{id}', [logincontroller::class,'edit']);

Route::put('edit-student/{id}', [logincontroller::class,'editstudent']);

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // Redirect to login page after logout
})->name('logout');

Route::get('/forgot-password', function () {
    return view('forgot-password'); // Return the forgot password view
})->name('forgot-password');

Route::post('/change-password', [loginController::class, 'changePassword'])->name('change-password');
//Route::post('/change-password', [loginController::class, 'updatepassword'])->name('update-password');
