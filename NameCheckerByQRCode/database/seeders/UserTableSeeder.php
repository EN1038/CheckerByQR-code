<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'กมลาส กลิ่นด้วง',
            'student_id' => '63113532008',
            'password' => Hash::make('123456')
        ],
        [
            'name' => 'เริงชัย บุตรม้วย',
            'student_id' => '63113532037',
            'password' => Hash::make('123456')
        ],
 
    );
    DB::table('activities')->insert([
    
    [
        'activity_name' => 'test',
        'user_id' => '1',
        'status' => 'on'
    ],
    [
        'activity_name' => 'test2',
        'user_id' => '1',
        'status' => 'on'
    ],
    [
        'activity_name' => 'test3',
        'user_id' => '1',
        'status' => 'on'
    ],
    [
        'activity_name' => 'test4',
        'user_id' => '1',
        'status' => 'on'
    ],
    [
        'activity_name' => 'test5',
        'user_id' => '1',
        'status' => 'on'
    ],
    [
        'activity_name' => 'test6',
        'user_id' => '2',
        'status' => 'on'
    ],
    [
        'activity_name' => 'test7',
        'user_id' => '2',
        'status' => 'on'
    ],

    ]

);
    }
}
