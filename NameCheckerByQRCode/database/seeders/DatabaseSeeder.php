<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(UserTableSeeder::class);
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [   'id' => '1',
                'name' => 'Test User',
                'student_id' => '63113532037',
                'password' => Hash::make('123456')
            ],
            [   
                'id' => '2',
                'name' => 'Test User 2',
                'student_id' => '63113532008',
                'password' => Hash::make('123456')
            ],
        ]);
            

    }
}
