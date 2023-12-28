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
                    'activity_id' => $activity_id
                ]);
                if ($items['round_setting'] == '1') {

                    $activity_round_checker = activity_rounde_checker::create([
                        'rounde_name' => 'เช็คทั้งวัน',
                        'rounde_checker_time_start' => $time_start_format,
                        'rounde_checker_time_expried' => $time_expried_format,
                        'date_id' =>  $activity_date_maker->id

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
        $activity_day_array = [];
        $activity_relate = rounde_checker_relate::where('activity_id', '=', $activity_id)->get();
        $activity_setting = activity_setting::where('activity_id', '=', $activity_id)->first();
        $activity_description = activity::where('id', '=', $activity_id)->pluck('activity_description')->first();

        foreach ($activity_relate as $items) {
            $activity_day_id = $items->activity_day_maker_id;

            $activity_day_select = activity_day_maker::where('id', '=', $activity_day_id)->get();
            $activity_day_array[] = $activity_day_select;
            // Example: Print the activity_day for each iteration

        }
        // dd($activity_data);

        // If you want to use a for loop instead
        // for ($i = 0; $i < count($activity_relate); $i++) {
        //     $activity_day = $activity_relate[$i]->activity_day_maker_id;

        //     // Your code for each iteration...

        //     // Example: Print the activity_day for each iteration
        //     echo $activity_day . '<br>';
        // }

        // dd($activity_day);
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

        if ($activity_setting->list_of_name_mode_id == "2") {
            $activity_data = Activity::where('id','=',$activity_id)->pluck('activity_name')->first();
            return view('activity.QRcode.input_name_form',compact('activity_data'));
        } else {
            return view('activity.daycheck.RoundCheck.nsru_core_login');
        }
    }
    public function inputFormCheckerPost(Request $request, $activity_id)
    {

        // dd($request->all());
        $select_activity_setting = activity_setting::where('activity_id', '=', $activity_id)->first();

        if ($select_activity_setting->people_side_mode_id == 2 and $select_activity_setting->list_of_name_mode_id and $select_activity_setting->round_mode == 1) {
            $current_date = Carbon::now()->format('Y-m-d');
            $select_day = activity_day_maker::where('activity_id', '=', $activity_id)->where('date', '=', $current_date)->first();
            $date_id = $select_day->id;
            $select_round_checker = activity_rounde_checker::where('date_id', '=', $date_id)->first();

            $input_name_checker = activity_people_register::create([
                'name' => $request->name,
                'activity_id' => $activity_id,
                'date_id' => $date_id,
                'round_id' => $select_round_checker->id,
            ]);
            if ($input_name_checker) {
                Alert::success('เช็คชื่อสำเร็จ!');
                return view('activity.alert_view.success_view');
            }
        }
    }
}
