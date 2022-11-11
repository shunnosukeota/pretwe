<?php

use App\Http\Controllers\Tweet\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', \App\Http\Controllers\Tweet\IndexController::class)->name('tweet.index');

// Sample
Route::get('/sample', [\App\Http\Controllers\Sample\IndexController::class, 'show']);
Route::get('/sample/{id}', [\App\Http\Controllers\Sample\IndexController::class, 'showId']);


// Tweet
Route::get('/tweet', \App\Http\Controllers\Tweet\IndexController::class)->name('tweet.index');
Route::get('/tweet/search', \App\Http\Controllers\Tweet\SearchController::class)->name('tweet.search');
Route::get('/tweet/content/{tweetId}', \App\Http\Controllers\Tweet\ContentController::class)->name('tweet.content.index');
Route::get('/tweet/user/{userId}', \App\Http\Controllers\Tweet\UserIndexController::class)->name('tweet.user.index');
Route::middleware('auth')->group(function () {
    Route::get('/tweet/マイページ', \App\Http\Controllers\Tweet\MyIndexController::class)->name('tweet.my.index');
    Route::post('/tweet/create', \App\Http\Controllers\Tweet\CreateController::class)
        ->name('tweet.create'); //->middleware('auth')は削除
    Route::get('/tweet/update/{tweetId}', \App\Http\Controllers\Tweet\Update\IndexController::class)->name('tweet.update.index');
    Route::put('/tweet/update/{tweetId}', \App\Http\Controllers\Tweet\Update\PutController::class)->name('tweet.update.put');
    Route::put('/tweet/rating/{tweetId}', \App\Http\Controllers\Tweet\RatingController::class)->name('tweet.rating.put');
    Route::delete('/tweet/delete/{tweetId}', \App\Http\Controllers\Tweet\DeleteController::class)->name('tweet.delete');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';