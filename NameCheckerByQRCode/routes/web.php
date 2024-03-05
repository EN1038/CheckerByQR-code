<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\ExprotController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RoundController;
use App\Models\Activity;





Route::get('/', function () {
    return view("Home.Home");
})->name('index');


// Route::get('/test-front-end', function () {
//     return view('activity.activity_table');
// });



Route::get('/welcome', [HomeController::class, "showHome"])->name('show_home');

//nsru core//
Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/signin', [AuthController::class, 'signinPostback'])->name('signin_postback');
Route::get('/signout', [AuthController::class, 'signout'])->name('signout');
Route::get('/signout_postback', [AuthController::class, 'signoutPostback'])->name('signout_postback');

//////////Route Login //////////////
Route::get('/login-form', [LoginController::class, 'loginForm'])->name('login_form');
Route::get('/register-form', [LoginController::class, 'registerForm'])->name('register_form');
Route::post('register', [LoginController::class, 'register'])->name('register_post');
Route::post('login-post', [LoginController::class, 'login'])->name('login_post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');



////////////////////HOME////////////////////////////////
Route::get('make-activity-form', [HomeController::class, 'showMakeActivityFormPage'])->name('show_make_activity_form_page')->middleware('CheckLogin');
Route::post('make-activity-post', [HomeController::class, 'makeActivity'])->name('make_activity_post');
Route::get('dashboard-stat/{id}',[HomeController::class,'showUserDashboardStat'])->name('user_dashboard_stat');

// activity
Route::get('activity-box/{id}', [HomeController::class, 'showActivityBoxPage'])->name('show_activity_box');
Route::get('activity-profile-page', [HomeController::class, 'showActivityProfile'])->name('show_activity_profile');
Route::get('activity-dashboard/{id}', [HomeController::class, 'showActivityDashboard'])->name('show_activity_dashboard');
Route::post('activity-update-name/{id}', [ActivityController::class, 'updateActivityName'])->name('update_activity_name');
Route::get('activity-delete/{id}', [ActivityController::class, 'deleteActivity'])->name('delete_activity');
Route::post('activity-make-checker-form/{id}', [ActivityController::class, 'makeCheckerForm'])->name('make-checker-form');
Route::post('activity-setting/{id}', [ActivityController::class, 'ActivitySetting'])->name('activity_seting');
Route::get('activity/day-chcker-list/dashboard/{id}', [ActivityController::class, 'showDayCheckerList'])->name('show_day_checker_list');
//activity-form
// Route::get('activity-make-form/{id}',[ActivityController::class,'showActivityMakeForm'])->name('activity-make-form');
Route::get('activity-edit/{activity_id}',[ActivityController::class,'showEditActivityDashboard'])->name('show_edit_activity_dashboard');
///activity_day_edit///
Route::post('activity/edit/date/{date_id}',[ActivityController::class,'activityEditDayPost'])->name('activity_edit_day_post');
///round_delete
Route::get('activity/round/delete/{round_id}',[RoundController::class,'deleteRound'])->name('delete_round');
/// super edit //

// dashboard_stat

Route::get('activity/dashboard-stat/{activity_id}',[ActivityController::class,'showDashboardStat'])->name('show_dashboard_stat');

///date//
Route::get('activity/date/delete/{date_id}',[DateController::class,'dateDelete'])->name('date_delete');

//round//
Route::post('activity/date/round/edit/{round_id}',[RoundController::class,'editRound'])->name('round_edit');
///QR
Route::get('activity/form-checker/{activity_id}', [ActivityController::class, 'returnCheckerForm'])->name('return_check_form');
Route::post('activity/form-checker-post/{activity_id}', [ActivityController::class, 'inputFormCheckerPost'])->name('input_form_checker_post');
Route::post('activity/form-checker-post/v2/{activity_id}',[ActivityController::class,'inputFormCheckerPost2'])->name('input_form_checker_postV2');

//// round check ////

Route::get('activity/daycheck/round-check-list/{activity_id}/{date_id}', [ActivityController::class, 'showRoundCheckList'])->name('show_round_check');
Route::get('activity/daycheck/round-check-page/{activity_id}/{date_id}/{round_id}', [ActivityController::class, 'showRoundCheckPage'])->name('show_round_check_page');
// Admin //
Route::get('/admin', [AdminController::class, 'showAdminPage'])->name('show_admin_page');
Route::get('/admin/table-menu', [AdminController::class, 'showAdminTableMenu'])->name('show_admin_table_menu');


//admin table//

Route::get('/admin/table/activity', [AdminController::class, "showTableActivityPage"])->name('show_activity_table');
Route::post('admin/table/activity/edit/{id}', [AdminController::class, "editActivity"])->name('edit_activity');
Route::post('admin/table/activity/delete/{id}', [AdminController::class, "deleteActivity"])->name('delete_activity_by_admin');



//// LAB TEST ////
Route::get('test/array', [TestController::class, 'formArrayRequest'])->name('test_form_array_request');
Route::post('test/array/post', [TestController::class, 'PostformArrayRequest'])->name('post_test_form_array_request');
Route::get('test/activity/setting/{activity_id}',[TestController::class,'testActivity'])->name('test_activity');

// export

Route::get('register-export/{round_id}',[ExprotController::class,'peopleRegisterExportExcel'])->name('register_export');
