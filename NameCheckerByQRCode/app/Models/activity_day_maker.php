<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_day_maker extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_name',
        'date',
        'time_start',
        'time_expried',
        'activity_id',
        'status',
        'round_mode'
    ];


    public function Activity()
    {
        return $this->hasOne(Activity::class,'id','activity_id');
    }

    public function dateCount(){
        $date_count = activity_day_maker::where('activity_id','=',$this->activity_id)->count();
        return $date_count;
    }
}
