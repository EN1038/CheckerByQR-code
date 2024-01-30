<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\activity_people_register;
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

   public function deleteRound($round_id){

        $check_people_register = activity_people_register::where('round_id','=',$round_id)->get();
        // dd($check_people_register);
        if(count($check_people_register) > 0){
            Alert::error('ไม่สามารถลบได้เนื่องจากมีการเช็คชื่อไปแล้ว!');
            return redirect()->back();
        }else{
            if(
                $round_delete = activity_rounde_checker::where('id','=',$round_id)
                ->update([
                'status' => 'delete'
                        ])
            )
            Alert::success("ลบสำเร็จ!");
            return redirect()->back();
       }
    }
        
}
