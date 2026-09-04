<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::orderBy('id', 'desc')->get();
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug',
            'content' => 'required|string',
            'category' => 'required|string|max:255',
        ]);

        // Requiere asignación masiva.
        Post::create($request->all());

        // Post::create([
        //     'title' => $request->input('title'),
        //     'slug' => $request->input('slug'),
        //     'content' => $request->input('content'),
        //     'category' => $request->input('category'),
        //     'published_at' => now(),
        //     'is_active' => true,
        // ]);

        // $post = new Post();
        // $post->title = $request->input('title');
        // $post->slug = $request->input('slug');
        // $post->content = $request->content;
        // $post->category = $request->input('category');
        // $post->published_at = now();
        // $post->is_active = true;
        // $post->save();

        return redirect('/posts');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => "required|string|max:255|unique:posts,slug,{$post->id}",
            'content' => 'required|string',
            'category' => 'required|string|max:255',
        ]);

        $post->update($request->all());

        // $post->title = $request->input('title');
        // $post->slug = $request->input('slug');
        // $post->content = $request->content;
        // $post->category = $request->input('category');
        // $post->save();

        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}
