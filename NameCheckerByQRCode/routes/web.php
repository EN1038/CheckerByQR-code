<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admins/dashboards');
});

Route::get('/welcome',[HomeController::class,"showHome"])->name('show_home');

//////////Route Login //////////////
Route::get('/login-form',[LoginController::class,'loginForm'])->name('login');
Route::get('/register-form',[LoginController::class,'registerForm'])->name('login');
Route::post('register',[LoginController::Class,'register'])->name('register_post');
Route::post('login-post',[LoginController::class,'login'])->name('login_post');

