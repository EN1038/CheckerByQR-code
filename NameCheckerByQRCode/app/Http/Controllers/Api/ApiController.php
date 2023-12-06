<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agency;

class ApiController extends Controller
{
   public function agencyApi(){
    $agency_data = Agency::all();
    return response()->json(['agency_data' => $agency_data]);
   }
}
