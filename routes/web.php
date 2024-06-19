<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, "index"])->name('home');

Route::group(['account'], function () {
    //guest route
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/account/registration', [AccountController::class, "registration"])->name('account.registration');
        Route::post('/account/process-register', [AccountController::class, "saveRegistration"])->name('account.register');
        Route::get('/account/login', [AccountController::class, "login"])->name('account.login');
        Route::post('/account/authenticate', [AccountController::class, "authenticate"])->name('account.authenticate');
    });


    //authenticated route
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/account/profile', [AccountController::class, "profile"])->name('account.profile');
        Route::get('/account/logout', [AccountController::class, "logout"])->name('account.logout');
        Route::post('/account/updateprofile', [AccountController::class, "updateProfile"])->name('account.updateprofile');


        
    });
});
