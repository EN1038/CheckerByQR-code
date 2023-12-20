<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'people_side_mode_id',
        'list_of_name_mode_id'
    ];

    public function Activity(){
        return $this->hasOne(activity::class,'id','activity_id');
    }
    public function PeopleSideMode(){
        return $this->hasOne(people_side_mode::class,'id','people_side_mode_id');
    }
    public function ListOfNameMode(){
        return $this->hasOne(people_side_mode::class,'id','list_of_name_mode_id');
    }
}
