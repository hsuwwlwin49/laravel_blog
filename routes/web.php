<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/guest', function () {
    return 'Guest Page - Only guest can access';
})->middleware('guest');

Route::get('/auth_user', function () {
    return 'Auth User Page - Only Auth User can access';
})->middleware('auth');

Route::get('/admin', function () {
    return 'Admin Page - Only admin can access';
})->middleware('check.email');

Route::middleware('auth')->group(function () {
	Route::get('/articles/create', [ArticleController::class, 'create']);
	Route::post('/articles/store', [ArticleController::class, 'store']);
});
//Create Post form
Route::middleware('auth')->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
});




Route::get('/test-relation', [UserController::class, 'index']);
//Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/edit/{id}', [ArticleController::class, 'edit']);
Route::put('/articles/update/{id}', [ArticleController::class, 'update']);
Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);
Route::get('/articles/detail', [ArticleController::class, 'detail']);

Route::get('/post-list', [UserController::class, 'postList']);

Route::get('/post-user', [PostController::class, 'postedUser']);

Route::get('/user/likes', [LikeController::class, 'showLikedPosts']);

Route::get('/post/likers', [LikeController::class, 'showPostLikers']);

Route::get('/user/{id}/latest-comment', [UserController::class, 'showLatestComment']);

Route::get('/user/{id}/comments', [UserController::class, 'showUserComments']);

require __DIR__.'/auth.php';
