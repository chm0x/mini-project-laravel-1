<?php

namespace Database\Seeders;

use Brick\Math\BigInteger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

use \App\Models\User;
use \App\Models\Image;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_one = User::where('id', 12)->first();
        $image_del_usuario_13 = Image::where('id',3)->first();

        $user_14 = User::where('id', 14)->first();

        DB::table('comments')->insert([
            'user_id' => $user_one->id,
            'image_id' => $image_del_usuario_13->id, 
            'content' => 'Esta genial!',
            'created_at' => Carbon::now() , 
        ]);

        DB::table('comments')->insert([
            'user_id' => 14,
            'image_id' => 1, 
            'content' => 'Tu primer imagen es tan guay, wey!',
            'created_at' => Carbon::now() , 
        ]);

        DB::table('comments')->insert([
            'user_id' => 14,
            'image_id' => 3, 
            'content' => 'Ta chido tu imagen',
            'created_at' => Carbon::now() , 
        ]);
    }
}
