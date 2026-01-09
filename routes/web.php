<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/admin', function () {
    return 'Admin Page - Only admin can access';
})->middleware('check.email');

// List all posts of current user
Route::get('/posts', [PostController::class, 'index'])
->name('posts.index');

// View a single post
Route::get('/posts/{post}', [PostController::class, 'show'])
->name('posts.show')
->middleware('is.owner:post');

require __DIR__.'/auth.php';
