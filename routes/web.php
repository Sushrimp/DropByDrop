<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', [ChallengeController::class, 'index']);
// Route::get('/',  function () {
//     return 'ok berhasil masuk home';
// });

// -------------------- AUTH ROUTES
Route::get('/login', function () {
    return view('login');
});
Route::post('/logincheck', [UserController::class, 'logincheck']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/register', function () {
    return view('register');
});
Route::post('/signup', [UserController::class, 'signup']);

// ------------------- POST ROUTES (COMMUNITY)
Route::get('/community', [PostController::class,'index']);
Route::get('/community/detail/{id}', [PostController::class, 'getPostDetail']);

Route::get('/newpost', function () {
    return view('new-post');
});
Route::post('/addPost', [PostController::class, 'addPost']);
Route::post('/addReply', [ReplyController::class, 'addReply']);

Route::post('/likePost', [LikeController::class, 'addLike']);
Route::post('/unlikePost', [LikeController::class, 'deleteLike']);


Route::get('/about', function () {
    return view('about');
});
// Route::get('/tailwind-test', function () {
//     return view('app');
// });
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/proof', [ChallengeController::class, 'proof'])->name('proof');
Route::get('/profile', [UserController::class, 'profile']);

// localization
Route::get('/locale/{locale}', [LocalizationController::class, 'setLocale']);
