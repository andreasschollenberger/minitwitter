<?php
use App\Http\Controllers\TweetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/tweets', [TweetController::class, 'index']); 
Route::get('/singletweets/{id}', [TweetController::class, 'show']); 


Route::post('/createtweet', [TweetController::class, 'store']); 
Route::delete('/singletweets/{id}', [TweetController::class, 'distroy']);

Route::put('/singletweets/{id}', [TweetController::class, 'update']);