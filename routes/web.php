<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('prueba', function () {

    $post = Post::find(1);
    return $post;
    
    // dd($post->is_active);
    //return $post->published_at->format('d-m-Y');

    //return $post->created_at->format('d-m-Y');

    // Creación    
    // $post = new Post();
    // $post->title = 'Prueba1';
    // $post->content = 'Contenido de prueba';
    // $post->category = 'General';
    // $post->published_at = now();
    // $post->is_active = true;
    // $post->save();
    // return $post;

    // Buscar
    // $post = Post::find(1);
    
    // Modificar
    // $post = Post::where('category', 'Programación')->first();
    // $post->category = 'Desarrollo web';
    // $post->save();

    // Traer varios registros
    // $posts = Post::all();
    // $posts = Post::where('category', 'Programación')->get();
    // $posts = Post::orderBy('category', 'desc')->get();    
    // $posts = Post::select('title', 'content', 'category')->orderBy('category', 'desc')->get();

    // $post->delete();

    // return $posts;
});