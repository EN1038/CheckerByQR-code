<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Major extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('majors')->insert([
            [
                'id' => '1',
                'major_name' => 'วิทยาการคอพิวเตอร์',
                'agency_id' => '1',
                'status' => 'on'
            ],
            [
                'id' => '2',
                'major_name' => 'มัลติมีเดีย',
                'agency_id' => '1',
                'status' => 'on'
            ],
            [
                'id' => '3',
                'major_name' => 'เทคโนโลยีสารสนเทศ',
                'agency_id' => '1',
                'status' => 'on'
            ],
            [
                'id' => '4',
                'major_name' => 'เคมี',
                'agency_id' => '1',
                'status' => 'on'
            ],
            [
                'id' => '5',
                'major_name' => 'ฟิสิกข์',
                'agency_id' => '1',
                'status' => 'on'
            ],
            [
                'id' => '6',
                'major_name' => 'ครูปฐมวัย',
                'agency_id' => '2',
                'status' => 'on'
            ],
            [
                'id' => '7',
                'major_name' => 'ครูคณิตศาสตร์',
                'agency_id' => '2',
                'status' => 'on'
            ],
            [
                'id' => '8',
                'major_name' => 'ครูศิลปะ',
                'agency_id' => '2',
                'status' => 'on'
            ],
            [
                'id' => '9',
                'major_name' => 'ครูสังคม',
                'agency_id' => '2',
                'status' => 'on'
            ],
            ]);
    }
}
