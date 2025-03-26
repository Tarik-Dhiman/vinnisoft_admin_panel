<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ForgotPasswordController;




Route::redirect('/', '/login');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');

Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset.form');
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');



Route::middleware('auth.custom')->group(function () {

    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function (){
        Route::get('/', [DashboardController::class, 'index'])->name('index');


    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function (){
        Route::get('/', [ProfileController::class, 'index'])->name('index');

        Route::post('/', [ProfileController::class, 'update'])->name('update');

    });

    Route::group(['prefix' => 'table', 'as' => 'table.'], function (){
        Route::get('/', [TableController::class, 'index'])->name('index');


    });



});
