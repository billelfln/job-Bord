<x-layaout :title="$pageTitle ?? 'Posts Page'">

    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <p>Published: {{ $post->published ? 'Yes' : 'No' }}</p>
    <br>
    <p>Comments:</p>
    @foreach ($post->comments as $comment)
        <h3>Comment by {{ $comment->author }}</h3>
        <p>{{ $comment->content }}</p>
        <a href="/blog/{{ $comment->post_id }}">
            <p>Related Post: {{ $comment->post->title }}</p>
        </a>
        <hr>
    @endforeach
    <p>Total comments is: {{ $post->comments->count() }}</p>
    <hr>

</x-layaout>