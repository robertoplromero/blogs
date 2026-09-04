<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::resource('posts', PostController::class);

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

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