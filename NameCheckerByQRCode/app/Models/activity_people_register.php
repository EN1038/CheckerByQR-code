<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_people_register extends Model
{
    use HasFactory;

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

    public function getStatusTextAttribute()
    {
        return $this->status === 'late' ? 'เช็คชื่อสาย' : 'เช็คชื่อปกติ';
    }
}
