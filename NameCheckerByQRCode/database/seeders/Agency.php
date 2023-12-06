<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Agency extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Agencies')->insert([
            [
                'id' => 1,
                'Agency_name' => 'คณะวิทยาศาสตร์และเทคโนโลยี',
            ],
            [
                'id' => 2,
                'Agency_name' => 'คณะครุศาสตร์',
            ],
            [
                'id' => 3,
                'Agency_name' => 'คณะวิทยาการจัดการ',
            ],
            [
                'id' => 4,
                'Agency_name' => 'คณะมนุษย์ศาสตร์และสังคมศาสตร์',
            ],
            [
                'id' => 5,
                'Agency_name' => 'คณะเทคโนโลยีการเกษตรและเทคโนโลยีอุตสาหกรรม',
            ],
            

           

        ]);
    }
}
