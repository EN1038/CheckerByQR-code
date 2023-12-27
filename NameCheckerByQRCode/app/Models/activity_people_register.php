<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_people_register extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'activity_id',
        'date_id',
        'round_id',
    ];
}
