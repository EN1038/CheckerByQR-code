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
    return view("Home.Home");
});


Route::get('/test-front-end', function () {
    return view('admins.dashboards');
});


Route::get('/welcome',[HomeController::class,"showHome"])->name('show_home');

//////////Route Login //////////////
Route::get('/login-form',[LoginController::class,'loginForm'])->name('login_form');
Route::get('/register-form',[LoginController::class,'registerForm'])->name('register_form');
Route::post('register',[LoginController::class,'register'])->name('register_post');
Route::post('login-post',[LoginController::class,'login'])->name('login_post');
Route::get('logout',[LoginController::class,'logout'])->name('logout');



////////////////////HOME////////////////////////////////
Route::get('make-activity-form',[HomeController::class,'showMakeActivityFormPage'])->name('show_make_activity_form_page');
Route::post('make-activity-post',[HomeController::class,'makeActivity'])->name('make_activity');
Route::get('activity-box/{id}',[HomeController::class,'showActivityBoxPage'])->name('show_activity_box');

