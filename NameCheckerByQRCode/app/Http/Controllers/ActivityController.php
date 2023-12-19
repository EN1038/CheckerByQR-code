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
        
        if($request->input('activity.setting.side') == "inSide" and $request->input('activity.setting.have_list_of_name') == "yes"){
            foreach()
        }
    }

    public function showActivityMakeForm($activity_id)
    {
        return view('activity.activity_table');
    }

    public function ActivitySetting(Request $request, $activity_id)
    {
        
    }
}
