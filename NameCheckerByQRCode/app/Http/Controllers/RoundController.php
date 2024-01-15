<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\activity_rounde_checker;
use App\Models\rounde_checker_relate;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class RoundController extends Controller
{
   public function editRound(Request $request,$round_id){
        $round_update = activity_rounde_checker::where('id','=',$round_id)->update([
            'rounde_name' => $request->round_name,
            'rounde_checker_time_start' => $request->round_time_start,
            'rounde_checker_time_expried' => $request->round_time_end,
        ]);

        if($round_update){
         Alert::success("แก้ไขสำเร็จ!");
         return redirect()->back();
        }
   }
}
