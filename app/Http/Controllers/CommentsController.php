<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post){
        $this->validate(request(), [
            'name' => 'required|min:1',
            'body' => 'required|min:2'
        ]);
        //Add a comment to a post

        Comment::create([
            'name' => request('name'),
            'body' => request('body'),
            'post_id' => $post->id
        ]);

        return back();
    }
}
