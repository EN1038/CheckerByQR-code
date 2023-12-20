<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rounde_checker_relate extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'activity_day_maker_id',
        'rounde_checker_id'
    ];
}
