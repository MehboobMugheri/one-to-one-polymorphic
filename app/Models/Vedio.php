<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vedio extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function comments(){
        return $this->morphMany(Comment::class,'comment');
    }

    public function tag(){
        return $this->morphToMany(Tag::class,'tagable');
    }
}
