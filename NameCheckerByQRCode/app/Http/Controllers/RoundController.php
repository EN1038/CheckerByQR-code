<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\rounde_checker_relate;
use Illuminate\Http\Request;

class RoundController extends Controller
{
   public function editRound(Request $request,$round_id){
        $round_update = rounde_checker_relate::where('id','=',$round_id)->update([
            
        ]);
   }
}
