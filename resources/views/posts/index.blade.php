@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    <div role="alert">
        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
            Danger
        </div>
        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            <p>Something not ideal might be happening.</p>
        </div>
    </div>

    <x-alert2 type="success" class="mb-4">
        <x-slot name="title">
            Error fatal
        </x-slot>
        Esto es una alerta de error que tiene más drama de lo que realmente sucedió. 
    </x-alert2>
    Hola, mundo

    <a href="/posts/create">Crear un post</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
    {{ $posts->links() }}
@endsection