<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::with('user')->get();

        return view('community', compact('posts'));
    }

    public function addPost(Request $request){
        $userId = Auth::id();

        $image = $request->file('image');
        $mimeType = $image ? $image->getMimeType() : '';
        $base64Image = $image ? 'data:' . $mimeType . ';base64,' . base64_encode(file_get_contents($image->getRealPath())) : '';

        // dd($base64Image);
        $post = Post::factory()->withParams(
            userId: $userId,
            title: $request->title,
            body: $request->body,
            image: $base64Image,
        )->create();

        return back()->with('success', 'Post added successfully!');
    }

    public function getPostDetail($id){
        $userId = Auth::id();
        $post = Post::with('reply.user', 'like')->find($id);
        $userLiked = $post['like']->contains('userId', $userId);

        return view('post-detail', compact('post', 'userLiked'));
    }
}
