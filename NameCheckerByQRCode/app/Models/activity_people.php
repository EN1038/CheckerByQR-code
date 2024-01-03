<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_people extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'name',
        'activity_id',
        'status',
    ];
}
