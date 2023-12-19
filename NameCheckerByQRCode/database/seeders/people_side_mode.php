<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class people_side_mode extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('people_side_modes')->insert([
            [
                'id' => '1',
                'people_side_name' => 'inside',
                'status' => 'on',
            ],
            [
                'id' => '2',
                'people_side_name' => 'outside',
                'status' => 'on',
            ],
            [
                'id' => '3',
                'people_side_name' => 'all_side',
                'status' => 'on',
            ],
            ]);
    }
}
