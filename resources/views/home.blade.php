<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <h1 class="max-w-4xl mx-auto px-4">Bienvenido a la página principal</h1>
    <x-alert2 type="info" class="mb-4">
        <x-slot name="title">Error</x-slot>
        Contenido de la alerta
    </x-alert2>
    <p>Hola mundo</p>
</body>
</html>