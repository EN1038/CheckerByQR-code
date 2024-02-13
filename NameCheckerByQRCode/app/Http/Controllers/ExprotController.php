<?php

namespace App\Http\Controllers;

use App\Exports\RegisterExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

class ExprotController extends Controller
{
    public function peopleRegisterExportExcel(){
        return Excel::download( new RegisterExport, 'register.xlsx');
    }
}
