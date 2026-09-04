@extends('layouts.app')

@section('content')
<a href="{{ route('posts.index') }}">Volver a la lista de Posts</a>
<h1>Formulario para crear un nuevo Post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}" >
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="slug">Slug:</label>
    <input type="text" name="slug" id="slug" value="{{ old('slug') }}" >
    @error('slug')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="content">Contenido:</label>
    <textarea name="content" id="content" >{{ old('content') }}</textarea>
    @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="category">Categoría:</label>
    <input type="text" name="category" id="category" value="{{ old('category') }}" >
    @error('category')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <button type="submit">Crear Post</button>
</form>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection