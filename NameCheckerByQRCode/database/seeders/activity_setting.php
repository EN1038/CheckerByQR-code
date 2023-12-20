<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class activity_setting extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('activity_settings')->insert([
            [
                'id' => 1,
                'activity_id' => '1',
                'people_side_mode_id' => '2',
                'list_of_name_mode_id' => '2'
            ]
        ]);
    }
}
