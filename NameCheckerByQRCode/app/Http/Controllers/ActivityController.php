<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\activity_setting;
use App\Models\CheckerForm;
use App\Models\activity_day_maker;
use Illuminate\Support\Facades\Auth;
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

        dd($request);
        // foreach($dynamicInputs as $input){
        //     dd($input);
        //     // $insert_checker = CheckerForm::create([
        //     //     'date' => $input->date,
        //     //     'start_time' => $input->start_time,
        //     //     'end_time' => $input->end_time,
        //     //     'activity_id' => $activity_id,
        //     //     'status' => 'on'
        //     // ]);
        // }
    }

    public function showActivityMakeForm($activity_id)
    {
        return view('activity.activity_table');
    }

    public function ActivitySetting(Request $request, $activity_id)
    {
        dd($request);

        if ($request->people_side_mode == 'outSide' and $request->list_of_name_mode == "1") {
            $activity_setting = activity_setting::create([
                'activity_id' => $activity_id,
                'people_side_mode_id' => $request->people_side_mode,
                'list_of_name_mode' => $request->list_of_name_mode,
            ]);


            // $date_data = $request->input('date');
            // foreach( $date_data as $item){
            //     activity_setting::crerat([

            //     ])
            // }
            $date_data = $request->input('date_input');
            foreach($date_data as $item){
                $activity_day_maker = activity_day_maker::create([
                    'form_name' => $item,
                    'form_date' => $request->date,
                    'form_start_time' => $request->timeStart_input,
                    'timeEnd_input' => $request->timeEnd_input,
                ]);
            }
        }
    }
}
