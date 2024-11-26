<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', [\App\Http\Controllers\SignupController::class, 'create'])->name('signup.create');
Route::post('/signup', [\App\Http\Controllers\SignupController::class, 'store'])->name('signup.store');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'create'])->name('login');

Route::get('/home',[HomeController::class,'index'])->name('home');

Route::resource('job',JobController::class);
