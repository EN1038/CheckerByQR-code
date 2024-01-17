<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Imports\ActivityPeopleImport;

use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\activity_setting;
use App\Models\activity_people_register;
use App\Models\CheckerForm;
use App\Models\activity_day_maker;
use App\Models\activity_people;
use App\Models\activity_rounde_checker;
use App\Models\rounde_checker_relate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

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

        // dd($request);
        $activity_setting = activity_setting::create([
            'activity_id' => $activity_id,
            'people_side_mode_id' => $request->input('activity.setting.side'),
            'list_of_name_mode_id' => $request->input('activity.setting.have_list_of_name'),

        ]);

        
        if ($side == '2' and $have_list_of_name == '2') {
            
            $date_num = $request->input('activity.date_add');
            //    dd($date_num);
            $i = 1;
            foreach ($date_num as $items) {

                $carbon_date = Carbon::parse($items['date']);
                $date_format =  $carbon_date->format('Y:m:d');
                $form_name = "Day" . $i . " " . $date_format;

                $carbon_time_start = Carbon::parse($items['time']['time_start']);
                $time_start_format = $carbon_time_start->format('H:i:s');

                $carbon_time_expried = Carbon::parse($items['time']['time_expried']);
                $time_expried_format = $carbon_time_expried->format('H:i:s');

               

                $activity_date_maker = activity_day_maker::create([

                    'form_name' => $form_name,
                    'date' => $date_format,
                    'time_start' => $time_start_format,
                    'time_expried' => $time_expried_format,
                    'activity_id' => $activity_id,
                    'status' => 'on',
                    'round_mode' => $items['round_setting']
                ]);
                if ($items['round_setting'] == '1') {

                    $activity_round_checker = activity_rounde_checker::create([
                        'rounde_name' => 'เช็คทั้งวัน',
                        'rounde_checker_time_start' => $time_start_format,
                        'rounde_checker_time_expried' => $time_expried_format,
                        'date_id' =>  $activity_date_maker->id,
                        'activity_id' => $activity_id,
                        'round_end_time' => $time_expried_format,
                        'status' => 'on',

                    ]);
                    $add_round_setting_mode = activity_setting::where('activity_id', '=', $activity_id)->update([
                        'round_mode' => '1'
                    ]);
                    // dd($activity_id);
                    $activity_round_checker_relate = rounde_checker_relate::create([
                        'activity_id' => $activity_id,
                        'activity_day_maker_id' => $activity_date_maker->id,
                        'rounde_checker_id' => $activity_round_checker->id,
                    ]);
                } elseif ($items['round_setting'] == '2') {
                    $round_count = 0;
                    foreach ($items['round'] as $round) {
                        // dd($round['round_start']);
                        $activity_round_checker = activity_rounde_checker::create([
                            'rounde_name' => 'รอบ' . $round['round_start'] . 'ถึง' . $round['round_end'],
                            'rounde_checker_time_start' => $round['round_start'],
                            'rounde_checker_time_expried' => $round['round_end'],
                            'round_end_time' => $round['duration_round_end'],
                            'date_id' => $activity_date_maker->id,
                            'activity_id' => $activity_id,
                            'status' => 'on',
                        ]);
                        $activity_round_checker_relate = rounde_checker_relate::create([
                            'activity_id' => $activity_id,
                            'activity_day_maker_id' => $activity_date_maker->id,
                            'rounde_checker_id' => $activity_round_checker->id,

                        ]);
                    }
                    $add_round_setting_mode = activity_setting::where('activity_id', '=', $activity_id)->update([
                        'round_mode' => '2'
                    ]);
                }
                $i++;
            }
            return redirect()->route('show_activity_profile');


        } elseif ($side == '2' and $have_list_of_name == '1') {
            

            Excel::import(new ActivityPeopleImport($activity_id), $request->file('excel'));
            $date_num = $request->input('activity.date_add');
            //    dd($date_num);
            $i = 1;
            foreach ($date_num as $items) {

                $carbon_date = Carbon::parse($items['date']);
                $date_format =  $carbon_date->format('Y:m:d');
                $form_name = "Day" . $i . " " . $date_format;

                $carbon_time_start = Carbon::parse($items['time']['time_start']);
                $time_start_format = $carbon_time_start->format('H:i:s');

                $carbon_time_expried = Carbon::parse($items['time']['time_expried']);
                $time_expried_format = $carbon_time_expried->format('H:i:s');

                

                $activity_date_maker = activity_day_maker::create([

                    'form_name' => $form_name,
                    'date' => $date_format,
                    'time_start' => $time_start_format,
                    'time_expried' => $time_expried_format,
                    'activity_id' => $activity_id,
                    'status' => 'on',
                    'round_mode' => $items['round_setting']
                ]);
                if ($items['round_setting'] == '1') {

                    $activity_round_checker = activity_rounde_checker::create([
                        'rounde_name' => 'เช็คทั้งวัน',
                        'rounde_checker_time_start' => $time_start_format,
                        'rounde_checker_time_expried' => $time_expried_format,
                        'date_id' =>  $activity_date_maker->id,
                        'activity_id' => $activity_id,
                        'round_end_time' => $time_expried_format,
                        'status' => 'on'

                    ]);
                    $add_round_setting_mode = activity_setting::where('activity_id', '=', $activity_id)->update([
                        'round_mode' => '1'
                    ]);
                    // dd($activity_id);
                    $activity_round_checker_relate = rounde_checker_relate::create([
                        'activity_id' => $activity_id,
                        'activity_day_maker_id' => $activity_date_maker->id,
                        'rounde_checker_id' => $activity_round_checker->id,
                    ]);
                } elseif ($items['round_setting'] == '2') {
                    $round_count = 0;
                    foreach ($items['round'] as $round) {
                        // dd($round['round_start']);
                        $activity_round_checker = activity_rounde_checker::create([
                            'rounde_name' => 'รอบ' . $round['round_start'] . 'ถึง' . $round['round_end'],
                            'rounde_checker_time_start' => $round['round_start'],
                            'rounde_checker_time_expried' => $round['round_end'],
                            'round_end_time' => $round['duration_round_end'],
                            'date_id' => $activity_date_maker->id,
                            'activity_id' => $activity_id,
                            'status' => 'on'
                        ]);
                        $activity_round_checker_relate = rounde_checker_relate::create([
                            'activity_id' => $activity_id,
                            'activity_day_maker_id' => $activity_date_maker->id,
                            'rounde_checker_id' => $activity_round_checker->id,

                        ]);
                    }
                    $add_round_setting_mode = activity_setting::where('activity_id', '=', $activity_id)->update([
                        'round_mode' => '2'
                    ]);
                }
                $i++;
            }
            return redirect()->route('show_activity_profile');
        }
    }





    public function showActivityMakeForm($activity_id)
    {
        return view('activity.activity_table');
    }

    public function ActivitySetting(Request $request, $activity_id)
    {
    }

    public function showDayCheckerList($activity_id)
    {

        $activity_day_array = activity_day_maker::where('activity_id', '=', $activity_id)->where('status','=','on')->get();
        $activity_setting = activity_setting::where('activity_id', '=', $activity_id)->first();
        $activity_description = activity::where('id', '=', $activity_id)->pluck('activity_description')->first();

        return view('activity.activity_day_dashboard', compact('activity_day_array', 'activity_setting', 'activity_description'));
    }

    public function showRoundCheckList($activity_id, $date_id)
    {
        $round_check_relate = rounde_checker_relate::where('activity_id', '=', $activity_id)->where('activity_day_maker_id', '=', $date_id)->get();

        // dd($round_check_relate);
        foreach ($round_check_relate as $items) {

            $get_round_check = activity_rounde_checker::where('id', '=', $items->rounde_checker_id)->get();
            $round_check_data[] = $get_round_check;
        }

        // dd($round_check_data);
        return view('activity.daycheck.daycheck', compact('round_check_data'));
    }

    public function showRoundCheckPage($activity_id, $date_id, $round_id)
    {


        return view('activity.daycheck.RoundCheck.round_check_page');
    }

    public function returnCheckerForm($activity_id)
    {

        $activity_setting = activity_setting::where('activity_id', '=', $activity_id)->first();
        $current_date = Carbon::now()->format('Y-m-d');
        $current_time = Carbon::now()->format('H:i:s');
        if($activity_setting->list_of_name_mode_id == "2") {
           
            $select_day = activity_day_maker::where('activity_id', '=', $activity_id)->where('date', '=', $current_date)->first();
            if($select_day and $current_time < $select_day-> time_expried){
                $activity_data = activity::where('id','=',$activity_id)->pluck('activity_name')->first();
                return view('activity.QRcode.input_name_form', compact('activity_data'));
            }else{
                return view('activity.alert_view.time_out_alert');
            }  
        } elseif ($activity_setting->list_of_name_mode_id == "1") {
            $select_day = activity_day_maker::where('activity_id', '=', $activity_id)->where('date', '=', $current_date)->first();
            if($select_day and $current_time < $select_day-> time_expried){
                
                return view('activity.QRcode.input_name_form_v2');
            }else{
                return view('activity.alert_view.time_out_alert');
            }
        } else {
            return view('activity.daycheck.RoundCheck.nsru_core_login');
        }
    }
    public function inputFormCheckerPost(Request $request, $activity_id)
    {

       
        $select_activity_setting = activity_setting::where('activity_id', '=', $activity_id)->first();

        if ($select_activity_setting->people_side_mode_id == 2 and $select_activity_setting->list_of_name_mode_id == 2) {
            $current_date = Carbon::now()->format('Y-m-d');
            $select_day = activity_day_maker::where('activity_id', '=', $activity_id)->where('date', '=', $current_date)->first();
            if ($select_day) {
                $date_id = $select_day->id;
                if ($select_activity_setting->round_mode == 1) {
                    $select_round_checker = activity_rounde_checker::where('date_id', '=', $date_id)->first();
                    $checker_status = 'normal';
                } else {
                    // dd($date_id);
                    $current_time = Carbon::now()->format('H:i:s');

                    $select_round_checker = activity_rounde_checker::where('date_id', '=', $date_id)->where('rounde_checker_time_start','<=',$current_time)
                    ->where('round_end_time' ,'>=',$current_time)->first();
                    
                    if ($current_time > $select_round_checker->round_end_time) {
                        $checker_status = 'late';
                    } else {
                        $checker_status = 'normal';
                    }
                   
                    // ->orwhere('activity_end_time', '>=', $current_time)->where('date_id', '=', $date_id)->first();
                //    dd($select_round_checker);
                    
                }

                $check_ip = activity_people_register::where('ip_address','=',$request->ip())->first();
                if($check_ip){
                    return view('activity.alert_view.recheck_alert');
                }else{
                    $input_name_checker = activity_people_register::create([
                        'name' => $request->name,
                        'last_name' => $request->last_name,
                        'activity_id' => $activity_id,
                        'status' => $checker_status,
                        'date_id' => $date_id,
                        'round_id' => $select_round_checker->id,
                        'ip_address' => $request->ip(),
                    ]);
                }
                
                if ($input_name_checker) {
                    Alert::success('เช็คชื่อสำเร็จ!');
                    return view('activity.alert_view.success_view');
                }
            } else {
                return view('activity.alert_view.no_success');
            }
        }
    }

    public function inputFormCheckerPost2(Request $request, $activity_id)
    {
        $select_activity_setting = activity_setting::where('activity_id', '=', $activity_id)->first();

        if ($select_activity_setting->people_side_mode_id == 2 and $select_activity_setting->list_of_name_mode_id == 1) {
            $current_date = Carbon::now()->format('Y-m-d');
            $select_day = activity_day_maker::where('activity_id', '=', $activity_id)->where('date', '=', $current_date)->first();
            if ($select_day) {
                $date_id = $select_day->id;
                if ($select_activity_setting->round_mode == 1) {
                    $select_round_checker = activity_rounde_checker::where('date_id', '=', $date_id)->first();
                    $checker_status = 'normal';
                } else {
                    // dd($date_id);
                    $current_time = Carbon::now()->format('H:i:s');

                    $select_round_checker = activity_rounde_checker::where('date_id', '=', $date_id)->where('rounde_checker_time_start','<=',$current_time)
                    ->where('round_end_time' ,'>=',$current_time)->first();
                    
                    if ($current_time > $select_round_checker->round_end_time) {
                        $checker_status = 'late';
                    } else {
                        $checker_status = 'normal';
                    }
                }

                $select_activity_people = activity_people::where('activity_id', '=', $activity_id)
                    ->where('student_id', '=', $request->student_id)->first();
                if ($select_activity_people) {
                    $check_ip = activity_people_register::where('ip_address','=',$request->ip())->first();
                    if($check_ip){
                        return view('activity.alert_view.success_view');
                    }else{
                        $check_ip = activity_people_register::where('ip_address','=',$request->ip())->first();
                         if($check_ip){
                        return view('activity.alert_view.recheck_alert');
                        }else{
                         $input_name_checker = activity_people_register::create([
                        'name' => $request->name,
                        'last_name' => $request->last_name,
                        'activity_id' => $activity_id,
                        'status' => $checker_status,
                        'date_id' => $date_id,
                        'round_id' => $select_round_checker->id,
                        'ip_address' => $request->ip(),
                    ]);
                    if ($input_name_checker) {
                        Alert::success('เช็คชื่อสำเร็จ!');
                        return view('activity.alert_view.success_view');
                    } else {
                        return view('activity.alert_view.no_success');
                    }
                }
                        
                    }
                    
                } else {
                    return view('activity.alert_view.no_success');
                }

                // if ($input_name_checker) {
                //     Alert::success('เช็คชื่อสำเร็จ!');
                //     return view('activity.alert_view.success_view');
                // }

            } else {
                return view('activity.alert_view.no_success');
            }
        }
    }
    public function showEditActivityDashboard($activity_id){
        return view('activity.activity_crud.show_edit_activity');
    }

    public function activityEditDayPost(Request $request,$date_id){


        $select_people_register = activity_people_register::where('date_id','=',$date_id)->get();

        if(empty($select_activity_people)){
            Alert::error("ไม่สามารถแก้ไขได้มีการเช็คชื่อไปแล้ว!");
            return redirect()->back();
        }else{
            $update_day = activity_day_maker::where('id','=',$date_id)->update([
                'date' => $request->date,
                'time_start' => $request->time_start,
                'time_expried' => $request->time_expried
            ]);
            if($update_day){
                Alert::success('แก้ไขสำเร็จ');
                return redirect()->back();
            }
        }
       
        
    }
    
}




