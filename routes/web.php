<?php

use App\Http\Controllers\AppealController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EmployerControler;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index'])->name('home');

Route::middleware(['guest'])->group(function () {
    Route::get('/stajyer-login',[HomeController::class,'stajyerlogin'])->name('stajyer-login');
    Route::get('/stajyer-register',[HomeController::class,'stajyerregister'])->name('stajyer-register');
    Route::get('/stajveren-login',[HomeController::class,'stajverenlogin'])->name('stajveren-login');
    Route::post('/login',[CustomAuthController::class,'login'])->name('login');
    Route::post('/register',[CustomAuthController::class,'register'])->name('register');
    Route::post('/stajveren-login',[CustomAuthController::class,'stajverenlogin'])->name('stajveren-login');
    Route::post('/stajveren-login',[EmployerControler::class,'login'])->name('stajveren-login');
});


Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->name('dashboard');
    Route::get('/adverts',[HomeController::class,'adverts'])->name('adverts');
    Route::get('/advert/{id}',[CustomAuthController::class,'advert'])->name('advert');
    Route::post('/logout',[CustomAuthController::class,'logout'])->name('logout');
    Route::get('/logout',[CustomAuthController::class,'logout'])->name('logout');
    Route::get('/profile',[ProfileController::class,'index'])->name('profile');
    Route::put('/profile/update',[ProfileController::class,'update'])->name('profile.update');

    Route::get('myappeals',[AppealController::class,'index'])->name('myappeals');
    Route::post('/makeappeal/{id}',[AppealController::class,'makeappeal'])->name('makeappeal');
    Route::get('myappels/delete/{id}', [AppealController::class,'delete'])->name('myappeals.delete');
});

Route::middleware(['auth','usercheck'])->prefix('employer')->group(function (){
    Route::get('/dashboard',[EmployerControler::class,'index'])->name('employer.index');
    Route::get('/profile',[EmployerControler::class,'profile'])->name('employer.profile');
    Route::put('/profile/update',[EmployerControler::class,'update'])->name('employer.update');
    Route::post('advert-add', [EmployerControler::class,'advertadd'])->name('employer.advertadd');
    Route::get('advert/delete/{id}', [EmployerControler::class,'deleteAdvert'])->name('advert.delete');
});
