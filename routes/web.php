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
   
    // return $post = Post::first();
    $post = Post::first();
    $comment = Comment::create([
        'content' => 'Comentario de prueba',
        'commentable_id' => $post->id,
        'commentable_type' => Post::class
    ]);
    return Comment::all();
   
});