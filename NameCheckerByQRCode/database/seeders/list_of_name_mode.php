<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class list_of_name_mode extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('list_of_name_modes')->insert([
            [
                'id' => '1',
                'mode_name' => 'have_name',
                'status' => 'on'
                
            ],
            [
                'id' => '2',
                'mode_name' => 'not_have_name',
                'status' => 'on',
            ]
            ]);
    }
}
