<?php

namespace App\Exports;

use App\Models\activity_people_register;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegisterExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return activity_people_register::all();
    }
}
