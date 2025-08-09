<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use function PHPUnit\Framework\returnArgument;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //give data to $posts

        return view('post.index', ['posts' => $posts, 'pageTitle' => 'Posts Page']);

    }

    public function findPost($id)
    {
        $post = Post::findOrFail($id);
        if ($post) {
            return view('post.show', ['post' => $post, 'pageTitle' => 'Post Details']);
        } else {
            return redirect('/blog')->with('error', 'Post not found');
        }
    }
    function create()
    {
        $post = Post::create([
            'title' => 'My First Post',
            'author' => 'billel',
            'body' => 'This is to test find methode.',
            'published' => true,
        ]);
        return redirect('/blog');
    }

    function delete($id)
    {
        $post = Post::findOrFail($id);
        if ($post) {
            $post->delete();
            return redirect('/blog')->with('success', 'Post deleted successfully');
        } else {
            return redirect('/blog')->with('error', 'Post not found');
        }
    }
}