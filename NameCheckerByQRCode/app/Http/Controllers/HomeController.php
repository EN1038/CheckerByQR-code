<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function showHome(){
        return view('welcome');
    }
    public function showMakeActivityFormPage(){
        return view('Home.make_activity');
    }
    public function makeActivity(Request $request){
        $validate = $request->validate([
            'activity_name' => 'required|max:255'
        ],
        [
            'activity_name.required' => "กรุณากรอกชื่อกิจกรรม"
        ]);

        $create_activity = Activity::create([
            'activity_name' => $request->activity_name,
            'user_id' => Auth::user()->id,
            'status' => 'on'
        ]);
        return redirect()->route('show_activity_profile');
    }
    public function showActivityProfile(){
        $activity_profile_data = Activity::where('status','=','on')
        ->where('user_id','=',Auth::user()->id)->get();
        
        return view('activity.activity_box_page',compact('activity_profile_data'));
    }
    public function showActivityDashboard($id){
        $activity_data = Activity::where('id','=',$id)->first();
        return view('activity.activity_dashboard2',compact('activity_data'));
    }
}
