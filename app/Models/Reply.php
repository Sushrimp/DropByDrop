<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $table="replies";
    public function user(){
        return $this->belongsTo(User::class, "userId");
    }

    public function post(){
        return $this->belongsTo(Post::class, "postId");
    }
}
