<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Post;
use App\Models\Phone;
use App\Models\Comment;

Route::get('/', HomeController::class);

Route::resource('posts', PostController::class);

Route::get('prueba', function () {
   
    $post = Post::find(1);
    // $post->tags()->detach([1, 2, 3]);
    $post->tags()->sync([1, 4]);

    return $post->tags;
   
});