<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo por aprobar</h1>
    <p>Se ha creado el post: {{ $post->title }}</p>
    <a href="{{ route('posts.show', $post) }}">Ver post</a>
</body>
</html>