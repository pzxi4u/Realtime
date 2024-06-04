<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'welcome']) -> name('welcome');
Route::get('/home', [UserController::class, 'HomePage']) -> name('homepage');
Route::get('/SigUp', [UserController::class, 'signup'])->name('signup');
Route::get('/SignIn',[UserController::class, 'signin'])->name('signin');
Route::get('/forgotPassword',[UserController::class, 'forgotpassword'])->name('forgotPassword');
