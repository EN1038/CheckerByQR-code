<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_people_register extends Model
{
    use HasFactory;

    // protected $appends = ['status_text'];

    protected $fillable=[
        'name',
        'last_name',
        'activity_id',
        'status',
        'date_id',
        'round_id',
        'people_id',
        'ip_address'
    ];

//     public function getStatusTextAttribute()
// {
//     $round = activity_rounde_checker::where('id', '=', $this->rounde_id)->first();

//     if($this->create_at < $round->round_checker_time_expried){
//         return "normal";
//     }else{
//         return "late";
//     }
// }


    public function getStatusTextAttribute($people_register_id)
    {
        $people_register = activity_people_register::where('id','=',$people_register_id)->first();

        $round = activity_rounde_checker::where('id','=',$people_register->rounde_id)->first();

        if($people_register->create_at < $round->round_checker_time_expried){
            return "normal";
        }else{
            return "late";
        }

    }
}

