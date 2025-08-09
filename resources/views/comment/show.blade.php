<x-layaout :title="$pageTitle ?? 'Posts Page'">
    <h1>{{ $post->id }}</h1>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <p>Published: {{ $post->published ? 'Yes' : 'No' }}</p>
    <hr>

</x-layaout>