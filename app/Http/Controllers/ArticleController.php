<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Database\Factories\ArticleFactory;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view("article", compact('articles'));
    }

    public function getArticle($id)
    {
        $article = Article::find($id);

        return view('', compact('article'));
    }

    public function newArticle(Request $request)
    {
        $title = $request->title;
        $body = $request->body;
        $image = $request->file('image');
        $mimeType = $image ? $image->getMimeType() : '';
        $base64Image = $image ? 'data:' . $mimeType . ';base64,' . base64_encode(file_get_contents($image->getRealPath())) : '';

        // $newArticle = Article::factory()->withParams(
        //     title: $title,
        //     body: $body,
        //     picture: $base64Image,
        // )->create();
        $newArticle = new Article();
        $newArticle->title = $title;
        $newArticle->body = $body;
        $newArticle->picture = $base64Image;
        $newArticle->save();

        $articles = Article::all();
        return redirect()->back();
    }
}
