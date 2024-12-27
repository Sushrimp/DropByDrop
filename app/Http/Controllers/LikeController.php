<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function addLike(Request $request){
        $userId = Auth::id();

        // $like = Like::factory()->withParams(
        //     postId: $request->postId,
        //     userId: $userId,
        // )->create();
        $like = new Like();
        $like->postId = $request->postId;
        $like->userId = $userId;
        $like->save();

        return back();
    }

    public function deleteLike(Request $request){
        $userId = Auth::id();

        $like = Like::where('postId', $request->postId)
                    ->where('userId', $userId)
                    ->first();

        if ($like) {
            $like->delete();
        }

        return back();
    }
}
