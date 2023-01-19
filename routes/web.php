<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*********************************************************
 * Auth Route
 *********************************************************/

// login user
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('guest');
// register user
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'register'])->name('register')->middleware('guest');
// logout user
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout')->middleware('auth');
// forgot password
Route::get('/forgot-password', [\App\Http\Controllers\ForgotPasswordController::class, 'index'])->name('password.forgot')->middleware('guest');
Route::post('/forgot-password', [\App\Http\Controllers\ForgotPasswordController::class, 'forgotPassword'])->name('password.forgot')->middleware('guest');
Route::get('/forgot-password-mail-send', [\App\Http\Controllers\ForgotPasswordController::class, 'forgotPasswordMailSend'])->name('password.forgot.mailSend')->middleware('guest');
// reset password
Route::get('/reset-password', [\App\Http\Controllers\ResetPasswordController::class, 'index'])->name('password.reset')->middleware('guest');
Route::post('/reset-password', [\App\Http\Controllers\ResetPasswordController::class, 'resetPassword'])->name('password.reset')->middleware('guest');
