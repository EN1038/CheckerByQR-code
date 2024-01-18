<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\activity_day_maker;
use App\Models\activity_people;
use App\Models\activity_setting;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\activity_people_register;
use App\Models\activity_rounde_checker;
use App\Models\Major;
use App\Models\rounde_checker_relate;

class ApiController extends Controller
{
   public function agencyApi()
   {
      $agency_data = Agency::all();

      // return view('test.relation_test',compact('major_data'));
      return response()->json(['agency_data' => $agency_data]);
   }

   public function majorApi()
   {
      $major_data = Major::all();
      return response()->json(['major_data' => $major_data]);
   }

   public function getmajorById($id)
   {
      $major_data = Major::where('agency_id', '=', $id)->get();
      return response()->json(['major_data' => $major_data]);
   }

   public function getNameRegister($activity_id, $date_id, $round_id)
   {
      // $activity_setting = activity_setting::where('activity_id','=',$activity_id)->first();
      $name_register_data = activity_people_register::where('activity_id', '=', $activity_id)
         ->where('date_id', '=', $date_id)
         ->where('round_id', '=', $round_id)->get();


      return response()->json($name_register_data);
   }
   public function getNameRegisterV2($activity_id)
   {
      // $activity_setting = activity_setting::where('activity_id','=',$activity_id)->first();

      $activity_people = activity_people::where('activity_id', '=', $activity_id)->get();

      return response()->json($activity_people);
   }

   public function getActivitySetting($activity_id)
   {
      $activity_setting = activity_setting::where('activity_id', '=', $activity_id)->first();
      return response()->json($activity_setting);
   }

   public function getDayCheckerData($activity_id)
   {
      $activity_days = activity_day_maker::where('activity_id', '=', $activity_id)->where('status','=','on')->get();

      return response()->json($activity_days);
   }
   public function getRoundSetting($activity_id,$date_id){
      $round_check = activity_rounde_checker::where('activity_id','=',$activity_id)->where('date_id','=',$date_id)->get();
      return response()->json($round_check);
   }

   public function activityData($activity_data){
      $activity_data = Activity::where('id','=',$activity_data)->first();
      return response()->json($activity_data);
   }


   public function superEdit(Request $request){
      $activity = Activity::create([
         'activity_name' => $request->activity_name,
         'user_id' => $request->user_id,
         'status' => $request-> status
      ]);
      if($activity){
         return ["Alert" => "success"];
      }else{
         return ["Alert" => "error"];
      }

      
  }

  public function activityAllSettingData($activity_id){
   $activity_data = Activity::where('id','=',$activity_id)->first();
   $activity_setting = activity_setting::where('activity_id','=',$activity_id)->first();

   $date_in_activity = activity_day_maker::where('activity_id','=',$activity_id)->get();

   $result = [];

   foreach($date_in_activity as $item){
      $date_info = $item;

      // Fetch the round data for the current date
      $round = activity_rounde_checker::where('date_id','=',$item->id)->get();

      // Include round data in date_info if found
      if ($round) {
         $date_info->round = $round;
      }

      // Add the date_info to the result array
      $result[] = $date_info;
   }

   return response()->json([
      'date_data' => $result,
      'activity_data' => $activity_data,
      'activity_setting' => $activity_setting
   ]);
}






}
