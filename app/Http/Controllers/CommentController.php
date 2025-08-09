<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use function PHPUnit\Framework\returnArgument;
class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        //give data to $posts

        return view('comment.index', ['comments' => $comments, 'pageTitle' => 'Comment Page']);

    }

    public function findComment($id)
    {
        $Comment = Comment::findOrFail($id);
        if ($Comment) {
            return view('post.show', ['post' => $Comment, 'pageTitle' => 'Post Details']);
        } else {
            return redirect('/blog')->with('error', 'Post not found');
        }
    }
    function create()
    {
        Comment::create([
            'content' => 'these is a test comment',
            'author' => 'billel',
            'post_id' => 2 // Assuming post_id 5 exists
        ]);
        return redirect('/comments');
    }
}