<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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

Route::get('/', function () {
    return view('add-post');
});


Route::get('/add-post',[postController::class,'addPost']);
Route::post('/create-post',[postController::class,'createPost']);

Route::get('/posts',[postController::class,'getPost']);

Route::get('/posts/{id}',[postController::class,'getPostById']);
Route::get('/delete-post/{id}',[postController::class,'deletePost']);
Route::any('/edit-post/{id}',[postController::class,'editPost']);
Route::any('/update-post',[postController::class,'updatePost'])->name('post.update');
