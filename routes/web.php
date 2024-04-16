<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Models\Image;

Route::get('/', function () {
    $images = Image::all();

    foreach($images as $image){
        echo $image->image_path."<br/>";
        echo $image->description;
        echo "<p>Creador: ".$image->user->name." ".$image->user->surname."</p>";
        echo "<p><strong>Comentario</strong></p>";

        if(count($image->comments) > 0){
            foreach($image->comments as $comment){
                echo "<p><strong>".$comment->user->name."</strong>: ".$comment->content."</p>";
            }
        }
        echo "<p>Likes <strong>".count($image->likes)."</strong></p>";
        echo "<hr/>";
    }
    die();
    return view('welcome');
});
