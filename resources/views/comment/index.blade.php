<x-layaout :title="$pageTitle ?? 'Posts Page'">
    <h2>Comments exploring {testing}</h2>
    @foreach ($comments as $comment)
        <h1>{{ $comment->author }}</h1>
        <p>{{ $comment->content }}</p>
        <a href="/blog/{{ $comment->post_id }}">
            <p>{{ $comment->post->title }}</p>
        </a>

        <hr>
    @endforeach
</x-layaout>