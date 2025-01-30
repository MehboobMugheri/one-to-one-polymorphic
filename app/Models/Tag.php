<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function post(){
        return $this->morphedByMany(Post::class,'tagable');
    }

    public function vedio(){
        return $this->morphedByMany(Vedio::class,'tagable');
    }
}
