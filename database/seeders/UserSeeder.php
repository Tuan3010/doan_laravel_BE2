<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'duytuan@gmail.com'],
            [
                'name' => 'Nguyễn Duy Tuấn',
                'user_name' => 'admin1',
                'role' => 0,
                'password' => Hash::make('123456')
            ]
            
        );
        DB::table('users')->updateOrInsert(
            ['email' => 'quocluong@gmail.com'],
            [
                'name' => 'Nguyễn Quốc Lượng',
                'user_name' => 'admin2',
                'role' => 0,
                'password' => Hash::make('123456'),
            ]
        );
    }
}
