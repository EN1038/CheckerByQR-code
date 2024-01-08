<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_rounde_checker extends Model
{
    use HasFactory;

    protected $fillable = [
        'rounde_name',
        'rounde_checker_time_start',
        'rounde_checker_time_expried',
        'date_id',
        'activity_id',
        'round_end_time',
    ];
}
