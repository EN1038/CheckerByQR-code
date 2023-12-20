<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Imports\ActivityPeopleImport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\activity_setting;
use App\Models\CheckerForm;
use App\Models\activity_day_maker;
use App\Models\activity_rounde_checker;
use App\Models\rounde_checker_relate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use League\Flysystem\AsyncAwsS3\AsyncAwsS3Adapter;
use Psy\VersionUpdater\Checker;
use RealRashid\SweetAlert\Facades\Alert;

class ActivityController extends Controller
{
    public function updateActivityName(Request $request, $activity_id)
    {
        $validate = $request->validate([
            'activity_name' => 'required'
        ]);

        $update_activity_name = Activity::where('id', '=', $activity_id)->update([
            'activity_name' => $request->activity_name
        ]);
        if ($update_activity_name) {
            Alert::success('success', 'update is successfully');
            return redirect()->route('show_activity_profile');
        }
    }
    public function deleteActivity($activity_id)
    {
        $activity_data = Activity::where('id', '=', $activity_id)->first();
        if ($activity_data->user_id != Auth::user()->id) {
            return redirect('/x');
        } else {
            $delete_activity = Activity::where('id', '=', $activity_id)->update([
                'status' => 'delete'
            ]);
            Alert::success('success', 'delete is successfully!');
            return redirect()->route('show_activity_profile');
        }
    }
    public function makeCheckerForm(Request $request, $activity_id)
    {
       
        $side = $request->input('activity.setting.side');
        $have_list_of_name = $request->input('activity.setting.have_list_of_name');
        
        if($side == 'outSide' and $have_list_of_name == 'no'){
            $date_num = $request->input('activity.date_add');
        //    dd($date_num);
        $i = 1;
           foreach($date_num as $items){
            
            $carbon_date = Carbon::parse($items['date']);
            $date_format =  $carbon_date->format('Y:m:d');
            $form_name = "Day".$i." ". $date_format;

            $carbon_time_start = Carbon::parse($items['time']['time_start']);
            $time_start_format = $carbon_time_start->format('H:i:s');

            $carbon_time_expried = Carbon::parse($items['time']['time_expried']);
            $time_expried_format = $carbon_time_expried->format('H:i:s');
            
            $activity_date_maker = activity_day_maker::create([
                
                'form_name' =>$form_name,
                'date' => $date_format,
                'time_start' => $time_start_format,
                'time_expried' => $time_expried_format,
            ]);
            if($items['round_setting'] == 'check_all_time_in_day'){

            $activity_round_checker = activity_rounde_checker::create([
                'rounde_name' => 'เช็คทั้งวัน',
                'rounde_checker_time_start' => $time_start_format,
                'rounde_checker_time_expried' => $time_expried_format,
            ]); 
            // dd($activity_id);
            $activity_round_checker_relate = rounde_checker_relate::create([
                'activity_id' => $activity_id,
                'activity_day_maker_id' => $activity_date_maker->id,
                'rounde_checker_id' => $activity_round_checker->id,
            ]);
            
           }
           $i++;
        }
        return redirect()->back();

            
      
        }
            
    }

        
       
    

    public function showActivityMakeForm($activity_id)
    {
        return view('activity.activity_table');
    }

    public function ActivitySetting(Request $request, $activity_id)
    {
        
    }

    public function showDayCheckerList($activity_id){
        $activity_day = rounde_checker_relate::where('activity_id','=',$activity_id)->get();

        return view('activity.activity_day_dashboard',compact('activity_day'));
    }
}
