<h1>Formulario para crear un nuevo Post</h1>
<form action="/posts" method="POST">
    @csrf
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="content">Contenido:</label>
    <textarea name="content" id="content" required></textarea>
    <br>
    <label for="category">Categoría:</label>
    <input type="text" name="category" id="category" required>
    <br>
    <button type="submit">Crear Post</button>
</form>