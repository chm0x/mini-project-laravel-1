<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('likes')->insert([
            'user_id' => 2,
            'image_id' => 1,
            'created_at' => Carbon::now()
        ]);
        DB::table('likes')->insert([
            'user_id' => 12,
            'image_id' => 3,
            'created_at' => Carbon::now()
        ]);
        DB::table('likes')->insert([
            'user_id' => 12,
            'image_id' => 4,
            'created_at' => Carbon::now()
        ]);
        DB::table('likes')->insert([
            'user_id' => 5,
            'image_id' => 4,
            'created_at' => Carbon::now()
        ]);
    }
}
