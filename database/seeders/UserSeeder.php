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
        DB::table('users')->insert([
            'name' => 'Nguyễn Duy Tuấn',
            'email' => 'duytuan@gmail.com',
            'user_name' => 'admin1',
            'role' => 0,
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Nguyễn Quốc Lượng',
            'email' => 'quocluong@gmail.com',
            'user_name' => 'admin2',
            'role' => 0,
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Đặng Văn Sang',
            'email' => 'vansang@gmail.com',
            'user_name' => 'admin3',
            'role' => 0,
            'password' => Hash::make('123456'),
        ]);
    }
}
