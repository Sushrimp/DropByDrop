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

        // $reply = Reply::factory()->withParams(
        //     userId: $userId,
        //     postId: $request->postId,
        //     description: $,request->desription
        // )->create();
        $reply = new Reply();
        $reply->userId = $userId;
        $reply->postId = $request->postId;
        $reply->description = $request->description;
        $reply->save();

        return back();
    }
}
