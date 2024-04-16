<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 3; $i ++ ){
            DB::table('users')->insert([
                'role' => 'user',
                'name' => 'Usuario'.$i.Str::random(3),
                'surname' => 'Usuario'.$i.Str::random(3),
                'nickname' => 'Usuario'.$i.Str::random(3),
                'email' => 'User'.$i."@example.com",
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
