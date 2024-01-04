<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\activity_people;
use App\Models\activity_setting;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\activity_people_register;
use App\Models\Major;

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
   public function getNameRegisterV2($activity_id){
      // $activity_setting = activity_setting::where('activity_id','=',$activity_id)->first();
      
      $activity_people = activity_people::where('activity_id','=',$activity_id)->get();
      
      return response()->json(  $activity_people);
   }

   public function getActivitySetting($activity_id){
      $activity_setting = activity_setting::where('activity_id','=',$activity_id)->first();
      return response()->json($activity_setting);
   }



}
