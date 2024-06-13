<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, "index"])->name('home');

Route::get('/account/registration', [AccountController::class, "registration"])->name('account.registration');
Route::get('/account/login', [AccountController::class, "login"])->name('account.login');
Route::post('/account/process-register', [AccountController::class, "saveRegistration"])->name('account.register');
