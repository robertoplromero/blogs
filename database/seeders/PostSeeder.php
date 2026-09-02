<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        $post->title = 'Posts1';
        $post->content = 'Content1';
        $post->category = 'Category1';
        $post->save();

        $post = new Post();
        $post->title = 'Posts2';
        $post->content = 'Content2';
        $post->category = 'Category2';
        $post->save();

        $post = new Post();
        $post->title = 'Posts3';
        $post->content = 'Content3';
        $post->category = 'Category3';
        $post->save();

        $post = new Post();
        $post->title = 'Posts4';
        $post->content = 'Content4';
        $post->category = 'Category4';
        $post->save();

        $post = new Post();
        $post->title = 'Posts5';
        $post->content = 'Content5';
        $post->category = 'Category5';
        $post->save();

        $post = new Post();
        $post->title = 'Posts6';
        $post->content = 'Content6';
        $post->category = 'Category6';
        $post->save();
    }
}
