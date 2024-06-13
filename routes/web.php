<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, "index"])->name('home');

Route::get('/registration', [AccountController::class, "registration"])->name('registration');
Route::post('/process-register', [AccountController::class, "saveRegistration"])->name('account.register');
