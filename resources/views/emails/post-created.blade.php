<x-mail::message>
# Correo por aprobar

<x-mail::panel>
Se ha creado el post: {{ $post->title }}
</x-mail::panel>

<x-mail::button :url="route('posts.show', $post)" class="primary">
Ver post
</x-mail::button>
    {{--   <h1>Correo por aprobar</h1> 
    <p>Se ha creado el post: {{ $post->title }}</p> 
    <a href="{{ route('posts.show', $post) }}">Ver post</a> --}}
</x-mail::message>