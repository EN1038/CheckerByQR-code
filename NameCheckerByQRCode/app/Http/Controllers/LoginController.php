<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function loginForm(){

        return view('login.login_form');
    }
    public function registerForm(){
        return view('login.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            's_id' => 'required',
            'password' => 'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->student_id = $request->s_id;
        $user->password = Hash::make($request->password);
        $user->save();

        // ลงทะเบียนสำเร็จแล้ว
        return redirect('/welcome')->with('success', 'ลงทะเบียนเรียบร้อย');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('student_id', 'password');

        if (Auth::attempt($credentials)) {
            
            // การลงชื่อเข้าใช้สำเร็จ
            return redirect()->intended('/welcome');
        }

        // การลงชื่อเข้าใช้ไม่สำเร็จ
        return back()->withErrors([
            'student_id' => 'อีเมลหรือรหัสผ่านไม่ถูกต้อง',
        ]);
    }
}
