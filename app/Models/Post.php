<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table="posts";
    public function user(){
        return $this->belongsTo(User::class, "userId");
    }

    public function like(){
        return $this->hasMany(Like::class, "postId");
    }

    public function reply(){
        return $this->hasMany(Reply::class, "postId");
    }
}

/*
    DUMMY DATA PENTING!

    public static function All()
    {
        return [
            [
                'id' => 1,
                'title' => 'no wayyy i was told to wash my dishes with only 2 liter of water 😭',
                'body' => 're: bruh gud luck 👍😂, re2: bro is cooked ☠️'
            ],
            [
                'id' => 2,
                'title' => 'i just done the hardest water saving challenge 👍',
                'body' => 're: insane!!!, re2: NO WAYYYY, re3: bro did the impossible ☠️'
            ],
            [
                'id' => 3,
                'title' => 'dont drink a single drop of water since the morning 😎 (for the ocean ofc)',
                'body' => 're: bro saves the ocean by dismishing himself ☠️, re2: 😭😭😭'
            ]
        ];
    }
 */
