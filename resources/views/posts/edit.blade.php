<h1>Formulario para crear un nuevo Post</h1>
<form action="/posts/{{ $post->id }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" required value ="{{ old('title', $post->title) }}">
    <br>
    <label for="content">Contenido:</label>
    <textarea name="content" id="content" required>{{ old('content', $post->content) }}</textarea>
    <br>
    <label for="category">Categoría:</label>
    <input type="text" name="category" id="category" required value="{{ old('category', $post->category) }}">
    <br>
    <button type="submit">Actualizar Post</button>
</form>