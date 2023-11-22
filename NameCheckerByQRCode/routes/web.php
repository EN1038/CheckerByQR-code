<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Models\Activity;

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
    return view('activity.activity_genQRcode');
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
Route::post('make-activity-post',[HomeController::class,'makeActivity'])->name('make_activity_post');


// activity 
Route::get('activity-box/{id}',[HomeController::class,'showActivityBoxPage'])->name('show_activity_box');
Route::get('activity-profile-page',[HomeController::class,'showActivityProfile'])->name('show_activity_profile');
Route::get('activity-dashboard/{id}',[HomeController::class,'showActivityDashboard'])->name('show_activity_dashboard');
Route::post('activity-update-name/{id}',[ActivityController::class,'updateActivityName'])->name('update_activity_name');
Route::get('activity-delete/{id}',[ActivityController::class,'deleteActivity'])->name('delete_activity');




// Admin //
Route::get('/admin',[AdminController::class,'showAdminPage'])->name('show_admin_page');
Route::get('/admin/table-menu',[AdminController::class,'showAdminTableMenu'])->name('show_admin_table_menu');


//admin table//

Route::get('/admin/table/activity',[AdminController::class,"showTableActivityPage"])->name('show_activity_table');
Route::post('admin/table/activity/edit/{id}',[AdminController::class,"editActivity"])->name('edit_activity');
Route::post('admin/table/activity/delete/{id}',[AdminController::class,"deleteActivity"])->name('delete_activity');

