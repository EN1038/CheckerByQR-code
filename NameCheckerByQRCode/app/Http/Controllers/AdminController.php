<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function showAdminPage(){

        return view('admins.admin_page');
    }
    public function showAdminTableMenu(){
        return view('admins.tables.tables_menu');
    }
    public function showTableActivityPage(){
        $activity_data = Activity::where('status','=','on')->get();
        return view('admins.tables.activity_table',compact('activity_data'));
    }
    public function editActivity(Request $request,$activity_id_encrypt){
        $activity_id_decrypt = Crypt::decrypt($activity_id_encrypt);
        $update = Activity::where('id','=',$activity_id_decrypt)->update([
            'activity_name' => $request->activity_name
        ]);
        if($update){
            Alert::success('แก้ไขสำเร็จ!','update is successfully!');
        }
        return redirect()->route('show_activity_table');
    }

    public function deleteActivity(Request $request,$activity_id_encrypt){
        $activity_id_decrypt = Crypt::decrypt($activity_id_encrypt);
        $update = Activity::where('id','=',$activity_id_decrypt)->update([
            'status' => 'delete'
        ]);
        if($update){
            Alert::success('ลบสำเร็จ!','delete is successfully!');
        }
        return redirect()->route('show_activity_table');
    }
}
