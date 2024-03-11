<?php

namespace App\Exports;

use App\Models\activity_people_register;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Carbon\Carbon;

class RegisterExport implements FromCollection, WithMapping
{
    private $round_id;

    public function __construct($round_id)
    {
        $this->round_id = $round_id;
    }

    public function map($people): array
    {
        return [
            $people->id,
            $people->name,
            $people->last_name,
            $people->getStatusTextAttribute($people->id),
            Carbon::parse($people->creat_at)->format('Y-m-d H:i:s'),
            // Add other fields you need to export
        ];
    }

    public function collection(): Collection
    {
        $round_check = activity_people_register::where('round_id', '=', $this->round_id)->get();
        return $round_check;
    }

    // WithMapping interface method to map the columns

}
