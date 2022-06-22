<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
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

Route::get('/users',[\App\Http\Controllers\UserController::class,'index']);
Route::get('/users/{id}',[\App\Http\Controllers\UserController::class,'findById']);
Route::get('/users/{id}',[\App\Http\Controllers\UserController::class,'show']);
Route::get('/users/{id}',[\App\Http\Controllers\UserController::class,'showAdress']);
Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/{id}', [PostController::class,'show']);

Route::get('/', function () {
    return view('welcome');
});
