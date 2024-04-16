<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 10; $i ++){
            DB::table('users')->insert([
                'role' => 'user',
                'name' => Str::random(10),
                'surname' => Str::random(10),
                'nickname' => Str::random(10),
                'email' => Str::random(10)."@example.com",
                'password' => Hash::make('password')
            ]);
        }

        DB::table('users')->insert([
            'role' => 'admin',
            'name' => 'admin',
            'surname' => Str::random(10),
            'nickname' => 'administrator',
            'email' => 'admin'."@example.com",
            'password' => Hash::make('admin')
        ]);
    }
}
