<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Comment;

Route::get('/', HomeController::class);

Route::resource('posts', PostController::class);

Route::get('prueba', function () {

    return Comment::all();

    Comment::create([
        'content' => 'Este es otro comentario de prueba',
        'post_id' => 1,
    ]);
    return 'Comentario creado';
    
});