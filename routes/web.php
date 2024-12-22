<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// === Routes For Landing And Other Pages For Clients =====
Route::get('/',[MyController::class, 'home'])->name('home');



// Login For All Users
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-submit', [AuthController::class, 'loginSubmit'])->name('login-submit');
Route::get('/forgot-password', [AuthController::class, 'forgotPass'])->name('forgot-pass');
Route::post('/forgot-password-submit', [AuthController::class, 'forgotPassSubmit'])->name('forgot-pass-submit');


// ==============Routes For Admin ============
Route::middleware(['auth'])->group(function () {

Route::get('/admin', [AdminController::class, 'adminDash'])->name('admin-dash');
Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('admin-profile');


});



// ==============Routes For user ============

Route::get('/register', [AuthController::class, 'userRegister'])->name('user-register');
Route::post('/register-submit', [AuthController::class, 'registerSubmit'])->name('register-submit');

Route::middleware(['auth'])->group(function () {

Route::get('/user', [UserController::class, 'userDash'])->name('user-dash');

});


// ==============Routes For Client Pages  ============
