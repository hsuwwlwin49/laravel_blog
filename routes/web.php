<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\TEst\TestController;

   Route::get('/articles', [TestController::class, 'index1']);
   Route::get('/articles/detail/{id}', [TestController::class, 'detail']);
   Route::get('/articles/test', [TestController::class, 'test']);
   Route::get('/articles/order', [TestController::class, 'order']);
   Route::get('/articles/items', [TestController::class, 'items']);
