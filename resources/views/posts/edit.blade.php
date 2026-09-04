<h1>Formulario para crear un nuevo Post</h1>
<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Título:</label>
    <input type="text" name="title" id="title"  value ="{{ old('title', $post->title) }}">
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="slug">Slug:</label>
    <input type="text" name="slug" id="slug"  value="{{ old('slug', $post->slug) }}">
    @error('slug')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="content">Contenido:</label>
    <textarea name="content" id="content" >{{ old('content', $post->content) }}</textarea>
    @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="category">Categoría:</lab el>
    <input type="text" name="category" id="category"  value="{{ old('category', $post->category) }}">
    @error('category')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <button type="submit">Actualizar Post</button>
</form>