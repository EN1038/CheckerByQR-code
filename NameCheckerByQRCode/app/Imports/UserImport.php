<?php

namespace App\Imports;

use App\Models\activity_people;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel

{
   protected $activity_id;
   public function __construct($activity_id)
   {
    $this->activity_id = $activity_id;
   }
    public function model(array $row)
    {
        return new activity_people([
            'student_id' => $row[0],
            'name' => $row[1],
            'activity_id' => $this->activity_id,
            'status' => 'on'
            
        ]);
    }
}
