<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\activity_day_maker;
use App\Models\activity_rounde_checker;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DateController extends Controller
{
    public function dateDelete($date_id){
        $delete_day = activity_day_maker::where('id','=',$date_id)->update([
            'status' => 'delete'
        ]);
        $delete_round = activity_rounde_checker::where('date_id','=',$date_id)->update([
            'status' => 'delete'
        ]);
        if($delete_day and $delete_round){
            Alert::success('ลบวันเช็คชื่อสำเร็จ');
            return redirect()->back();
        }
    }
}
