<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Activity;
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
      $name_register_data = activity_people_register::where('activity_id', '=', $activity_id)
      ->where('date_id', '=', $date_id)
      ->where('round_id', '=', $round_id)->get();
      

      return response()->json($name_register_data);
   }

}
