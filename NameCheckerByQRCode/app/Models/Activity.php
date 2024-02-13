<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_name',
        'user_id',
        'status',
        'activity_description'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function dateCount(){
        $date_coute = activity_day_maker::where('activity_id','=',$this->id)->count();
        return $date_coute;
    }
}
