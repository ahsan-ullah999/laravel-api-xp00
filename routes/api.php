<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\PostCondition;

// Route::resource('users',UserController::class);
Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'show']);
Route::post('/users',[UserController::class,'store']);
Route::patch('/users/{user}',[UserController::class,'update']);
Route::delete('/users/{user}',[UserController::class,'destroy']);
Route::get('/users/search/{name}',[UserController::class,'search']);
/* Route::resource('posts',PostController::class);*/
Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{post}',[PostController::class,'show']);
Route::post('/posts',[PostController::class,'store']);
Route::patch('/posts/{post}',[PostController::class,'update']);
Route::delete('/posts/{post}',[PostController::class,'destroy']);
Route::get('/posts/search/{title}',[PostController::class,'search']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
