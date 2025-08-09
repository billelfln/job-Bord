<x-layaout :title="$pageTitle ?? 'Posts Page'">
    @foreach ($posts as $post)
        <h1>{{ $post->id }}</h1>
        <h2>{{ $post->author }}</h2>
        <p>{{ $post->body }}</p>
        <p>Published: {{ $post->published ? 'Yes' : 'No' }}</p>
        <hr>
    @endforeach
</x-layaout>