<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VedioController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('user',UserController::class);

Route::resource('post',PostController::class);

Route::resource('image',ImageController::class);

Route::resource('comment',CommentController::class);

Route::resource('vedio',VedioController::class);

Route::resource('tag',TagController::class);