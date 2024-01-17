<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function FormArrayRequest()
    {


        return view('test.form_array_test');
    }

    public function PostformArrayRequest(Request $request)
    {
        dd($request->all());
    }

    public function testActivity(){

        
        return view('test.test_activity');
    }
}
