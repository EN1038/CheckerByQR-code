<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function showHome(){
        return view('welcome');
    }
    public function showMakeActivityFormPage(){
        return view('Home.make_activity');
    }
    public function makeActivity(Request $request){
        
    }
}
