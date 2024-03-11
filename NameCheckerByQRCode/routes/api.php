<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\TestController;
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
Route::get('activity/all-setting/{activity_id}',[ApiController::class,'activityAllSettingData'])->name('activity_all_setting_data');
Route::get('activity/check-people-register/{activity_id}/{date_id}',[ApiController::class,'checkPeopleRegister'])->name('check_people_register');
Route::get('activity/round_data/{date_id}',[ApiController::class,'roundData'])->name('round_data');

///post///
Route::post('activity/date/delete/{date_id}',[ApiController::class,'deleteDate'])->name('delete_date_api');
Route::post('activity/super-edit',[TestController::class,'superEdit'])->name('activity_super_edit');
///api edit all
Route::post('activity/edit-all',[ActivityController::class,'activityEditAll'])->name('activity_edit_all');

Route::get('one-round-data/{round_id}',[ApiController::class,'oneRoundData'])->name('one_round_data');
