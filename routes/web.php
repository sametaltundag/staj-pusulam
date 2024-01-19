<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/stajyer-login',[HomeController::class,'stajyerlogin'])->name('stajyer-login');
    Route::get('stajyer-register',[HomeController::class,'stajyerregister'])->name('stajyer-register');
});

Route::post('/login',[CustomAuthController::class,'login'])->name('login');
