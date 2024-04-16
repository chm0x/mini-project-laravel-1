<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            'user_id' => 12,
            'image_path' => 'images_'.Str::random(3).".png",
            'description' => 'Descripcion de la imagen: '.Str::random(3),
            'created_at' => Carbon::now()
        ]);
        DB::table('images')->insert([
            'user_id' => 12,
            'image_path' => 'images2_'.Str::random(3).".png",
            'description' => 'Descripcion de la imagen: '.Str::random(3),
            'created_at' => Carbon::now()
        ]);
        DB::table('images')->insert([
            'user_id' => 13,
            'image_path' => 'images_del_usuario_13'.Str::random(3).".png",
            'description' => 'Descripcion de la imagen: '.Str::random(3),
            'created_at' => Carbon::now()
        ]);
        DB::table('images')->insert([
            'user_id' => 14,
            'image_path' => 'images_del_usuario_14'.Str::random(3).".png",
            'description' => 'Descripcion de la imagen: '.Str::random(3),
            'created_at' => Carbon::now()
        ]);
        
    }
}
