<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function addReply(Request $request){
        $userId = Auth::id();

        $reply = Reply::factory()->withParams(
            userId: $userId,
            postId: $request->postId,
            description: $request->description,
        )->create();

        return back();
    }
}
