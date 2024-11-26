<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/signup', [\App\Http\Controllers\SignupController::class, 'create'])->name('signup.create');
Route::post('/signup', [\App\Http\Controllers\SignupController::class, 'store'])->name('signup.store');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'create'])->name('login');

Route::get('/home',[HomeController::class,'index'])->name('home');

Route::resource('job',JobController::class);
Route::resource('user',UserController::class);

Route::get('/func/{func}',[\App\Http\Controllers\FuncController::class,'show']);
