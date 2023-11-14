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

    }
}
