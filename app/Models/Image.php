<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';



    // One to many
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    // One to many
    public function likes(){
        return $this->hasMany('App\Models\Like');
    }

    // Many images to one creator
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
