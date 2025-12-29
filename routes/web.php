<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;

Route::get('/test-relation', [UserController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/detail', [ArticleController::class, 'detail']);

Route::get('/post-list', [UserController::class, 'postList']);

Route::get('/post-user', [PostController::class, 'postedUser']);

Route::get('/user/likes', [LikeController::class, 'showLikedPosts']);

Route::get('/post/likers', [LikeController::class, 'showPostLikers']);

Route::get('/user/{id}/latest-comment', [UserController::class, 'showLatestComment']);

Route::get('/user/{id}/comments', [UserController::class, 'showUserComments']);
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/articles', function () {
//     return 'Article List';
//    });
//    Route::get('/articles/detail', function () {
//     return 'Article Detail';
//    });
//    Route::get('/articles/detail/{id}', function ( $id ) {
//     return "Article Detail - $id";
//    });
//    Route::get('/articles/detail', function () {
//     return 'Article Detail';
//    })->name('article.detail');

//    Route::get('/articles/more', function() {
//     return redirect()->route('article.detail');
//    });

// use App\Http\Controllers\TEst\TestController;

//    Route::get('/articles', [TestController::class, 'index1']);
//    Route::get('/articles/detail/{id}', [TestController::class, 'detail']);
//    Route::get('/articles/test', [TestController::class, 'test']);
//    Route::get('/articles/order', [TestController::class, 'order']);
//    Route::get('/articles/index', [TestController::class, 'index']);

// routes/web.php

// use App\Models\Article;

// Route::get('/test-dd', function () {
//     $articles= Article::all();
//     //dd($articles);   // Dump and Die here
// });



