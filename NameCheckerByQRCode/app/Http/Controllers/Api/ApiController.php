<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\Major;

class ApiController extends Controller
{
   public function agencyApi(){
    $agency_data = Agency::all();
   
    // return view('test.relation_test',compact('major_data'));
    return response()->json(['agency_data' => $agency_data]);
   }

   public function majorApi(){
    $major_data = Major::all();
    return response()->json(['major_data' => $major_data]);
   }


}
