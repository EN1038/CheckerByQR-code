<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
///ข้อมูลคณะฝฝฝฝ
Route::get('agency-data', [ApiController::class, 'agencyApi'])->name('agency_api');
Route::get('major-data', [ApiController::class, 'MajorApi'])->name('Major_api');
Route::get('major-by-id/{id}', [ApiController::class, 'getmajorById'])->name('get_major_by_id');
Route::get('activity/people-name-register-data/{activity_id}/{date_id}/{round_id}', [ApiController::class, 'getNameRegister'])->name('get_peopl_register_data');
Route::get('activity-people/v2/{activity_id}',[ApiController::class,'getNameRegisterV2'])->name('name_register_v2');
Route::get('activity-setting/{activity_id}',[ApiController::class,'getActivitySetting'])->name('activity_setting_api');
Route::get('activity_daychecker/{activity_id}',[ApiController::class,'getDayCheckerData'])->name('day_checker_api');
Route::get('activity/round-checker-api/{activity_id}/{date_id}',[ApiController::class,'getRoundSetting'])->name('activity_round_cheker_api');
Route::get('activity-data/{activity_id}',[ApiController::class,'activityData'])->name('activity_data');